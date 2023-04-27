<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;  //!  mettere true per autorizzare lo sore a caricare i dati nel db
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()  //! qui si inseriscono tutti i paraetri per la validazione
    {
        return [
            'title'=>'required|max:30|unique:projects,title', //per rendere titile unica
            'customer'=>'nullable|max:30',
            'description'=>'required|min:10',
            'url'=>'required|url|max:220'
        ];
    }
}
