<?php

namespace App\Http\Controllers;

use App\Http\Requests\CursoRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function store(CursoRequest $request)
    {

        // $request->validate([
        //     "curso" => ['required', 'max:100'],
        //     "carga" => ['required', 'integer']
        // ]);

        // dd($request->all()); // Obter todas as informações que foram enviadas para a request
        // $request->except(); // Pegas as informações da request, exceto a qual você definir

        // Validator::make(
        //     $request->except('_token'),
        //     [
        //         "curso" => ['required', 'max:100'],
        //         "carga" => ['required', 'integer']
        //     ]
        // )->validate();

        dd($request->all());
    }

    // Aplicando validações no formato JSON utilizando API
    public function storeAPI(Request $request)
    {
        $dados = $request->all();
        $validacao = validator::make(
            $dados,
            [
                "curso" => ['required', 'max:100'],
                "carga" => ['required', 'integer']
            ]
        );

        if($validacao->fails()){
            $erros = $validacao->errors();

            return $erros->all();
        }

        dd('passou na validação');
    }
}
