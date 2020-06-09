<?php

namespace E_SPPB\Http\Controllers;

use Illuminate\Http\Request;

class Usuario extends Controller
{

    public function agregar(){

        // $agregar=true;
        return view('agregar');
    }
    public function editar(Request $request){

        $this->validate($request,
        [
            'name'=> 'required',
            'apellido'=> 'required',
            'email'=> 'required',
            'date'=> 'required',
            'profesion'=> 'required',
            'institucion'=> 'required',   
            'rol'=> 'required'
        ]
        );

        \DB::table('users')
          ->where('email',$request->input('email'))
          ->update(

          [
            'name' => $request->input('name'),
            'last_name' => $request->input('apellido'),
            
            'date' => $request->input('date'),
            'profesion' => $request->input('profesion'),
            'institucion' => $request->input('institucion'),
            'rol' => ucwords($request->input('rol')),
            
        ]
    );

        
        $listar=\DB::table('users')
        ->where('rol', '<>', 'Administrador')
        ->get();

        return view('listar', compact('listar'));
    }
    public function eliminar($id){

        \DB::table('users' )
        ->where('id', '=', $id)
        ->delete();

   
        $listar=\DB::table('users')
        ->where('rol', '<>', 'Administrador')
        ->get();

        return view('listar', compact('listar'));
    }
    public function listar(){

        $listar=\DB::table('users')
        ->where('rol', '<>', 'Administrador')
        ->get();
        return view('listar', compact('listar'));
    }
    public function solicitud(){

        $solicitud=true;

        
        $soli= \DB::table('solicitud')->select(
            'id', 
            'nombre', 
            'apellidos',
            'email',
            'fecha',
            'profesion',
            'institucion',
            'motivo'
        )->get();
            // ->where('id', '=', $id)->first();
            // $edit=true;
        return view('solicitud', compact('solicitud','soli'));
    }

    public function add(Request $request){

        $agregar=true;
        $add=true;


        $this->validate($request,
        [
            'name'=> 'required',
            'apellido'=> 'required',
            'email'=> 'required',
            'date'=> 'required',
            'profesion'=> 'required',
            'institucion'=> 'required',   
            'rol'=> 'required'
        ]
        );

        $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890@";
        $pass = "";
        //Reconstruimos la contraseña segun la longitud que se quiera
        for($i=0;$i<8;$i++) {
            //obtenemos un caracter aleatorio escogido de la cadena de caracteres
            $pass .= substr($str,rand(0,63),1);
        }

        try {
            \DB::table('users')->insert(
                [
                    'name' => $request->input('name'),
                    'last_name' => $request->input('apellido'),
                    'email' => $request->input('email'),
                    'date' => $request->input('date'),
                    'profesion' => $request->input('profesion'),
                    'institucion' => $request->input('institucion'),
                    'rol' => ucwords($request->input('rol')),
                    'password' => bcrypt($pass)
                ]
            );

            $data = array(
                'user'=> $request->input('email'),
                'pass'=> $pass,
                'name'=> $request->input('name'),
                'rol'=> ucwords($request->input('rol'))
            );

            \Mail::send('emails.register',$data,function($message)use($data){
                $message->from('dieqo.ramos@gmail.com','E-SPP+');
                $message->to($data['user'])->subject('Registro');
            });

            return view('agregar', compact('agregar','add'));

        } catch (\Throwable $th) {
            $errorEmail =true;
            return view('agregar', compact('agregar','add','errorEmail'));
        }   
    }

    public function ver($id){

        $ver= \DB::table('solicitud')->select(
            'id', 
            'nombre', 
            'apellidos',
            'email',
            'fecha',
            'profesion',
            'institucion',
            'motivo'
        )->where('id', '=', $id)->first();
            // $edit=true;
        return view('ver', compact('ver'));
    }

    public function aceptar($id){
        
        $acep= \DB::table('solicitud')->select(
            'id', 
            'nombre', 
            'apellidos',
            'email',
            'fecha',
            'profesion',
            'institucion',
            'motivo'
        )->where('id', '=', $id)->first();

        $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890@";
        $pass = "";
        //Reconstruimos la contraseña segun la longitud que se quiera
        for($i=0;$i<10;$i++) {
            //obtenemos un caracter aleatorio escogido de la cadena de caracteres
            $pass .= substr($str,rand(0,63),1);
        }

        $regis=\DB::table('users')->insert(
            [
                'name' => $acep->nombre,
                'last_name' => $acep->apellidos,
                'email' => $acep->email,
                'date' => $acep->fecha,
                'profesion' => $acep->profesion,
                'institucion' => $acep->institucion,
                'rol' => ucwords('Especialista'),
                'password' => bcrypt($pass)
            ]
        );


        $data = array(
            'user'=> $acep->email,
            'pass'=> $pass,
            'name'=> $acep->nombre,
            'rol'=> ucwords('Especialista')
        );

        \Mail::send('emails.register',$data,function($message)use($data){
            $message->from('dieqo.ramos@gmail.com','E-SPP+');
            $message->to($data['user'])->subject('Registro');
        });

        $elim= \DB::table('solicitud'
            
            )->where('id', '=', $id
            )->delete();


        $solicitud=true;

    
        $soli= \DB::table('solicitud')->select(
            'id', 
            'nombre', 
            'apellidos',
            'email',
            'fecha',
            'profesion',
            'institucion',
            'motivo'
        )->get();
            // ->where('id', '=', $id)->first();
            // $edit=true;
        return view('solicitud', compact('solicitud','soli'));
    }

    public function rechazar($id){

        \DB::table('solicitud' )
        ->where('id', '=', $id)
        ->delete();

        $solicitud=true;

    
        $soli= \DB::table('solicitud')->select(
            'id', 
            'nombre', 
            'apellidos',
            'email',
            'fecha',
            'profesion',
            'institucion',
            'motivo'
        )->get();

        return view('solicitud', compact('solicitud','soli'));
    }

    public function veredit($id){

        $vere= \DB::table('users')
        ->where('id', '=', $id)->first();
            // $edit=true;
            // echo("Hello ");
            // return;
        return view('veredit', compact('vere'));
    }
}
