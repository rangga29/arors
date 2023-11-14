<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClinicStoreRequest;
use App\Http\Requests\ClinicUpdateRequest;
use App\Models\Clinic;
use Illuminate\Support\Str;
use function redirect;

class ClinicController extends Controller
{
    public function index()
    {
        return view('backend.clinics.view', [
            'clinics' => Clinic::orderBy('cl_order')->get()
        ]);
    }

    public function store(ClinicStoreRequest $request)
    {
        $validateData = $request->validated();
        do {
            $validateData['cl_ucode'] = Str::random(20);
            $ucodeCheck = Clinic::where('cl_ucode', $validateData['cl_ucode'])->exists();
        } while ($ucodeCheck);
        Clinic::create($validateData);
        return redirect()->route('clinics')->with('success', 'Data Klinik Berhasil Ditambahkan');
    }

    public function show(Clinic $clinic)
    {
        $data = Clinic::where('cl_ucode', $clinic->cl_ucode)->first();
        return response()->json($data);
    }

    public function update(ClinicUpdateRequest $request, Clinic $clinic)
    {
        $validateData = $request->validated();
        $duplicateCheck = Clinic::where('cl_order', $validateData['cl_order'])->first();
        if($duplicateCheck) {
            if($duplicateCheck['cl_ucode'] != $clinic['cl_ucode']) {
                $duplicateCheck->update([
                    'cl_order' => $clinic['cl_order']
                ]);
            }
        }
        $clinic->update($request->validated());
        return redirect()->route('clinics')->with('success', 'Data Klinik Berhasil Diubah');
    }

    public function destroy(Clinic $clinic)
    {
        $clinic->delete();
        return redirect()->route('clinics')->with('success', 'Data Klinik Berhasil Dihapus');
    }
}
