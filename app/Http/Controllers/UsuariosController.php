<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UsuariosController extends Controller
{
    public function create()
    {
        return view('SiteSerMae/Inicial');
    }


    public function store(Request $request) {

        $messages = [
            'dataNasc.date' => 'Você precisa ser maior de idade para acessar o site!'
        ];

        $validator = Validator::make($request->all(), [
            'dataNasc' => 'required|date|before_or_equal:' . now()->subYears(18)->format('Y-m-d')
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }



        Usuario::create([
            'nomeUsuario'=>$request->nome . ' ' . $request->sobrenome,
            'numeroUsuario'=>$request->phone,
            'emailUsuario'=>$request->email,
            'nascimentoUsuario'=>$request->dataNasc,
            'senhaUsuario'=>Hash::make($request->password),
        
        ]);
    
        return view('SiteSerMae.Inicial');
    }
}
