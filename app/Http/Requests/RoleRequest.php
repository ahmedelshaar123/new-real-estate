<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
                    'name' => 'required|unique:roles,name',
                    'permissions' => 'required|array',
                ];

            case 'PUT':
            case 'PATCH':
                $id = $this->route('role');
                return [
                    'name' => 'required|unique:roles,name,' . $id,
                    'permissions' => 'required|array',
                ];

        }

    }
}
