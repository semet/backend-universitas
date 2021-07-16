<?php

namespace App\Http\Requests;

use App\Models\Admin;
use Illuminate\Foundation\Http\FormRequest;

class DekanRequest extends FormRequest
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
            'fakultasId' => 'required',
            'employeeNumber' => 'required',
            'username' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'min:8',
        ];
    }
}
