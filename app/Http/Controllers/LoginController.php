<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function index(Request $request){

        $erro = '';
        
        if($request->get('erro')==1){
            $erro = 'Usuário e/ou senha inválidos';
        }

        if($request->get('erro')==2){
            $erro = 'Necessário realizar login para ter acesso a página';
        }

        return view('site.login', ['titulo'=>'Login', 'erro'=>$erro]);
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

        //recuperamos os dados do formulaŕio
        $email = $request->get('usuario');
        $password = $request->get('senha');


        //Iniciar o model user
        $user = new User();

        $usuario = $user->where('email', $email)
                        ->where('password', $password)
                        ->get()
                        ->first();

        if(isset($usuario->name)){
            session_start();
            $_SESSION['nome'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;

            return redirect()->route('app.clientes');
        }else{
            return redirect()->route('site.login', ['erro'=>1]);
        }

        
    }
}
