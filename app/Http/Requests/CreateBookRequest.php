<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBookRequest extends FormRequest
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
            'title' => ['required', 'max:32'],
            'author' => ['required', 'max:32']
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'Tytuł',//przetlumacz ple name na nazwa we front end
            'author' => 'Autor',//przetlumacz ple name na nazwa we front end
        ];
    }


}
