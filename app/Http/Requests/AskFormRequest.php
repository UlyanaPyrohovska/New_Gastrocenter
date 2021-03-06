<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AskFormRequest extends FormRequest
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
            'name' => 'required|min:2|max:50',
            'city' => 'required|min:2|max:50',
            'email' => 'required|email',
            'age' => 'required|numeric|min:14|max:120',
            'message' => 'required|min:15|max:500'
        ];
    }
    public function messages()
    {
        return[
            'name.required' => 'Поле і`мя обов`язкове',
            'city.required' => 'Поле місто обов`язкове',
            'email.required' => 'Поле ел-пошта обов`язкове',
            'age.required' => 'Поле вік обов`язкове',
            'message.required' => 'Поле повідомлення обов`язкове'
        ]; // TODO: Change the autogenerated stub
    }
}
