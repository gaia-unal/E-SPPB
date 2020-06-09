<?php

namespace E_SPPB\Http\Controllers;

use Illuminate\Http\Request;

class Center extends Controller
{

    public function listar(){

        $listarCen=\DB::table('medical_center')
        ->get();
        return view('listarCen', compact('listarCen'));
    }

    public function actualizar (Request $request, $id){
    

      
        \DB::table('medical_center')
          ->where('id',$id)
          ->update(
    
          [
            'lat' => $request->input('Latitud'),
            'long' => $request->input('Longitud'),
          ]
         );
    
        
         $listarCen=\DB::table('medical_center')
         ->get();
         return view('listarCen', compact('listarCen'));
    }
}