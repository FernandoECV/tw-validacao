<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CursoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    // indica as regras de utilização que o programador deseja utilizar
    public function rules()
    {
        return [
            "curso" => ['required', 'max:100'],
            "carga" => ['required', 'integer']
        ];

        // Regras personalizads de validação
        // return [
        //     "curso" => ['required', 'max:100', function($atributo, $valor, $falhou){
        //         if ($valor === 'PHP') {
        //             $falhou('O campo '. $atributo . ' não pode ter o valor PHP');
        //         }
        //     }],
        //     "carga" => ['required', 'integer']
        // ];
    }
}
