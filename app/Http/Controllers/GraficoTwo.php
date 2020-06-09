<?php

namespace E_SPPB\Http\Controllers;

use Illuminate\Http\Request;

class GraficoTwo extends Controller
{


    public function initial(Request $request){

        if(\Auth::check()){
   
            $this->validate($request,
            [
                'op_1'=> 'required',
                'region'=> 'required'
            ]
            );
    
            $region=$request->input('region');
            $aspecto=$request->input('op_1');
    
            $region_div='';
    
            if( $region=='mag'){ $region_div='Magdalena caldense';}
            else if( $region=='alor'){ $region_div='Alto oriente';}
            else if( $region=='nor'){ $region_div='Norte';}
            else if( $region=='alocc'){ $region_div='Alto occidente';}
            else if( $region=='bjocc'){ $region_div='Bajo occidente';}
            else if( $region=='cs'){ $region_div='Centro sur';}
          
            
            if( $region=='st'){
    
                if($aspecto=='p1'){
                    
                    $consulta_1=\DB::table('demographic_aspects')
                    ->join('form', 'demographic_aspects.form_id', '=', 'form.id')
                    ->join('patient', 'patient.id', '=', 'form.patient_id')
                    ->select('demographic_aspects.age','patient.city')
                    ->where('patient.id_medico','=',\Auth::user()->id)
                    ->get();
                    $grafico=1;
                    return view('grafico', compact('consulta_1','grafico'));
    
                }else if($aspecto=='p2'){
                        
                    $consulta_2=\DB::table('demographic_aspects')
                    ->join('form', 'demographic_aspects.form_id', '=', 'form.id')
                    ->join('patient', 'patient.id', '=', 'form.patient_id')
                    ->select('demographic_aspects.civil_status')
                    ->where('patient.id_medico','=',\Auth::user()->id)
                    ->get();
                    $grafico=2;
                    return view('grafico', compact('consulta_2','grafico'));
    
                }else if($aspecto=='p3'){
                        
                    $consulta_3=\DB::table('demographic_aspects')
                    ->join('form', 'demographic_aspects.form_id', '=', 'form.id')
                    ->join('patient', 'patient.id', '=', 'form.patient_id')
                    ->select('demographic_aspects.civil_status','demographic_aspects.gender')
                    ->where('patient.id_medico','=',\Auth::user()->id)
                    ->get();
                    $grafico=3;
                    return view('grafico', compact('consulta_3','grafico'));
    
                }else if($aspecto=='p4'){
                        
                    $consulta_4=\DB::table('demographic_aspects')
                    ->join('form', 'demographic_aspects.form_id', '=', 'form.id')
                    ->join('patient', 'patient.id', '=', 'form.patient_id')
                    ->select('civil_status','age')
                    ->where('patient.id_medico','=',\Auth::user()->id)
                    ->get();
                    $grafico=4;
                    return view('grafico', compact('consulta_4','grafico'));
    
                }else if($aspecto=='p5'){
                        
                    $consulta_5=\DB::table('demographic_aspects')
                    ->join('form', 'demographic_aspects.form_id', '=', 'form.id')
                    ->join('patient', 'patient.id', '=', 'form.patient_id')
                    ->select('educational_level')
                    ->where('patient.id_medico','=',\Auth::user()->id)
                    ->get();
                    $grafico=5;
                    return view('grafico', compact('consulta_5','grafico'));
    
                }else if($aspecto=='p6'){
                        
                    $consulta_6=\DB::table('demographic_aspects')
                    ->select('affiliation_type')
                    ->join('form', 'demographic_aspects.form_id', '=', 'form.id')
                    ->join('patient', 'patient.id', '=', 'form.patient_id')
                    ->where('patient.id_medico','=',\Auth::user()->id)
                    ->get();
                    $grafico=6;
                    return view('grafico', compact('consulta_6','grafico'));
    
                }else if($aspecto=='p7'){
                        
                    $consulta_7=\DB::table('demographic_aspects')
                    ->join('form', 'demographic_aspects.form_id', '=', 'form.id')
                    ->join('patient', 'patient.id', '=', 'form.patient_id')
                    ->where('patient.id_medico','=',\Auth::user()->id)
                    ->select('stratum')
                    ->get();
                    $grafico=7;
                    return view('grafico', compact('consulta_7','grafico'));
    
                }else if($aspecto=='p8'){
                        
                    $consulta_8=\DB::table('demographic_aspects')
                    ->join('form', 'demographic_aspects.form_id', '=', 'form.id')
                    ->join('patient', 'patient.id', '=', 'form.patient_id')
                    ->select('monthly_income')
                    ->where('patient.id_medico','=',\Auth::user()->id)
                    ->get();
                    $grafico=8;
                    return view('grafico', compact('consulta_8','grafico'));
    
                }else if($aspecto=='p9'){
                        
                    $consulta_9=\DB::table('demographic_aspects')
                    ->join('form', 'demographic_aspects.form_id', '=', 'form.id')
                    ->join('patient', 'patient.id', '=', 'form.patient_id')
                    ->select('source_income')
                    ->where('patient.id_medico','=',\Auth::user()->id)
                    ->get();
                    $grafico=9;
                    return view('grafico', compact('consulta_9','grafico'));
    
                }
                // else if($aspecto=='p10'){
                        
                //     $consulta_10=\DB::table('algo1')
                //     ->join('algo2', 'algo1.id', '=', 'algo2.id')
                //     ->select('algo1.name','algo2.name')
                //     ->get();
                //     $grafico=10;
                //     return view('grafico', compact('consulta_10','grafico'));
    
                // }
                else if($aspecto=='p11'){
    
                    $consulta_11= \DB::table('built_environment')
                    ->join('questions', 'built_environment.question_id', '=', 'questions.id')
                    ->join('form', 'built_environment.form_id', '=', 'form.id')
                    ->join('patient', 'patient.id', '=', 'form.patient_id')
                    ->select('questions.name','questions.id','built_environment.answer')
                    ->where('patient.id_medico','=',\Auth::user()->id)
                    ->get();
                    $grafico=11;
                    return view('grafico', compact('consulta_11','grafico')); 
    
                }else if($aspecto=='p12'){
                        
                    $consulta_12=\DB::table('built_environment')
                    ->join('questions', 'built_environment.question_id', '=', 'questions.id')
                    ->join('form', 'built_environment.form_id', '=', 'form.id')
                    ->join('patient', 'patient.id', '=', 'form.patient_id')
                    ->select('questions.name','questions.id','built_environment.answer')
                    ->where('patient.id_medico','=',\Auth::user()->id)
                    ->get();
                    $grafico=12;
                    return view('grafico', compact('consulta_12','grafico'));
    
                }else if($aspecto=='p13'){
                        
                    $consulta_13= \DB::table('functional_scope_e_sppb')
                    ->select('mayor_distance')
                    ->get();
                    $grafico=13;
                    return view('grafico', compact('consulta_13','grafico'));
    
                }else if($aspecto=='p14'){
                        
                    $consulta_14=\DB::table('test_balance')
                    ->select('final_score')
                    ->get();
                    $grafico=14;
                    return view('grafico', compact('consulta_14','grafico'));
    
                }else if($aspecto=='p15'){
                        
                    $consulta_15=\DB::table('e_sppb')
                    ->join('form', 'e_sppb.form_id', '=', 'form.id')
                    ->join('patient', 'patient.id', '=', 'form.patient_id')
                    ->select('score')
                    ->where('patient.id_medico','=',\Auth::user()->id)
                    ->get();
                    $grafico=15;
                    return view('grafico', compact('consulta_15','grafico'));
    
                }else if($aspecto=='p16'){
                        
                    $consulta_16=\DB::table('demographic_aspects')
                    ->join('form', 'demographic_aspects.form_id', '=', 'form.id')
                    ->join('patient', 'patient.id', '=', 'form.patient_id')
                    ->select('cigarettes','gender')
                    ->where('patient.id_medico','=',\Auth::user()->id)
                    ->get();
                    $grafico=16;
                    return view('grafico', compact('consulta_16','grafico'));
    
                }else if($aspecto=='p17'){
                        
                    $consulta_17=\DB::table('demographic_aspects')
                    ->join('form', 'demographic_aspects.form_id', '=', 'form.id')
                    ->join('patient', 'patient.id', '=', 'form.patient_id')
                    ->select('alcohol_last_month','gender')
                    ->where('patient.id_medico','=',\Auth::user()->id)
                    ->get();
                    $grafico=17;
                    return view('grafico', compact('consulta_17','grafico'));
    
                }else if($aspecto=='p18'){
                        
                    $consulta_18=\DB::table('demographic_aspects')
                    ->join('form', 'demographic_aspects.form_id', '=', 'form.id')
                    ->join('patient', 'patient.id', '=', 'form.patient_id')
                    ->where('patient.id_medico','=',\Auth::user()->id)
                    ->select('speed')
                    ->get();
                    $grafico=18;
                    return view('grafico', compact('consulta_18','grafico'));
    
                }
    
            }else{
    
                if($aspecto=='p1'){
                    
                    $consulta_1=\DB::table('demographic_aspects')
                    ->join('form', 'demographic_aspects.form_id', '=', 'form.id')
                    ->join('patient', 'patient.id', '=', 'form.patient_id')
                    ->select('demographic_aspects.age','patient.city')
                    ->where('patient.subregion', '=', $region_div)
                    ->where('patient.id_medico','=',\Auth::user()->id)
                    ->get();
                    $grafico=1;
                    return view('grafico', compact('consulta_1','grafico'));
    
                }else if($aspecto=='p2'){
                        
                    $consulta_2=\DB::table('demographic_aspects')
                    ->join('form', 'demographic_aspects.form_id', '=', 'form.id')
                    ->join('patient', 'patient.id', '=', 'form.patient_id')
                    ->select('demographic_aspects.civil_status')
                    ->where('patient.subregion', '=', $region_div)
                    ->where('patient.id_medico','=',\Auth::user()->id)
                    ->get();
                    $grafico=2;
                    return view('grafico', compact('consulta_2','grafico'));
    
                }else if($aspecto=='p3'){
                        
                    $consulta_3=\DB::table('demographic_aspects')
                    ->join('form', 'demographic_aspects.form_id', '=', 'form.id')
                    ->join('patient', 'patient.id', '=', 'form.patient_id')
                    ->select('demographic_aspects.civil_status','demographic_aspects.gender')
                    ->where('patient.subregion', '=', $region_div)
                    ->where('patient.id_medico','=',\Auth::user()->id)
                    ->get();
                    $grafico=3;
                    return view('grafico', compact('consulta_3','grafico'));
    
                }else if($aspecto=='p4'){
                        
                    $consulta_4=\DB::table('demographic_aspects')
                    ->join('form', 'demographic_aspects.form_id', '=', 'form.id')
                    ->join('patient', 'patient.id', '=', 'form.patient_id')
                    ->select('civil_status','age')
                    ->where('patient.subregion', '=', $region_div)
                    ->where('patient.id_medico','=',\Auth::user()->id)
                    ->get();
                    $grafico=4;
                    return view('grafico', compact('consulta_4','grafico'));
    
                }else if($aspecto=='p5'){
                        
                    $consulta_5=\DB::table('demographic_aspects')
                    ->join('form', 'demographic_aspects.form_id', '=', 'form.id')
                    ->join('patient', 'patient.id', '=', 'form.patient_id')
                    ->select('educational_level')
                    ->where('patient.subregion', '=', $region_div)
                    ->where('patient.id_medico','=',\Auth::user()->id)
                    ->get();
                    $grafico=5;
                    return view('grafico', compact('consulta_5','grafico'));
    
                }else if($aspecto=='p6'){
                        
                    $consulta_6=\DB::table('demographic_aspects')
                    ->select('affiliation_type')
                    ->join('form', 'demographic_aspects.form_id', '=', 'form.id')
                    ->join('patient', 'patient.id', '=', 'form.patient_id')
                    ->where('patient.subregion', '=', $region_div)
                    ->where('patient.id_medico','=',\Auth::user()->id)
                    ->get();
                    $grafico=6;
                    return view('grafico', compact('consulta_6','grafico'));
    
                }else if($aspecto=='p7'){
                        
                    $consulta_7=\DB::table('demographic_aspects')
                    ->join('form', 'demographic_aspects.form_id', '=', 'form.id')
                    ->join('patient', 'patient.id', '=', 'form.patient_id')
                    ->where('patient.subregion', '=', $region_div)
                    ->where('patient.id_medico','=',\Auth::user()->id)
                    ->select('stratum')
                    ->get();
                    $grafico=7;
                    return view('grafico', compact('consulta_7','grafico'));
    
                }else if($aspecto=='p8'){
                        
                    $consulta_8=\DB::table('demographic_aspects')
                    ->join('form', 'demographic_aspects.form_id', '=', 'form.id')
                    ->join('patient', 'patient.id', '=', 'form.patient_id')
                    ->select('monthly_income')
                    ->where('patient.subregion', '=', $region_div)
                    ->where('patient.id_medico','=',\Auth::user()->id)
                    ->get();
                    $grafico=8;
                    return view('grafico', compact('consulta_8','grafico'));
    
                }else if($aspecto=='p9'){
                        
                    $consulta_9=\DB::table('demographic_aspects')
                    ->join('form', 'demographic_aspects.form_id', '=', 'form.id')
                    ->join('patient', 'patient.id', '=', 'form.patient_id')
                    ->select('source_income')
                    ->where('patient.subregion', '=', $region_div)
                    ->where('patient.id_medico','=',\Auth::user()->id)
                    ->get();
                    $grafico=9;
                    return view('grafico', compact('consulta_9','grafico'));
    
                }
                // else if($aspecto=='p10'){
                        
                //     $consulta_10=\DB::table('algo1')
                //     ->join('algo2', 'algo1.id', '=', 'algo2.id')
                //     ->select('algo1.name','algo2.name')
                //     ->get();
                //     $grafico=10;
                //     return view('grafico', compact('consulta_10','grafico'));
    
                // }
                else if($aspecto=='p11'){
    
                    $consulta_11= \DB::table('built_environment')
                    ->join('questions', 'built_environment.question_id', '=', 'questions.id')
                    ->join('form', 'built_environment.form_id', '=', 'form.id')
                    ->join('patient', 'patient.id', '=', 'form.patient_id')
                    ->select('questions.name','questions.id','built_environment.answer')
                    ->where('patient.subregion', '=', $region_div)
                    ->where('patient.id_medico','=',\Auth::user()->id)
                    ->get();
                    $grafico=11;
                    return view('grafico', compact('consulta_11','grafico')); 
    
                }else if($aspecto=='p12'){
                        
                    $consulta_12=\DB::table('built_environment')
                    ->join('questions', 'built_environment.question_id', '=', 'questions.id')
                    ->join('form', 'built_environment.form_id', '=', 'form.id')
                    ->join('patient', 'patient.id', '=', 'form.patient_id')
                    ->select('questions.name','questions.id','built_environment.answer')
                    ->where('patient.subregion', '=', $region_div)
                    ->where('patient.id_medico','=',\Auth::user()->id)
                    ->get();
                    $grafico=12;
                    return view('grafico', compact('consulta_12','grafico'));
    
                }else if($aspecto=='p13'){
                        
                    $consulta_13= \DB::table('functional_scope_e_sppb')
                    ->select('mayor_distance')
                    ->get();
                    $grafico=13;
                    return view('grafico', compact('consulta_13','grafico'));
    
                }else if($aspecto=='p14'){
                        
                    $consulta_14=\DB::table('test_balance')
                    ->select('final_score')
                    ->get();
                    $grafico=14;
                    return view('grafico', compact('consulta_14','grafico'));
    
                }else if($aspecto=='p15'){
                        
                    $consulta_15=\DB::table('e_sppb')
                    ->join('form', 'e_sppb.form_id', '=', 'form.id')
                    ->join('patient', 'patient.id', '=', 'form.patient_id')
                    ->select('score')
                    ->where('patient.subregion', '=', $region_div)
                    ->where('patient.id_medico','=',\Auth::user()->id)
                    ->get();
                    $grafico=15;
                    return view('grafico', compact('consulta_15','grafico'));
    
                }else if($aspecto=='p16'){
                        
                    $consulta_16=\DB::table('demographic_aspects')
                    ->join('form', 'demographic_aspects.form_id', '=', 'form.id')
                    ->join('patient', 'patient.id', '=', 'form.patient_id')
                    ->select('cigarettes','gender')
                    ->where('patient.subregion', '=', $region_div)
                    ->where('patient.id_medico','=',\Auth::user()->id)
                    ->get();
                    $grafico=16;
                    return view('grafico', compact('consulta_16','grafico'));
    
                }else if($aspecto=='p17'){
                        
                    $consulta_17=\DB::table('demographic_aspects')
                    ->join('form', 'demographic_aspects.form_id', '=', 'form.id')
                    ->join('patient', 'patient.id', '=', 'form.patient_id')
                    ->select('alcohol_last_month','gender')
                    ->where('patient.subregion', '=', $region_div)
                    ->where('patient.id_medico','=',\Auth::user()->id)
                    ->get();
                    $grafico=17;
                    return view('grafico', compact('consulta_17','grafico'));
    
                }else if($aspecto=='p18'){
                        
                    $consulta_18=\DB::table('demographic_aspects')
                    ->join('form', 'demographic_aspects.form_id', '=', 'form.id')
                    ->join('patient', 'patient.id', '=', 'form.patient_id')
                    ->where('patient.subregion', '=', $region_div)
                    ->where('patient.id_medico','=',\Auth::user()->id)
                    ->select('speed')
                    ->get();
                    $grafico=18;
                    return view('grafico', compact('consulta_18','grafico'));
    
                }
            }
        }
        else{
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
            return view('initial', compact('aspD','g2','alF','buE','e_sppb'));
        }
   
    
    }
}