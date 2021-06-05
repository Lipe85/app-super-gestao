<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;
use App\MotivoContato;

class ContatoController extends Controller
{
    public function contato(Request $request){
        
        $motivo_contatos = MotivoContato::all();
        return view('site.contato', ['titulo'=> 'Contato - teste', 'motivo_contatos'=>$motivo_contatos]);

    }

    public function salvar(Request $request){

        //Validação de campos do formúlario
        $request->validate(
            [
                'nome'=>'required|min:3|max:40',
                'telefone'=>'required',
                'email'=>'email',
                'motivo_contatos_id'=>'required',
                'mensagem'=>'required|max:2000'
            ],
            [
                'nome.required'=>'O campo nome precisa ser preenchido',
                'nome.min'=>'O campo nome precisa ter no miniomo 3 caracteres',
                'nome.max'=>'O campo nome pode ter no máximo 40 caracteres',
                'telefone.required'=>'O campo telefone precisa ser preenchido',
                'email.email'=>'Digite um e-mail válido',
                'motivo_contatos_id'=>'Selecione o motivo do seu contato',
                'mensagem.required'=>'Escreva uma mensagem',
                'mensagem.max'=>'O campo mensagem pode ter no máximo 2000 caracteres'
            ]
        );

        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }



}
