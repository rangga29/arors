<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BusinessPartnerStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'bp_ucode' => ['nullable'],
            'bp_order' => ['required', 'unique:business_partners,bp_order'],
            'bp_code' => ['required', 'unique:business_partners,bp_code'],
            'bp_name' => ['required', 'unique:business_partners,bp_name'],
            'bp_type' => ['required'],
            'bp_scheme' => ['required'],
            'bp_contract' => ['nullable'],
            'bp_active' => ['nullable'],
            'created_by' => ['nullable'],
            'updated_by' => ['nullable']
        ];
    }

    public function messages(): array
    {
        return [
            'bp_code.required' => 'Kode Asuransi Harus Diisi',
            'bp_code.unique' => 'Kode Asuransi Sudah Digunakan',
            'bp_name.required' => 'Nama Asuransi Harus Diisi',
            'bp_name.unique' => 'Nama Asuransi Sudah Digunakan',
            'bp_order.required' => 'Nomor Urutan Harus Diisi',
            'bp_order.unique' => 'Nomor Urutan Sudah Digunakan'
        ];
    }
}
