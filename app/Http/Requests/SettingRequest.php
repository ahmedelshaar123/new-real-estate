<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class SettingRequest extends FormRequest
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

    public function rules()
    {
        return [
          'facebook_url' => 'nullable|url',
          'twitter_url' => 'nullable|url',
          'instagram_url' => 'nullable|url',
          'email' => 'nullable|email',
          'phone' => 'nullable|digits_between:10,12',
          'lat' => 'nullable|numeric',
          'lng' => 'nullable|numeric',
        ];

    }
}
