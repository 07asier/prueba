<?php

namespace App\Http\Controllers;

use http\Exception;
use Illuminate\Http\Request;
use App\Usuario;
use Illuminate\Validation\Validator;


class UsuarioController extends Controller
{

    public function __construct()
    {
        $this->middleware('usuarios');
    }

    public function create(array $data){

        return Usuario::create([
           'usuario' => $data['usuario'],
           'contraseña'=> bcrypt($data['password']),
        ]);
    }

    public function validator(array $data){
        return Validator::make($data,[
           'usuario'=>'required|string|max:225',
            'password'=>'required|string|min:2',
        ]);
    }

    public function add(Request $request){
        $this->validator($request->all())->validate();

        try{
            $this->create($request->all());
            return back();
        }catch (Exception $e){
            return back();
        }

    }
}
