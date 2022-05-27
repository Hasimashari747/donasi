<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProgramRequest extends FormRequest
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
            'banner' => 'required',
            'nama_panti' => 'required',
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'kontak' => 'required',
            'nomor_rekening' => 'required',
            'target_donation' => 'required',
        ];
    }
}
