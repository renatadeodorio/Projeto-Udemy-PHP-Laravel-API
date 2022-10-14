<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato() {

        var_dump($_POST);
        return view('site.contato', ['titulo' => 'Contato']);
    }

    public function salvar(Request $request) {

        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required'
        ]);
}
}
