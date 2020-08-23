<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateJobPostRequest extends FormRequest
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
            'file'=>'required',
            'phone'=>'required|min:10|numeric',
            'city'=>'required',
            'state'=>'required',
            'address'=> 'required',
            'category_id'=>'required',
            'description'=>'required'
        ];
    }
}
