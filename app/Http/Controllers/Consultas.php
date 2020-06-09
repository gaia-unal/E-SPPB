<?php

namespace E_SPPB\Http\Controllers;

use Illuminate\Http\Request;

class Consultas extends Controller
{

    public function __construct()
    {
        // $this->middleware('guest');
    }
    
    public function consultaP(){
        $conP=true;
        return view('home', compact('conP'));
    }

    public function consultaL(){
        $conL=true;
        return view('home', compact('conL'));
    }

    public function store(Request $request){

        $conP=true;

        $this->validate($request,
            [
                'consultaPer'=> 'required'
            ]
        );
        $consultaPer=$request->input('consultaPer');

        try {
            $results = \DB::select( \DB::raw($consultaPer) );

            $cade= json_encode($results);
                
            $cade=str_replace ('[','',$cade);
            $cade=str_replace (']','',$cade);
            $cade=str_replace ('},{',';',$cade);
            $cade=str_replace ('{','',$cade);
            $cade=str_replace ('}','',$cade);
            $cade=str_replace ('"','',$cade);
            
            $cade=str_replace (':',',',$cade);

            $other= preg_split('~;~',$cade);            
            
            $other1= preg_split('~,~',$other[0]);

            $names= array();
            for ($i=0; $i < count($other1); $i+=2) { 
                array_push ($names,$other1[$i]);
            }
            
            $matResult=[[]];

            for ($i=0; $i < count($other); $i++) { 
                $other1= preg_split('~,~',$other[$i]);
                for ($j=1,$col=0; $j < count($other1); $j+=2,$col++) { 
                    $matResult[$i][$col]=$other1[$j];
                }
            }
            return view('home', compact('conP','consultaPer','names','matResult'));
        } catch (\Throwable $th) {
            $errorCon =true;
            return view('home', compact('conP','consultaPer','errorCon'));
        }        
    }
}
