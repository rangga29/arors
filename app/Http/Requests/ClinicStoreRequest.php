<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClinicStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'cl_ucode' => ['nullable'],
            'cl_code' => ['required', 'unique:clinics,cl_code'],
            'cl_name' => ['required', 'unique:clinics,cl_name'],
            'cl_order' => ['required', 'unique:clinics,cl_order'],
            'cl_active' => ['nullable'],
            'created_by' => ['nullable'],
            'updated_by' => ['nullable']
        ];
    }

    public function messages(): array
    {
        return [
            'cl_code.required' => 'Kode Klinik Harus Diisi',
            'cl_code.unique' => 'Kode Klinik Sudah Digunakan',
            'cl_name.required' => 'Nama Klinik Harus Diisi',
            'cl_name.unique' => 'Nama Klinik Sudah Digunakan',
            'cl_order.required' => 'Nomor Urutan Harus Diisi',
            'cl_order.unique' => 'Nomor Urutan Sudah Digunakan',
        ];
    }
}