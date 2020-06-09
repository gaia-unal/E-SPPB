<?php

namespace E_SPPB\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

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
        

        
        
        $ind=true;

        if(\Auth::user()->rol === 'Investigador'){
            $users= \DB::table('solicitud')->select(
                'id', 
                'nombre', 
                'apellidos',
                'email',
                'fecha',
                'profesion',
                'institucion',
                'motivo'
                )->get();

            return view('home', compact('users','aspD','g2','alF','buE','e_sppb','ind'));
        }else{
            // return view('home', compact('aspD','g2','ind'));
            return view('home', compact('aspD','g2','alF','buE','e_sppb','ind'));
            
        }
        
        
    }
}
