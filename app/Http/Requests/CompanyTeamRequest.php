<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyTeamRequest extends FormRequest
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
                    'name_ar' => 'required',
                    'name_en' => 'required',
                    'job_ar' => 'required',
                    'job_en' => 'required',
                    'fb_url' => 'nullable|url',
                    'tw_url' => 'nullable|url',
                    'insta_url' => 'nullable|url',
                    'image' => 'required|image|mimes:png,jpg,jpeg,gif|max:3072',
                ];

            case 'PUT':
            case 'PATCH':
                return [
                    'name_ar' => 'required',
                    'name_en' => 'required',
                    'job_ar' => 'required',
                    'job_en' => 'required',
                    'fb_url' => 'nullable|url',
                    'tw_url' => 'nullable|url',
                    'insta_url' => 'nullable|url',
                    'image' => 'image|mimes:png,jpg,jpeg,gif|max:3072',
                ];

        }
    }
}
