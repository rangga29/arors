<?php

namespace App\Http\Controllers;

use App\Http\Requests\BusinessPartnerStoreRequest;
use App\Http\Requests\BusinessPartnerUpdateRequest;
use App\Models\BusinessPartner;
use App\Models\Log;
use Carbon\Carbon;
use Illuminate\Support\Str;

class BusinessPartnerController extends Controller
{
    public function index()
    {
        $this->authorize('view', BusinessPartner::class);

        return view('backend.business-partners.view', [
            'partners' => BusinessPartner::orderBy('bp_order')->get()
        ]);
    }

    public function store(BusinessPartnerStoreRequest $request)
    {
        $this->authorize('create', BusinessPartner::class);

        $validateData = $request->validated();
        do {
            $validateData['bp_ucode'] = Str::random(20);
            $ucodeCheck = BusinessPartner::where('bp_ucode', $validateData['bp_ucode'])->exists();
        } while ($ucodeCheck);
        BusinessPartner::create($validateData);

        Log::create([
            'lo_time' => Carbon::now()->format('Y-m-d H:i:s'),
            'lo_user' => auth()->user()->username,
            'lo_ip' => \Request::ip(),
            'lo_module' => 'BUSINESS PARTNER',
            'lo_message' => 'CREATE : ' . $validateData['bp_code'] . ' - ' . $validateData['bp_name']
        ]);

        return redirect()->route('businessPartners')->with('success', 'Data Asuransi Berhasil Ditambahkan');
    }

    public function show(BusinessPartner $businessPartner)
    {
        $this->authorize('edit', BusinessPartner::class);

        $data = BusinessPartner::where('bp_ucode', $businessPartner->bp_ucode)->first();

        return response()->json($data);
    }

    public function update(BusinessPartnerUpdateRequest $request, BusinessPartner $businessPartner)
    {
        $this->authorize('edit', BusinessPartner::class);

        $validateData = $request->validated();
        $duplicateCheck = BusinessPartner::where('bp_order', $validateData['bp_order'])->first();
        if($duplicateCheck) {
            if($duplicateCheck['bp_ucode'] != $businessPartner['bp_ucode']) {
                $duplicateCheck->update([
                    'bp_order' => $businessPartner['bp_order']
                ]);
            }
        }
        $businessPartner->update($validateData);

        Log::create([
            'lo_time' => Carbon::now()->format('Y-m-d H:i:s'),
            'lo_user' => auth()->user()->username,
            'lo_ip' => \Request::ip(),
            'lo_module' => 'BUSINESS PARTNER',
            'lo_message' => 'UPDATE : ' . $validateData['bp_code'] . ' - ' . $validateData['bp_name']
        ]);

        return redirect()->route('businessPartners')->with('success', 'Data Asuransi Berhasil Diubah');
    }

    public function destroy(BusinessPartner $businessPartner)
    {
        $this->authorize('delete', BusinessPartner::class);

        Log::create([
            'lo_time' => Carbon::now()->format('Y-m-d H:i:s'),
            'lo_user' => auth()->user()->username,
            'lo_ip' => \Request::ip(),
            'lo_module' => 'BUSINESS PARTNER',
            'lo_message' => 'DELETE : ' . $businessPartner->bp_code . ' - ' . $businessPartner->bp_name
        ]);

        $businessPartner->delete();

        return redirect()->route('businessPartners')->with('success', 'Data Asuransi Berhasil Dihapus');
    }

    public function getLastOrder()
    {
        $this->authorize('create', BusinessPartner::class);

        $data = BusinessPartner::orderBy('bp_order', 'DESC')->first();

        return response()->json($data);
    }
}
