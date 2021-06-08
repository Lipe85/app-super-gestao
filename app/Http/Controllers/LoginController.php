<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('site.login', ['titulo'=>'Login']);
    }

    public function autenticar(Request $request){
        
        //Regras de validação
        $regras = [
            'usuario'=> 'email',
            'senha'=>'required'
        ];

        //Mensagens de feedback de validação
        $feedback = [
            'usuario.email'=>'O campo usuário (e-mail) é obrigatório',
            'senha.required'=>'Informe a senha'
        ];

        $request->validate($regras, $feedback);

    }
}
