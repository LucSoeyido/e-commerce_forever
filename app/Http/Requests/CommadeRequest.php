<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommadeRequest extends FormRequest
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
            'designation' => 'required|string',
            'iduser' => 'required|integer',
            'reference' => 'required|string',
            'prix' => 'required|integer',
            'qte' => 'required|integer',
            'logo' => 'required|string',
        ];
    }
}
