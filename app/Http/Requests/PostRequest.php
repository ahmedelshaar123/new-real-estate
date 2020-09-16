<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
                    'desc_ar' => 'required',
                    'desc_en' => 'required',
                    'image' => 'required|image|mimes:png,jpg,jpeg,gif|max:3072',
                    'service_id' => 'required|array',
                    'service_id.*' => 'exists:services,id',
                ];
            case 'PUT':
            case 'PATCH':
                return [
                    'title_ar' => 'required',
                    'title_en' => 'required',
                    'desc_ar' => 'required',
                    'desc_en' => 'required',
                    'image' => 'image|mimes:png,jpg,jpeg,gif|max:3072',
                    'service_id' => 'required|array',
                    'service_id.*' => 'exists:services,id',
                ];
        }

    }
}
