<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'name' => 'required|min:5|max:10',
            'phone' => 'required|min:5|max:10',
            'address' => 'required|min:5|max:10'

        ];
    }

    public function attributes()
    {
        return [
            'name' => 'имя',
            'phone' => 'телефон',
            'address' => 'адрес'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле имя является обязательным',
            'phone.required' => 'Поле телефон является обязательным',
            'address.required' => 'Поле адрес является обязательным'
        ];
    }
}
