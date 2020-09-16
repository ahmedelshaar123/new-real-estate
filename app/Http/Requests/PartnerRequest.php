<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartnerRequest extends FormRequest
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
                    'link' => 'required|url|unique:partners',
                    'image' => 'required|image|mimes:png,jpg,jpeg,gif|max:3072',
                ];

            case 'PUT':
            case 'PATCH':
                $id = $this->route('partner');
                return [
                    'link' => 'required|url|unique:partners,link,' . $id,
                    'image' => 'image|mimes:png,jpg,jpeg,gif|max:3072',
                ];

        }
    }
}
