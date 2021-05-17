<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ObraRequest extends FormRequest
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
    public function rules()
    {
        return [
            'titulo'=>'required',
            'nome_artista'=>'required',
            'altura'=>'required|numeric',
            'largura'=>'required|numeric',
            'profundidade'=>'required|numeric',
            'preco'=>'required'
        ];
    }
}
