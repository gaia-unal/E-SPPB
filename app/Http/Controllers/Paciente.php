<?php

namespace E_SPPB\Http\Controllers;

use Illuminate\Http\Request;

class Paciente extends Controller
{

    public function __construct()
    {
        
    }
    
    public function initial()
    {
        $history=true;
        return view('patient');
    }

    public function store(Request $request){
        // $history=true;
        // $conCed=true;

        $this->validate($request,
            [
                'cedula'=> 'required'
            ]
        );
        $cedula=$request->input('cedula');

        $cedul= \DB::table('patient')
        ->join('form', 'patient.id', '=', 'form.patient_id')
        ->join('demographic_aspects', 'demographic_aspects.form_id', '=', 'form.id')
        ->select('patient.*','demographic_aspects.*')
        ->where('patient.id', $cedula)
        ->where('patient.id_medico',\Auth::user()->id)
        ->get()->first();

        $vacia=empty($cedul);



        return view('patient', compact('cedul','vacia'));
    
    }


}
