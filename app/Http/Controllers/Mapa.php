<?php

namespace E_SPPB\Http\Controllers;

use Illuminate\Http\Request;

class Mapa extends Controller
{

    public function initial()
    {

        
        $mapa=true;
        $ind=false;
        $muni=true;

        // $muni= \DB::table('municipio')
        // ->join('patient', 'municipio.name_mpio', '=', 'patient.city')
        // ->select('municipio.lat','municipio.long','patient.subregion', 'municipio.name_mpio')
        // ->get();

        // $g2= \DB::table('minimental_test')
        // ->join('demographic_aspects', 'minimental_test.form_id', '=', 'demographic_aspects.form_id')
        // ->select('minimental_test.final_score','demographic_aspects.gender')
        // ->get();

        // $aspD= \DB::table('demographic_aspects')->select('age', 'gender')->get();

        
        if(\Auth::user()->rol === 'Investigador'){
            
            $patients=\DB::table('patient')
            ->join('medical_center', 'medical_center.id', '=', 'patient.id_medical_center')
            ->select('medical_center.id','medical_center.medical_center_name','medical_center.lat','medical_center.long')
            ->get();
      
            return view('home', compact('mapa','muni','ind','patients'));

        }else if(\Auth::user()->rol === 'Especialista'){
            $patients=\DB::table('patient')
            ->join('medical_center', 'medical_center.id', '=', 'patient.id_medical_center')
            ->select('medical_center.id','medical_center.medical_center_name','medical_center.lat','medical_center.long')
            ->where('patient.id_medico','=',\Auth::user()->id)
            ->get();
      
            return view('home', compact('mapa','muni','ind','patients'));

        }
    }
}
