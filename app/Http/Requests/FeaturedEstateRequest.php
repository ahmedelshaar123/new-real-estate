<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeaturedEstateRequest extends FormRequest
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
                    'title_ar' => 'required',
                    'title_en' => 'required',
                    'address_ar' => 'required',
                    'address_en' => 'required',
                    'image' => 'required|array',
                    'image.*' => 'image|mimes:jpg,jpeg,png,gif|max:3072'
                ];
            case 'PUT':
            case 'PATCH':
                return [
                    'title_ar' => 'required',
                    'title_en' => 'required',
                    'address_ar' => 'required',
                    'address_en' => 'required',
                    'image' => 'array',
                    'image.*' => 'image|mimes:jpg,jpeg,png,gif|max:3072'
                ];
        }
    }
}
