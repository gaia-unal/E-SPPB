<?php

namespace E_SPPB\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $this->validate($request,
            [
                'name'=> 'required',
                'apellido'=> 'required',
                'email2'=> 'required',
                'date'=> 'required',
                'profesion'=> 'required',
                'institucion'=> 'required',
                'motivo'=> 'required'
            ]
        );

        \DB::table('solicitud')->insert(
            [
                'nombre' => $request->input('name'),
                'apellidos' => $request->input('apellido'),
                'email' => $request->input('email2'),
                'fecha' => $request->input('date'),
                'profesion' => $request->input('profesion'),
                'institucion' => $request->input('institucion'),
                'motivo' => $request->input('motivo')
            ]
        );
        
        $registrado=true;
        $aspD= \DB::table('demographic_aspects')
        ->select('age', 'gender','size','weight','cigarettes','alcohol_last_month','speed','educational_level','stratum','monthly_income')
        ->get();

        $g2= \DB::table('minimental_test')
        ->join('demographic_aspects', 'minimental_test.form_id', '=', 'demographic_aspects.form_id')
        ->select('minimental_test.final_score','demographic_aspects.gender')
        ->get();
        
        $alF= \DB::table('functional_scope_e_sppb')->select('mayor_distance')->get();

        $buE= \DB::table('built_environment')
        ->join('questions', 'built_environment.question_id', '=', 'questions.id')
        ->select('questions.name','questions.id','built_environment.answer')
        ->get();

        $e_sppb=\DB::table('e_sppb')
        ->select('score')
        ->get();
        return view('initial', compact('registrado','aspD','g2','alF','buE','e_sppb'));
        // return view('initial', compact('registrado'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {



        // $results = \DB::select('select * from solicitud where id = ?', [$id]);
        // $usuario= \DB::table('solicitud')->where('id', '=', $id)->get();
        // $edit=true;
        // echo $results;
        // return view('home')->with(['edit'=> true, 'usuario'=>$results]);
        // return view('home', compact('edit','usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // $affected = \DB::table('solicitud')
        // ->where('id', $id)
        // ->update(['respuesta' => $request->select('respuesta')]);

        // dump($request);
        // if (is_array($request) || is_object($request)){

        //     foreach ($request->get('respuesta') as $key => $value) {
        //         echo $key;
        //     }
        // }
        
    }

    public function cambio(Request $request){
        // $checkbox = \Input::get('respuesta');
        // var_dump($checkbox);

        // foreach ($request->get('respuesta')  as $key => $value) {
        //     echo $request->input('respuesta')[$key];
        // }
  
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
