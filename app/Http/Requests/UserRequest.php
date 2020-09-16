<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        switch ($this->method()){
            case 'POST':
                return [
                    'name' => 'required',
                    'email' => 'required|email|unique:users,email',
                    'password' => 'required|same:confirm-password',
                    'roles' => 'required|array'
                ];

            case 'PUT':
            case 'PATCH':
                $id = $this->route('user');
                return [
                    'name' => 'required',
                    'email' => 'required|email|unique:users,email,'.$id,
                    'password' => 'same:confirm-password',
                    'roles' => 'required|array'
                ];

        }
    }
}
