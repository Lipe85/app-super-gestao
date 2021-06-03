<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request){
        
        $motivo_contatos = [
            '1'=>'Dúvida',
            '2'=>'Elogio',
            '3'=>'Reclamação'
        ];
        return view('site.contato', ['titulo'=> 'Contato - teste', 'motivo_contatos'=>$motivo_contatos]);

    }

    public function salvar(Request $request){

        //Validação de campos do formúlario
        $request->validate([
            'nome'=>'required',
            'telefone'=>'required',
            'email'=>'required',
            'motivo_contato'=>'required',
            'mensagem'=>'required|max:2000'
        ]);

        //SiteContato::create($request->all());

    }



}
