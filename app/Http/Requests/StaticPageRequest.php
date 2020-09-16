<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaticPageRequest extends FormRequest
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
            'message_image' => 'image|mimes:png,jpg,jpeg,gif|max:3072',
            'vision_image' => 'image|mimes:png,jpg,jpeg,gif|max:3072',
            'desc_image' => 'image|mimes:png,jpg,jpeg,gif|max:3072',
        ];
    }
}
