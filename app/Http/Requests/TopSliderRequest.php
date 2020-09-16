<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TopSliderRequest extends FormRequest
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
        switch ($this->method()) {
            case 'POST':
                return [
                    'link' => 'nullable|url',
                    'image' => 'required|image|mimes:png,jpg,jpeg,gif|max:3072',
                ];
            case 'PUT':
            case 'PATCH':
                return [
                    'link' => 'nullable|url',
                    'image' => 'image|mimes:png,jpg,jpeg,gif|max:3072',
                ];
        }

    }
}
