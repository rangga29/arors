<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BusinessPartnerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 1,
            'bp_code' => 'AA00001',
            'bp_name' => 'AA INTERNATIONAL INDONESIA, PT (ACROSS ASIA ASSIST)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '066/HP-PKS-RSCK/II/2021',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 2,
            'bp_code' => 'AB00001',
            'bp_name' => 'ABADI SMILYNKS, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '010/HP-PKS-RSCK/II/2019',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 3,
            'bp_code' => 'AB00002',
            'bp_name' => 'ABDA ASURANSI BINA DANA ARTA , PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'PKS/139/ABDA-RSCK/V/2008',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 4,
            'bp_code' => 'AB00004',
            'bp_name' => 'ABHITECH GROUP - PT ORYX SERVICES (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks admedika abhitech',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 5,
            'bp_code' => 'AD00003',
            'bp_name' => 'ADISARANA WANAARTHA, ASURANSI JIWA',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '023/HP-PKS-RSCK/IX/2017',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 6,
            'bp_code' => 'AD00001',
            'bp_name' => 'ADISARANA WANAARTHA, ASURANSI JIWA (ADMEDIKA)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '023/HP-PKS-RSCK/IX/2017',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 7,
            'bp_code' => 'AD00002',
            'bp_name' => 'ADMEDIKA (ADMINISTRASI MEDIKA), PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 8,
            'bp_code' => 'AI00002',
            'bp_name' => 'AIA FINANCIAL (ADMEDIKA)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 9,
            'bp_code' => 'AI00003',
            'bp_name' => 'AIA FINANCIAL INDIVIDU-ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 10,
            'bp_code' => 'AI00004',
            'bp_name' => 'AIA FINANCIAL, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '035/PKS-RSCK/X/2016',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 11,
            'bp_code' => 'AJ00001',
            'bp_name' => 'AJS AMANAH GIRI ARTHA (AMANAH GITHA) - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 12,
            'bp_code' => 'AL00007',
            'bp_name' => 'ALAMI GROUP, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks alami group admedika',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 13,
            'bp_code' => 'AL00005',
            'bp_name' => 'ALFA OMEGA INDUSTRI, PT (GROUP ATEJA TRITUNGGAL)',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks ateja',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 14,
            'bp_code' => 'AL00008',
            'bp_name' => 'ALFA POLIMER INDONESIA, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks alkindo alfa',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 15,
            'bp_code' => 'AL00010',
            'bp_name' => 'ALIFA DAYCARE MOSLEM',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks alifa daycare',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 16,
            'bp_code' => 'AL00009',
            'bp_name' => 'ALKINDO NARATAMA, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks alkindo alkindo',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 17,
            'bp_code' => 'AL00001',
            'bp_name' => 'ALMASINDO, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '015/HP-PKS-RSCK/III/2019',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 18,
            'bp_code' => 'AM00001',
            'bp_name' => 'AMMAN MINERAL, PT - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 19,
            'bp_code' => 'AP00001',
            'bp_name' => 'APLIKANUSA LINTASARTA, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '024/HP-PKS-RSCK/VIII/2018',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 20,
            'bp_code' => 'AR00001',
            'bp_name' => 'ARYA BAHARI AKBAR, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'AR00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 21,
            'bp_code' => 'AS00020',
            'bp_name' => 'ASABRI, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'Pks Admedika Asabri',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 22,
            'bp_code' => 'AS00001',
            'bp_name' => 'ASCOT (ASIAN COTTON INDUSTRY), PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'AS00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 23,
            'bp_code' => 'AS00002',
            'bp_name' => 'ASKRIDA-ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 24,
            'bp_code' => 'AS00005',
            'bp_name' => 'ASTRA DAIHATSU MOTOR, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'Belum ada',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 25,
            'bp_code' => 'AS00006',
            'bp_name' => 'ASTRA INTERNASIONAL TBK-UD TRUCKS , PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => '015/PKS-RSCK/2013',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 26,
            'bp_code' => 'AS00007',
            'bp_name' => 'ASTRA INTERNATIONAL TBK - ASTRAWORLD, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => '027/HP-PKS-RSCK/IX/2018',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 27,
            'bp_code' => 'AS00008',
            'bp_name' => 'ASTRA INTERNATIONAL TBK TOYOTA AUTO 2000',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'AS00008-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 28,
            'bp_code' => 'AS00009',
            'bp_name' => 'ASTRA INTERNATIONAL TBK-DAIHATSU SALES OPERATION',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '014/PKS-RSCK/IV/2013',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 29,
            'bp_code' => 'AS00010',
            'bp_name' => 'ASTRA INTERNATIONAL TBK-ISUZU , PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '020/PKS-RSCK/IX/2011',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 30,
            'bp_code' => 'AS00016',
            'bp_name' => 'ASURANSI ARTARINDO (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 31,
            'bp_code' => 'AS00025',
            'bp_name' => 'ASURANSI BOSOWA, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'PKS Admedika Bosowa',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 32,
            'bp_code' => 'AS00017',
            'bp_name' => 'ASURANSI CAKRAWALA PROTEKSI INDONESIA, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'cakrawala admedika payor',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 33,
            'bp_code' => 'AS00026',
            'bp_name' => 'ASURANSI CENTRAL ASIA (ACA) BANK PERMATA, ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks aca admedika bank permata',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 34,
            'bp_code' => 'AS00011',
            'bp_name' => 'ASURANSI CENTRAL ASIA, PT (ACA)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '018/HP-PKS-RSCK/VI/2018',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 35,
            'bp_code' => 'AS00015',
            'bp_name' => 'ASURANSI CENTRAL ASIA, PT (ACA) (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '018/HP-PKS-RSCK/VI/2018',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 36,
            'bp_code' => 'AS00021',
            'bp_name' => 'ASURANSI CENTRAL ASIA, PT (ACA) (ADMEDIKA)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks aca admedika',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 37,
            'bp_code' => 'AS00004',
            'bp_name' => 'ASURANSI JIWA ASTRA , PT - ADMEDIKA',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 38,
            'bp_code' => 'AS00024',
            'bp_name' => 'ASURANSI JIWA BCA INDIVIDU, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'pks admedika - bca individu',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 39,
            'bp_code' => 'AS00023',
            'bp_name' => 'ASURANSI JIWA TASPEN LIFE, (ADMEDIKA PAYOR) PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks admedika taspen',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 40,
            'bp_code' => 'AS00012',
            'bp_name' => 'ASURANSI JIWASRAYA',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'AS00012-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 41,
            'bp_code' => 'AS00022',
            'bp_name' => 'ASURANSI PLN (PERISAI LISTRIK NASIONAL) (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks admedika asuransi pln',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 42,
            'bp_code' => 'AS00013',
            'bp_name' => 'ASURANSI UMUM MEGA - FULLERTON HEALTH INDONESIA',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '050/PKS-RSCK/IX/2013',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 43,
            'bp_code' => 'AS00018',
            'bp_name' => 'ASURANSI UMUM MEGA (ADMEDIKA), PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'asuransi umum mega admedika',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 44,
            'bp_code' => 'AS00027',
            'bp_name' => 'ASURANSI UMUM MEGA, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks admedika asuransi umum mega payor',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 45,
            'bp_code' => 'AS00014',
            'bp_name' => 'ASYIKI ASURANSI SYARIAH KELUARGA INDONESIA, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => '020/ HP-ADD-RSCK/VIII/2017',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 46,
            'bp_code' => 'AT00003',
            'bp_name' => 'ATEJA GRACE TEXINDO, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '07/HP-ADD-RSCK/III/2018',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 47,
            'bp_code' => 'AT00001',
            'bp_name' => 'ATEJA MULTI INDUSTRY',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '07/HP-ADD-RSCK/III/2018',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 48,
            'bp_code' => 'AT00007',
            'bp_name' => 'ATEJA MULTI INDUSTRY, PT COB BPJS',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '07/HP-ADD-RSCK/III/2018',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 49,
            'bp_code' => 'AT00005',
            'bp_name' => 'ATEJA SPINNING, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks ateja spinning',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 50,
            'bp_code' => 'AT00004',
            'bp_name' => 'ATEJA TRITUNGGAL DYING, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '07/HP-ADD-RSCK/III/2018',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 51,
            'bp_code' => 'AT00002',
            'bp_name' => 'ATEJA TRITUNGGAL, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '07/HP-ADD-RSCK/III/2018',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 52,
            'bp_code' => 'AT00006',
            'bp_name' => 'ATEJA TRITUNGGAL, PT COB BPJS',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '07/HP-ADD-RSCK/III/2018',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 53,
            'bp_code' => 'AV00002',
            'bp_name' => 'AVRIST ASSURANCE, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks avrist',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 54,
            'bp_code' => 'AV00001',
            'bp_name' => 'AVRIST ASSURANCE, PT (D/H.AIA INDONESIA) (ADMEDIKA)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '035/PKS-RSCK/X/2016',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 55,
            'bp_code' => 'AX00001',
            'bp_name' => 'AXA FINANCIAL INDONESIA, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '016/HP-ADD-RSCK/VII/2017',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 56,
            'bp_code' => 'AX00004',
            'bp_name' => 'AXA FINANCIAL INDONESIA, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks axa admedika',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 57,
            'bp_code' => 'AX00002',
            'bp_name' => 'AXA INDONESIA, ASURANSI - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 58,
            'bp_code' => 'AX00003',
            'bp_name' => 'AXA MANDIRI FINANCIAL SERVICES, ASURANSI',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'AX00003-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 59,
            'bp_code' => 'BA00012',
            'bp_name' => 'BADAN PENGELOLAAN KEUANGAN HAJI (BPKH) (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'PKS Admedika BPKH',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 60,
            'bp_code' => 'BA00021',
            'bp_name' => 'BANDUNG PARAHYANGAN GOLF, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks bandung parahyangan golf',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 61,
            'bp_code' => 'BA00001',
            'bp_name' => 'BANDUNG PARAHYANGAN GOLF, PT (COB BPJS KESEHATAN)',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'BA00001-01 Belum Ada',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 62,
            'bp_code' => 'BA00015',
            'bp_name' => 'BANK BJB (SEWA)',
            'bp_type' => 'Tenant',
            'bp_scheme' => 'Standard',
            'bp_contract' => '-',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 63,
            'bp_code' => 'BA00009',
            'bp_name' => 'BANK BJB-NON USAHA',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '-',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 64,
            'bp_code' => 'BA00019',
            'bp_name' => 'BANK BRI, PT (PENSIUNAN) (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks admedika bank bri pensiunan',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 65,
            'bp_code' => 'BA00002',
            'bp_name' => 'BANK JABAR BANTEN (BJB) SYARIAH, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '014/HP-PKS-RSCK/III/2019',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 66,
            'bp_code' => 'BA00003',
            'bp_name' => 'BANK JATIM - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 67,
            'bp_code' => 'BA00016',
            'bp_name' => 'BANK MANDIRI (PERSERO) (TBK SEWA)',
            'bp_type' => 'Tenant',
            'bp_scheme' => 'Standard',
            'bp_contract' => '-',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 68,
            'bp_code' => 'BA00013',
            'bp_name' => 'BANK MANDIRI (PERSERO), TBK (NON USAHA)',
            'bp_type' => 'Tenant',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'R.06.Ar.BBG/PKS.ECO.020/2021',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 69,
            'bp_code' => 'BA00017',
            'bp_name' => 'BANK OCBC NISP - SEWA',
            'bp_type' => 'Tenant',
            'bp_scheme' => 'Standard',
            'bp_contract' => '-',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 70,
            'bp_code' => 'BA00010',
            'bp_name' => 'BANK OCBC NISP (NON USAHA)',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '-',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 71,
            'bp_code' => 'BA00004',
            'bp_name' => 'BANK RAKYAT INDONESIA, PT. PERSERO TBK',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'BA00004-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 72,
            'bp_code' => 'BA00005',
            'bp_name' => 'BANK SYARIAH MANDIRI CABANG CIMAHI, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'BA00005-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 73,
            'bp_code' => 'BA00006',
            'bp_name' => 'BANK TABUNGAN NEGARA (BTN)',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'BA00006-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 74,
            'bp_code' => 'BC00001',
            'bp_name' => 'BCA LIFE - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 75,
            'bp_code' => 'BE00001',
            'bp_name' => 'BELAPUTERA INTILAND, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '022/HP-PKS-RSCK/X/2017',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 76,
            'bp_code' => 'BI00001',
            'bp_name' => 'BIARA PRATISTA',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'Tdk Ada PKS',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 77,
            'bp_code' => 'BI00008',
            'bp_name' => 'BINA NUSANTARA (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks bina nusantara admedika',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 78,
            'bp_code' => 'BI00006',
            'bp_name' => 'BINTANG ABADI, CV (COVID)',
            'bp_type' => 'Tenant',
            'bp_scheme' => 'Corporate',
            'bp_contract' => '09.a/PKS-RSCK/IV/2020',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 79,
            'bp_code' => 'BI00007',
            'bp_name' => 'BINTANG ABADI, CV (NON COVID)',
            'bp_type' => 'Tenant',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'Belum ada PKS non covid',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 80,
            'bp_code' => 'BI00002',
            'bp_name' => 'BINTANG ASURANSI-ADMEDIKA, PT.',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'BI00002-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 81,
            'bp_code' => 'BI00003',
            'bp_name' => 'BIOFARMA',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '17/PKS-RSCK/VIII/2014',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 82,
            'bp_code' => 'BI00009',
            'bp_name' => 'BIOFARMA COB BPJS KESEHATAN',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks biofarma',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 83,
            'bp_code' => 'BL00001',
            'bp_name' => 'BLESSING MINI MARKET (NON USAHA)',
            'bp_type' => 'Tenant',
            'bp_scheme' => 'Corporate',
            'bp_contract' => '06/PKS-RSCK/II/2021',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 84,
            'bp_code' => 'BL00003',
            'bp_name' => 'BLESSING MINI MARKET (SEWA)',
            'bp_type' => 'Tenant',
            'bp_scheme' => 'Standard',
            'bp_contract' => '-',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 85,
            'bp_code' => 'BN00001',
            'bp_name' => 'BNI LIFE INSURANCE, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '03/HP-ADD-RSCK/II/2017',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 86,
            'bp_code' => 'BN00002',
            'bp_name' => 'BNI LIFE INSURANCE, PT - ADMEDIKA',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '03/HP-ADD-RSCK/II/2017',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 87,
            'bp_code' => 'BP00005',
            'bp_name' => 'BPJS JKN (OBAT KRONIS)',
            'bp_type' => 'BPJS',
            'bp_scheme' => 'JKN',
            'bp_contract' => '065/HP-PKS-RSCK/XII/2020',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 88,
            'bp_code' => 'BP00001',
            'bp_name' => 'BPJS KESEHATAN',
            'bp_type' => 'BPJS',
            'bp_scheme' => 'JKN',
            'bp_contract' => '114/HP-PKS-RSCK/XII/2021',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 89,
            'bp_code' => 'BP00006',
            'bp_name' => 'BPJS KESEHATAN*',
            'bp_type' => 'BPJS',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'bpjs kesehatan',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 90,
            'bp_code' => 'BP00002',
            'bp_name' => 'BPJS KETENAGAKERJAAN',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '063/HP-PKIS-RSCK/XI/2020',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 91,
            'bp_code' => 'BR00001',
            'bp_name' => 'BRI LIFE- ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 92,
            'bp_code' => 'BU00001',
            'bp_name' => 'BUANA DISTRINDO',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'BU00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 93,
            'bp_code' => 'BU00009',
            'bp_name' => 'BUMIPUTERA 1912, AJB  PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 94,
            'bp_code' => 'BU00002',
            'bp_name' => 'BUMIPUTERA MUDA 1967 (BUMIDA), ASURANSI-ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 95,
            'bp_code' => 'BU00003',
            'bp_name' => 'BUMIPUTERA MUDA 1967 (BUMIDA), PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '018/ADD-RSCK/VII/2015',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 96,
            'bp_code' => 'BU00011',
            'bp_name' => 'BUMIPUTERA MUDA 1967 ASURANSI UMUM, PT, BUMIDA, BMD SYA (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks admedika bumida sya',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 97,
            'bp_code' => 'CA00001',
            'bp_name' => 'CAHAYA BANGSA CLASSICAL SCHOOL',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '061/HP-PKS-RSCK/IV/2021',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 98,
            'bp_code' => 'CA00006',
            'bp_name' => 'CAR A.J.CENTRAL ASIA RAYA PREVENSIA (SYARIAH), PT (ADMEDIKA)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '053/HP-PKS-RSCK/VIII/2020',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 99,
            'bp_code' => 'CA00005',
            'bp_name' => 'CAR A.J.CENTRAL ASIA RAYA, PT - (ADMEDIKA)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '043/HP-PKS-RSCK/XI/2018',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 100,
            'bp_code' => 'CA00002',
            'bp_name' => 'CAR A.J.CENTRAL ASIA RAYA, PT (PREVENSIA)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '053/HP/PKS-RSCK/VIII/2020',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 101,
            'bp_code' => 'CA00003',
            'bp_name' => 'CARILLON INDOPRIMA, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'CA00003-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 102,
            'bp_code' => 'CE00001',
            'bp_name' => 'CENTRAL TEXINDO, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'CE00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 103,
            'bp_code' => 'CF00001',
            'bp_name' => 'CFC (NON USAHA)',
            'bp_type' => 'Tenant',
            'bp_scheme' => 'Corporate',
            'bp_contract' => '02/PKS-RSCK/I/2021',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 104,
            'bp_code' => 'CF00002',
            'bp_name' => 'CFC (SEWA)',
            'bp_type' => 'Tenant',
            'bp_scheme' => 'Standard',
            'bp_contract' => '-',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 105,
            'bp_code' => 'CH00001',
            'bp_name' => 'CHAMP RESTO, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'CH00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 106,
            'bp_code' => 'CH00002',
            'bp_name' => 'CHINA LIFE INSURANCE INDONESIA, PT - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'CH00002-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 107,
            'bp_code' => 'CH00003',
            'bp_name' => 'CHUBB GENERAL INSURANCE INDONESIA, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '019/HP-PKS-RSCK/III/2019',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 108,
            'bp_code' => 'CH00004',
            'bp_name' => 'CHUBB LIFE INSURANCE INDONESIA, PT ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 109,
            'bp_code' => 'CI00001',
            'bp_name' => 'CIGNA ASURANSI - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 110,
            'bp_code' => 'CI00002',
            'bp_name' => 'CIGNA SHANGHAI - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'CI00002-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 111,
            'bp_code' => 'CI00003',
            'bp_name' => 'CIGNA-ADMEDIKA',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'CI00003-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 112,
            'bp_code' => 'CI00004',
            'bp_name' => 'CIKARANG LISTRINDO ENERGI, PT - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'CI00004-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 113,
            'bp_code' => 'CI00068',
            'bp_name' => 'CIPTA NIAGA GEMILANG, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks cipta niaga admedika',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 114,
            'bp_code' => 'CI00035',
            'bp_name' => 'CITRA MEDIA NUSA PURNAMA, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 115,
            'bp_code' => 'CI00005',
            'bp_name' => 'CITRA SUKSES MANDIRI, PT (ADVANCE VM MASSAGE CHAIR)- NON USAHA',
            'bp_type' => 'Tenant',
            'bp_scheme' => 'Standard',
            'bp_contract' => '010/HP-PKS-RSCK/III/2022',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 116,
            'bp_code' => 'CI00052',
            'bp_name' => 'CITRA SUKSES MANDIRI, PT (ADVANCE VM MASSAGE CHAIR)-(SEWA)',
            'bp_type' => 'Tenant',
            'bp_scheme' => 'Standard',
            'bp_contract' => '-',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 117,
            'bp_code' => 'CI00043',
            'bp_name' => 'CITRAHIRZA ASTARIJAYA, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks admesika citrahirza',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 118,
            'bp_code' => 'CI00006',
            'bp_name' => 'CITRAKARYA PRANATA, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'CI00006-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 119,
            'bp_code' => 'CO00001',
            'bp_name' => 'COMBIPHAR, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '040/HP-PKS-RSCK/XI/2018',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 120,
            'bp_code' => 'CO00002',
            'bp_name' => 'COMMONWEALTH FULLERTON (MEDILUM), PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'CO00002-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 121,
            'bp_code' => 'CO00003',
            'bp_name' => 'COMMONWEALTH LIFE, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'CO00003-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 122,
            'bp_code' => 'CS00002',
            'bp_name' => 'CSC FRUITS-NON USAHA',
            'bp_type' => 'Tenant',
            'bp_scheme' => 'Corporate',
            'bp_contract' => '05/PKS-RSCK/II/2021',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 123,
            'bp_code' => 'CS00003',
            'bp_name' => 'CSC FRUITS-SEWA',
            'bp_type' => 'Tenant',
            'bp_scheme' => 'Standard',
            'bp_contract' => '-',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 124,
            'bp_code' => 'DA00007',
            'bp_name' => 'DAILY FRESH CUP CORN-NON USAHA',
            'bp_type' => 'Tenant',
            'bp_scheme' => 'Standard',
            'bp_contract' => '16/PKS-RSCK/X/2020',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 125,
            'bp_code' => 'DA00008',
            'bp_name' => 'DAILY FRESH CUP CORN-SEWA',
            'bp_type' => 'Tenant',
            'bp_scheme' => 'Standard',
            'bp_contract' => '-',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 126,
            'bp_code' => 'DA00001',
            'bp_name' => 'DAKSA, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'DA00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 127,
            'bp_code' => 'DA00002',
            'bp_name' => 'DAMIAN SCHOOL',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '104/HP-PKS-RSCK/IX/2021',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 128,
            'bp_code' => 'DA00003',
            'bp_name' => 'DAYA ADICIPTA MOTORA (HONDA), PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'DA00003-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 129,
            'bp_code' => 'DA00009',
            'bp_name' => 'DAYA ADICIPTA MOTORA (HONDA), PT (COB BPJS KESEHATAN)',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks daya adicipta',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 130,
            'bp_code' => 'DA00004',
            'bp_name' => 'DAYIN MITRA ASURANSI - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'DA00004-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 131,
            'bp_code' => 'DE00001',
            'bp_name' => 'DEWAN KOMISARIS TELKOM INDONESIA, (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'DE00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 132,
            'bp_code' => 'DI00008',
            'bp_name' => 'DIGITAL ADS INDONESIA, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks digital ads admedika',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 133,
            'bp_code' => 'DI00004',
            'bp_name' => 'DIGITAL ENERGY INFOMEDIA, ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 134,
            'bp_code' => 'DI00007',
            'bp_name' => 'DINAS KESEHATAN KABUPATEN BANDUNG BARAT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks dinkes tb',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 135,
            'bp_code' => 'DI00006',
            'bp_name' => 'DINAS KESEHATAN KABUPATEN BANDUNG BARAT (PROGRAM TB)',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'tdk ada no pks',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 136,
            'bp_code' => 'DI00001',
            'bp_name' => 'DIREKSI TELKOM (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 137,
            'bp_code' => 'DR00004',
            'bp_name' => 'dr Lucia',
            'bp_type' => 'Dokter',
            'bp_scheme' => 'Standard',
            'bp_contract' => '1223545',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 138,
            'bp_code' => 'DU00001',
            'bp_name' => 'DUTARAYA INVESTINDO, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'DU00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 139,
            'bp_code' => 'DY00001',
            'bp_name' => 'DYMATIC CHEMICALS, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks DYMATIC CHEMICALS alkindo',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 140,
            'bp_code' => 'EG00001',
            'bp_name' => 'EGS HEART, EXPLORE GLOBAL SOLUTION, PT - NON USAHA',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '168146/005/EGS/2020',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 141,
            'bp_code' => 'EN00006',
            'bp_name' => 'ENERGY EQUITY EPIC (SENGKANG) PTY. LTD (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks admedika equity sengkang',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 142,
            'bp_code' => 'EQ00001',
            'bp_name' => 'EQUITY LIFE INDONESIA, PT (ADMEDIKA)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '017/HP-PKS/RSCK/V/2018',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 143,
            'bp_code' => 'ES00001',
            'bp_name' => 'ESMALGLASS INDONESIA, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks esmalglass admedika',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 144,
            'bp_code' => 'EX00001',
            'bp_name' => 'EXXON MOBIL, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'admedika exxon',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 145,
            'bp_code' => 'FA00003',
            'bp_name' => 'FAJAR ANUGERAH DINAMIKA, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks fajar anugrah admedika',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 146,
            'bp_code' => 'FA00001',
            'bp_name' => 'FAKULTAS ILMU ADMINISTRASI UI - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 147,
            'bp_code' => 'FE00001',
            'bp_name' => 'FEDERAL INTERNATIONAL FINANCE, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'FE00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 148,
            'bp_code' => 'FE00003',
            'bp_name' => 'FEDERAL INTERNATIONAL FINANCE, PT (FIF) (PADALARANG)',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'proses perpanjangan',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 149,
            'bp_code' => 'FE00002',
            'bp_name' => 'FERRO DINAMIKA MAS, PT - ADMEDIKA PAYOR (YOUNEXA INTI MATERIALS, PT)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'FE00002-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 150,
            'bp_code' => 'ME00005',
            'bp_name' => 'FULLERTON HEALTH INDONESIA, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '050/PKS-RSCK/IX/2013',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 151,
            'bp_code' => 'FW00002',
            'bp_name' => 'FWD FINANCIAL WIRAMITRA DANADYAKSA - ADMEDIKA',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks fwd admedika',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 152,
            'bp_code' => 'FW00001',
            'bp_name' => 'FWD FINANCIAL WIRAMITRA DANADYAKSA - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 153,
            'bp_code' => 'GA00001',
            'bp_name' => 'GARDA MEDIKA ASTRA BUANA, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'LGL.004/PKS-AAB/2009',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 154,
            'bp_code' => 'PT00102',
            'bp_name' => 'GARDA MEDIKA ASURANSI ASTRA BUANA, PT (ADMEDIKA)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'LGL.004/PKS-AAB/2009',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 155,
            'bp_code' => 'GE00001',
            'bp_name' => 'GENERALI INDONESIA ASURANSI JIWA, PT (ADMEDIKA)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => '035/HP-PKS-RSCK/X/2018',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 156,
            'bp_code' => 'GE00005',
            'bp_name' => 'GENERALI INDONESIA, ASURANSI JIWA',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 157,
            'bp_code' => 'GE00006',
            'bp_name' => 'GEO DIPA ENERGI, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'Geo Dipa Pks Admedika',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 158,
            'bp_code' => 'GE00002',
            'bp_name' => 'GEOFORCE INDONESIA, PT - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'GE00002-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 159,
            'bp_code' => 'GE00003',
            'bp_name' => 'GEREJA KATOLIK SANTO IGNATIUS',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'GE00003-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 160,
            'bp_code' => 'GL00001',
            'bp_name' => 'GLOBAL ASSISTANCE & HEALTHCARE, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'GL00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 161,
            'bp_code' => 'GL00003',
            'bp_name' => 'GLOBAL CARS INDONESIA, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks admedika global cars',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 162,
            'bp_code' => 'GR00001',
            'bp_name' => 'GRAB GROUP-AAI INDONESIA',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'GR00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 163,
            'bp_code' => 'GR00002',
            'bp_name' => 'GRAHA SERIBU SATUJAYA, PT - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'GR00002-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 164,
            'bp_code' => 'GR00003',
            'bp_name' => 'GREAT EASTERN LIFE INDONESIA, PT - ADMEDIKA',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '009/HP-PKS-RSCK/III/2019',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 165,
            'bp_code' => 'HA00001',
            'bp_name' => 'HALODOC - PT MEDIA DOKTER INVESTAMA',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'HA00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 166,
            'bp_code' => 'HA00002',
            'bp_name' => 'HANWHA LIFE - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 167,
            'bp_code' => 'HA00003',
            'bp_name' => 'HANWHA LIFE INSURANCE INDONESIA',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '026/PKS-RSCK/VI/2015',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 168,
            'bp_code' => 'HA00004',
            'bp_name' => 'HARMONI DINAMIK INDONESIA, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 169,
            'bp_code' => 'HA00005',
            'bp_name' => 'HASNUR RIUNG SINERGI, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks hasnur admedika',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 170,
            'bp_code' => 'HD00001',
            'bp_name' => 'HDI FAMILY COMPANIES INDONESIA - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'HD00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 171,
            'bp_code' => 'HE00002',
            'bp_name' => 'HENNER SAS, (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 172,
            'bp_code' => 'KE00014',
            'bp_name' => 'HIGH SPEED RAILWAY CONTRACTOR CONSORTIUM',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'PKS KERETA CEPAT CINA',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 173,
            'bp_code' => 'HU00001',
            'bp_name' => 'HUTAMA KARYA (PERSERO), PT WILAYAH II JABAR,BANTEN,DKI,LAMPUNG & BABEL',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'HU00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 174,
            'bp_code' => 'IC00001',
            'bp_name' => 'ICON PLUS (ICON +) - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'IC00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 175,
            'bp_code' => 'IF00001',
            'bp_name' => 'IFORTE SOLUSI INFOTEK, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 176,
            'bp_code' => 'IN00001',
            'bp_name' => 'INCRESO PERKUMPULAN',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'IN00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 177,
            'bp_code' => 'IN00002',
            'bp_name' => 'INDOCEMENT TUNGGAL PRAKASA TBK, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '045/HP-PKS-RSCK/XII/2016',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 178,
            'bp_code' => 'IN00003',
            'bp_name' => 'INDOCEMENT TUNGGAL PRAKASA TBK, PT - COB BPJS',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => '045/HP-PKS-RSCK/XII/2016',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 179,
            'bp_code' => 'IN00004',
            'bp_name' => 'INDOFOOD (NUTRITION) CBP SUKSES MAKMUR, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '032/HP-PKS-RSCK/IX/2018',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 180,
            'bp_code' => 'IN00032',
            'bp_name' => 'INDOFOOD (NUTRITION) CBP SUKSES MAKMUR, PT - COB BPJS',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '032/HP-PKS-RSCK/IX/2018',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 181,
            'bp_code' => 'IN00005',
            'bp_name' => 'INDOFOOD CBP SUKSES MAKMUR DIVISI NOODLE , PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '048/HP-PKS-RSCK/VI/2020',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 182,
            'bp_code' => 'IN00031',
            'bp_name' => 'INDOFOOD CBP SUKSES MAKMUR DIVISI NOODLE , PT - COB BPJS',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks indofood noodle',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 183,
            'bp_code' => 'IN00006',
            'bp_name' => 'INDONESIA COMNETS PLUS, PT - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'IN00006-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 184,
            'bp_code' => 'IN00007',
            'bp_name' => 'INDOPELITA AIRCRAFT SERVICES - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'IN00007-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 185,
            'bp_code' => 'IN00008',
            'bp_name' => 'INDOSURYA LIFE - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'IN00008-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 186,
            'bp_code' => 'IN00009',
            'bp_name' => 'INFOMEDIA SOLUSI HUMANIKA (ISH) - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'IN00009-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 187,
            'bp_code' => 'IN00028',
            'bp_name' => 'INHEALTH INDONESIA (ASURANSI JIWA), PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'INHEALTH',
            'bp_contract' => '011/HP-PKS-RSCK/III/2022',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 188,
            'bp_code' => 'IN00011',
            'bp_name' => 'INPEX MASELLA - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 189,
            'bp_code' => 'IN00037',
            'bp_name' => 'INTEGRASI LAYANAN GLOBAL (ILG), PT  ASURANSI ASPAN (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks ilg aspan admedika',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 190,
            'bp_code' => 'IN00034',
            'bp_name' => 'INTEGRASI LAYANAN GLOBAL (ILG), PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'PKS Integrasi Admedika Payor',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 191,
            'bp_code' => 'IN00039',
            'bp_name' => 'INTEGRASI LOGISTIK CIPTA SOLUSI, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks integrasi logistik admedika',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 192,
            'bp_code' => 'IN00012',
            'bp_name' => 'INTEGRITAS SOLUSI MEDIKA (ISOMEDIK)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'IN00012-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 193,
            'bp_code' => 'IN00033',
            'bp_name' => 'INTERGRASI TRANSIT JAKARTA, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '-',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 194,
            'bp_code' => 'IN00029',
            'bp_name' => 'INTERNATIONAL SERVICES PACIFIC CROSS, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 195,
            'bp_code' => 'IN00013',
            'bp_name' => 'INTERNATIONAL SERVICES PACIFIC CROSS, PT (ADMEDIKA)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '019/HP-PKS-RSCK/VII/2018',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 196,
            'bp_code' => 'IN00014',
            'bp_name' => 'INTRA ASIA ASURANSI, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 197,
            'bp_code' => 'IP00002',
            'bp_name' => 'IPC TERMINAL PETIKEMAS VVIP, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks petikemas admedika',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 198,
            'bp_code' => 'IP00003',
            'bp_name' => 'IPC TERMINAL PETIKEMAS, PT, PEKERJA (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks admedika peti kemas pekerja',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 199,
            'bp_code' => 'IS00001',
            'bp_name' => 'ISTECH RESOURCES QQ PHSS, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'IS00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 200,
            'bp_code' => 'JA00017',
            'bp_name' => 'JADESTONE ENERGY (L) Pte ltd (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks jadestone admedika',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 201,
            'bp_code' => 'JA00010',
            'bp_name' => 'JAKARTA LINGKO INDONESIA, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 202,
            'bp_code' => 'JA00001',
            'bp_name' => 'JAMPERSAL DINKES KBB (JAMINAN PERSALINAN DINKES KBB)',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'JA00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 203,
            'bp_code' => 'JA00002',
            'bp_name' => 'JASA INDONESIA (JASINDO), PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'JA00002-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 204,
            'bp_code' => 'JA00003',
            'bp_name' => 'JASA MARGA, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'JA00003-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 205,
            'bp_code' => 'JA00012',
            'bp_name' => 'JASA MARGA, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks admedika jasa marga',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 206,
            'bp_code' => 'JA00015',
            'bp_name' => 'JASA PERALATAN PELABUHAN INDONESIA (JPPI) (ADMEDIKA PAYOR), PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks admedika jppi',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 207,
            'bp_code' => 'JA00004',
            'bp_name' => 'JASA RAHARDJA, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '099/HP-PKS-RSCK/X/2021',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 208,
            'bp_code' => 'JA00005',
            'bp_name' => 'JASINDO - ASURANSI JASA INDONESIA, PT (ADMEDIKA)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '09/HP-PKS-RSCK/II/2018',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 209,
            'bp_code' => 'JM00001',
            'bp_name' => 'JMA SYARIAH (JASA MITRA ABADI ASURANSI JIWA) - PT ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 210,
            'bp_code' => 'JO00004',
            'bp_name' => 'JOB PERTAMINA - PETROCHINA SALAWATI (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 211,
            'bp_code' => 'JO00001',
            'bp_name' => 'JOB PERTAMINA TALISMAN JAMBI MERANG, PT - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'JO00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 212,
            'bp_code' => 'JO00002',
            'bp_name' => 'JORONG BARUTAMA, PT - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'JO00002-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 213,
            'bp_code' => 'JP00001',
            'bp_name' => 'JPKM SURYA SUMIRAT (JPKM UMUM)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '048/HP-PKS-RSCK/XII/2018/ 01/1/ADD-SP/KPKM-SS/2021',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 214,
            'bp_code' => 'KA00013',
            'bp_name' => 'KALBE FARMA, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'belum ada mou',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 215,
            'bp_code' => 'KA00001',
            'bp_name' => 'KARTIKA BINA MEDIKATAMA C.Q MEDIKA PLAZA, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '017/HP-ADD-RSCK/VIII/2017',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 216,
            'bp_code' => 'KA00002',
            'bp_name' => 'KARYAWAN & KELUARGA ADMEDIKA - PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'KA00002-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 217,
            'bp_code' => 'KA00011',
            'bp_name' => 'KARYAWAN RS CAHYA KAWALUYAN - BPJS',
            'bp_type' => 'Karyawan - RS',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'bpjs karyawan',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 218,
            'bp_code' => 'KA00010',
            'bp_name' => 'KARYAWAN RS CAHYA KAWALUYAN - PIUTANG PINJAMAN',
            'bp_type' => 'Karyawan - RS',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'seragam karyawan',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 219,
            'bp_code' => 'KA00009',
            'bp_name' => 'KASAI TECK SEE INDONESIA (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 220,
            'bp_code' => 'KE00009',
            'bp_name' => 'KEMENKES',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '123',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 221,
            'bp_code' => 'KE00011',
            'bp_name' => 'KEMENKES COB BPJS KESEHATAN',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks kemenkes cob',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 222,
            'bp_code' => 'KE00012',
            'bp_name' => 'KERETA API INDONESIA, PT (COB BPJS KESEHATAN)',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks kereta api indonesia cob',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 223,
            'bp_code' => 'KE00001',
            'bp_name' => 'KERETA API INDONESIA, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '053/HP-PKS-RSCK/VII/2020',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 224,
            'bp_code' => 'KE00002',
            'bp_name' => 'KERETA CEPAT INDONESIA CINA, PT - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'KE00002-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 225,
            'bp_code' => 'KE00013',
            'bp_name' => 'KERETA COMMUTER INDONESIA, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks kereta commuter admedika',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 226,
            'bp_code' => 'KE00003',
            'bp_name' => 'KERRY INGREDIENTS INDONESIA, PT - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'KE00003-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 227,
            'bp_code' => 'KE00004',
            'bp_name' => 'KERTAS PADALARANG, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => '048/HP-PKS-RSCK/X/2022',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 228,
            'bp_code' => 'KE00010',
            'bp_name' => 'KERTAS PADALARANG, PT - COB BPJS KESEHATAN',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '048/HP-PKS-RSCK/X/2022 COB',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 229,
            'bp_code' => 'KE00005',
            'bp_name' => 'KEUSKUPAN BANDUNG',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'KE00005-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 230,
            'bp_code' => 'KL00001',
            'bp_name' => 'KLINIK PRATAMA SURYA MEDIKA - COB BPJS',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '081/HP-PKS-RSCK/VII/2021',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 231,
            'bp_code' => 'KO00001',
            'bp_name' => 'KOPELINDO YABINSTRA PENSIUNAN BULOG - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'KO00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 232,
            'bp_code' => 'KU00004',
            'bp_name' => 'KURNIA ARTHA PRATIWI, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'BELUM ADA PKS KURNIA ARTHA',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 233,
            'bp_code' => 'LA00007',
            'bp_name' => 'LAB ARGYA-NON USAHA',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '-',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 234,
            'bp_code' => 'LA00001',
            'bp_name' => 'LANGIA PERSADA CHEMICALS, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'LA00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 235,
            'bp_code' => 'LE00004',
            'bp_name' => 'LEMBAGA PENJAMIN SIMPANAN (LPS) (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks lps admedika',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 236,
            'bp_code' => 'LE00005',
            'bp_name' => 'LEMONILO INDONESIA SEHAT, (ADMEDIKA PAYOR) PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks admedika lemonilo',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 237,
            'bp_code' => 'LE00001',
            'bp_name' => 'LESTARI MAHAPUTRA BUANA, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'belum ada pks LMB',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 238,
            'bp_code' => 'LI00003',
            'bp_name' => 'LIPPO GENERAL INSURANCE TBK, PT (ADMEDIKA)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 239,
            'bp_code' => 'LI00001',
            'bp_name' => 'LIPPO GENERAL INSURANCE TBK, PT (MEDICARE)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '001/HP-PKS-RSCK/I/2018',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 240,
            'bp_code' => 'LI00005',
            'bp_name' => 'LIPPO LIFE ASSURANCE, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks lippo life assurance',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 241,
            'bp_code' => 'MA00012',
            'bp_name' => 'MAC SARANA JAYA-NON USAHA',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '-',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 242,
            'bp_code' => 'MA00015',
            'bp_name' => 'MAC SARANA JAYA-SEWA',
            'bp_type' => 'Tenant',
            'bp_scheme' => 'Standard',
            'bp_contract' => '-',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 243,
            'bp_code' => 'MA00001',
            'bp_name' => 'MAGNA MULTI ARTHA GUNA TBK ASURANSI, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '15/PKS-RSCK/VI/2016',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 244,
            'bp_code' => 'MA00009',
            'bp_name' => 'MAGNA MULTI ARTHA GUNA TBK ASURANSI, PT (ADMEDIKA) PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 245,
            'bp_code' => 'MA00011',
            'bp_name' => 'MANDIRI AXA GENERAL INSURANCE - MAGI, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 246,
            'bp_code' => 'MA00008',
            'bp_name' => 'MANDIRI INHEALTH, PT - INDEMNITY',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'INHEALTH',
            'bp_contract' => '011/HP-PKS-RSCK/III/2022',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 247,
            'bp_code' => 'IN00010',
            'bp_name' => 'MANDIRI INHEALTH, PT - MANAGED CARE',
            'bp_type' => 'INHEALTH',
            'bp_scheme' => 'INHEALTH',
            'bp_contract' => '005/ADD-HP-RSCK/XII/2020',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 248,
            'bp_code' => 'MA00013',
            'bp_name' => 'MANULIFE INDONESIA ASURANSI JIWA, PT - HALODOC',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'manulife halodoc pks',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 249,
            'bp_code' => 'MA00002',
            'bp_name' => 'MANULIFE INDONESIA, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'MA00002-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 250,
            'bp_code' => 'MA00003',
            'bp_name' => 'MANULIFE INDONESIA,ASURANSI JIWA, PT - ADMEDIKA',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '02/HP-ADD-RSCK/II/2018',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 251,
            'bp_code' => 'MA00016',
            'bp_name' => 'MATTEL INDONESIA, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'admedika mattel indonesia',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 252,
            'bp_code' => 'MA00017',
            'bp_name' => 'MAXCHEM INDONESIA, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks aklindo maxchem',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 253,
            'bp_code' => 'MC00001',
            'bp_name' => 'MC LIVING ESSENTIALS INDONESIA, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'Pks Admedika Mc Living',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 254,
            'bp_code' => 'MC00002',
            'bp_name' => 'MCCONNELL DOWELL INDONESIA, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks mc connell dowell',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 255,
            'bp_code' => 'ME00001',
            'bp_name' => 'MEDCO E&P INDONESIA, PT - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 256,
            'bp_code' => 'ME00026',
            'bp_name' => 'MEDIA TELEVISI INDONESIA, PT ( METRO TV ) ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 257,
            'bp_code' => 'ME00002',
            'bp_name' => 'MEDIACO, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'ME00002-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 258,
            'bp_code' => 'ME00004',
            'bp_name' => 'MEDIKA KOMUNIKA TEKNOLOGI, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'ME00004-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 259,
            'bp_code' => 'ME00032',
            'bp_name' => 'MEDIKA KOMUNIKA TEKNOLOGI, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks medika komunika admedika',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 260,
            'bp_code' => 'ME00006',
            'bp_name' => 'MEDION FARMA JAYA, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '044/HP-PKS-RSCK/XI/2018',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 261,
            'bp_code' => 'ME00025',
            'bp_name' => 'MEGA ASURANSI UMUM , PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '337/PKS-RS/IV/07',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 262,
            'bp_code' => 'ME00008',
            'bp_name' => 'MEGA INTERNATIONAL HEALTHCARE - FULLERTON HEALTH INDONESIA',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'ME00008-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 263,
            'bp_code' => 'ME00007',
            'bp_name' => 'MEGA LIFE ASURANSI JIWA, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 264,
            'bp_code' => 'ME00009',
            'bp_name' => 'MEGA SUKMA, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'ME00009-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 265,
            'bp_code' => 'ME00028',
            'bp_name' => 'MENARA MARITIM INDONESIA, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks admedika maritim',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 266,
            'bp_code' => 'MI00001',
            'bp_name' => 'MITRA ADI PERKASA (MAP), PT - ADMEDIKA PAYOR',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'MI00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 267,
            'bp_code' => 'MI00008',
            'bp_name' => 'MITRA KARSA UTAMA (MKU), PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks mitra admedika',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 268,
            'bp_code' => 'MN00001',
            'bp_name' => 'MNC LIFE ASSURANCE, PT (ADMEDIKA)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '849/PKS/MNCLA-RSCK/VII/2018',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 269,
            'bp_code' => 'MO00001',
            'bp_name' => 'MODA INTEGRASI TRANSPORTASI JABODETABEK, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 270,
            'bp_code' => 'MO00003',
            'bp_name' => 'MOTION TECH INDONESIA, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks admedika motion',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 271,
            'bp_code' => 'MR00001',
            'bp_name' => 'MR-CK',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'MR00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 272,
            'bp_code' => 'MR00002',
            'bp_name' => 'MRT JAKARTA, PT - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 273,
            'bp_code' => 'MU00011',
            'bp_name' => 'MULTI SERVISINDO SARANA, PT (SECURITY SERVICES)-NON USAHA',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '024/PKS-RSCK/XII/2020',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 274,
            'bp_code' => 'N/00001',
            'bp_name' => 'N/A',
            'bp_type' => 'TGRS',
            'bp_scheme' => 'Standard',
            'bp_contract' => '-',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 275,
            'bp_code' => 'NA00001',
            'bp_name' => 'NAMASINDO PLAS, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'NA00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 276,
            'bp_code' => 'NA00002',
            'bp_name' => 'NAYAKA ERA HUSADA, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '005/HP-PKS-RSCK/II/2022',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 277,
            'bp_code' => 'NA00003',
            'bp_name' => 'NAYAKA ERA HUSADA, PT - COB BPJS KESEHATAN',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '005/HP-PKS-RSCK/II/2022',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 278,
            'bp_code' => 'NE00001',
            'bp_name' => 'NESTLE INDOFOOD CITARASA INDONESIA - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'NE00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 279,
            'bp_code' => 'NT00001',
            'bp_name' => 'NTT DATA INDONESIA, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'NT00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 280,
            'bp_code' => 'NU00001',
            'bp_name' => 'NUSA RAYA CIPTA, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'NU00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 281,
            'bp_code' => 'NU00002',
            'bp_name' => 'NUSANTARA REGAS, PT - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 282,
            'bp_code' => 'NU00003',
            'bp_name' => 'NUSANTARA TURBIN DAN PROPULSI, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'NU00003-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 283,
            'bp_code' => 'OC00001',
            'bp_name' => 'OCEANKIT DRINK-NON USAHA',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => '17/PKS-RSCK/X/2020',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 284,
            'bp_code' => 'OC00003',
            'bp_name' => 'OCEANKIT DRINK-SEWA',
            'bp_type' => 'Tenant',
            'bp_scheme' => 'Corporate',
            'bp_contract' => '-',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 285,
            'bp_code' => 'OR00003',
            'bp_name' => 'ORDO AUGUSTINIENSIUM DISCALCEATORUM, (OAD)',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'belum ada mou oad',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 286,
            'bp_code' => 'OW00001',
            'bp_name' => 'OWLEXA HEALTHCARE',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'OW00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 287,
            'bp_code' => 'PA00001',
            'bp_name' => 'PAMA PERSADA NUSANTARA, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'PA00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 288,
            'bp_code' => 'PA00002',
            'bp_name' => 'PAN PACIFIC INSURANCE, PT (ADMEDIKA)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'PA00002-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 289,
            'bp_code' => 'PA00033',
            'bp_name' => 'PANGANSARI UTAMA FOOD DISTRIBUTIONS, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks pangansari admedika',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 290,
            'bp_code' => 'PA00003',
            'bp_name' => 'PANIN DAI-ICHI LIFE - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'PA00003-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 291,
            'bp_code' => 'PA00004',
            'bp_name' => 'PATRA SK, PT - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 292,
            'bp_code' => 'PA00005',
            'bp_name' => 'PATRA TRADING, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'PA00005-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 293,
            'bp_code' => 'PB00001',
            'bp_name' => 'PB PON JAWA BARAT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'PB00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 294,
            'bp_code' => 'PD00019',
            'bp_name' => 'PDAM TIRTA RAHARJA',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks pdam tirta rsck',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 295,
            'bp_code' => 'PD00001',
            'bp_name' => 'PDAM TIRTA RAHARJA-COB BPJS KESEHATAN',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '096/HP=PKS-RSCK/VIII/2021',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 296,
            'bp_code' => 'PE00024',
            'bp_name' => 'PELABUHAN INDONESIA II, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'Admedika Payor pelabuhan',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 297,
            'bp_code' => 'PE00034',
            'bp_name' => 'PELABUHAN TANJUNG PRIOK, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks admedika pelabuhan priok',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 298,
            'bp_code' => 'PE00001',
            'bp_name' => 'PELINDO MARINE SERVICE - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'PE00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 299,
            'bp_code' => 'PE00029',
            'bp_name' => 'PELINDO SOLUSI LOGISTIK, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'Pks Admedika Pelindo Solusi Logistik',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 300,
            'bp_code' => 'PE00002',
            'bp_name' => 'PELITA AIR SERVICE - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 301,
            'bp_code' => 'PE00033',
            'bp_name' => 'PEMBANGUNAN ACEH PEMA, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks pema admedika',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 302,
            'bp_code' => 'PE00035',
            'bp_name' => 'PENGERUKAN INDONESIA (RUKINDO), PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks admedika pengerukan',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 303,
            'bp_code' => 'PERSONAL',
            'bp_name' => 'PERSONAL',
            'bp_type' => 'Pribadi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '-',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 304,
            'bp_code' => 'TU00002',
            'bp_name' => 'PERTA LIFE INSURANCE, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'TU00002-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 305,
            'bp_code' => 'PE00031',
            'bp_name' => 'PERTAGAS NIAGA, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks pertagas admedika',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 306,
            'bp_code' => 'PE00003',
            'bp_name' => 'PERTAMINA BINA MEDIKA, PT (PERTAMEDIKA)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'PE00003-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 307,
            'bp_code' => 'PE00025',
            'bp_name' => 'PERTAMINA DRILLING SERVICES INDONESIA, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks admedika pertamina drilling',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 308,
            'bp_code' => 'PE00004',
            'bp_name' => 'PERTAMINA GEOTHERMAL ENERGY - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 309,
            'bp_code' => 'PE00005',
            'bp_name' => 'PERTAMINA HULU ENERGI ABAR (PHE) GROUP - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'PE00005-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 310,
            'bp_code' => 'PE00006',
            'bp_name' => 'PERTAMINA HULU ENERGI KAMPAR (PHE) GROUP - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'PE00006-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 311,
            'bp_code' => 'PE00007',
            'bp_name' => 'PERTAMINA HULU ENERGI METAN TANJUNG II (PHE) GROUP - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'PE00007-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 312,
            'bp_code' => 'PE00008',
            'bp_name' => 'PERTAMINA HULU ENERGI NSB (PHE) GROUP - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'PE00008-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 313,
            'bp_code' => 'PE00009',
            'bp_name' => 'PERTAMINA HULU ENERGI NUNUKAN COMPANY (PHE) GROUP - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'PE00009-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 314,
            'bp_code' => 'PE00010',
            'bp_name' => 'PERTAMINA HULU ENERGI OFFSHORE NORTH WEST JAVA - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 315,
            'bp_code' => 'PE00022',
            'bp_name' => 'PERTAMINA HULU ENERGI OSES, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 316,
            'bp_code' => 'PE00011',
            'bp_name' => 'PERTAMINA HULU ENERGI SIAK (PHE) GROUP-ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'PE00011-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 317,
            'bp_code' => 'PE00012',
            'bp_name' => 'PERTAMINA HULU ENERGI WMO (PHE) GROUP-ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'PE00012-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 318,
            'bp_code' => 'PE00013',
            'bp_name' => 'PERTAMINA HULU INDONESIA (PHI) - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 319,
            'bp_code' => 'PE00014',
            'bp_name' => 'PERTAMINA HULU INDONESIA-VVIP, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'PE00014-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 320,
            'bp_code' => 'PE00015',
            'bp_name' => 'PERTAMINA HULU KALIMANTAN TIMUR - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 321,
            'bp_code' => 'PE00016',
            'bp_name' => 'PERTAMINA INTERNASIONAL EP - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 322,
            'bp_code' => 'PE00030',
            'bp_name' => 'PERTAMINA LUBRICANTS, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks admedika pertamina lubricantd',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 323,
            'bp_code' => 'PE00032',
            'bp_name' => 'PERTAMINA POWER INDONESIA, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks pertamina power indonesia',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 324,
            'bp_code' => 'PE00027',
            'bp_name' => 'PERTAMINA TRANSKONTINENTAL (PTK), PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks admedika transkontinental ptk',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 325,
            'bp_code' => 'PE00028',
            'bp_name' => 'PERTAMINA TRANSKONTINENTAL (PTK,PSN), PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks pertamina trankontinental  (PTK_PSN)',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 326,
            'bp_code' => 'PE00036',
            'bp_name' => 'PERUM JASA TIRTA II, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks admedika perum jasa tirta II',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 327,
            'bp_code' => 'PE00017',
            'bp_name' => 'PETROCHINA PERMANEN - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 328,
            'bp_code' => 'PE00018',
            'bp_name' => 'PETROGAS (BASIN) LIMITED - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'PE00018-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 329,
            'bp_code' => 'PG00006',
            'bp_name' => 'PGAS TELEKOMUNIKASI NUSANTARA, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks admedika telekomunikasi',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 330,
            'bp_code' => 'PG00001',
            'bp_name' => 'PGN COM - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'PG00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 331,
            'bp_code' => 'PG00002',
            'bp_name' => 'PGN GAGAS - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'PG00002-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 332,
            'bp_code' => 'PG00003',
            'bp_name' => 'PGN MAS - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'PG00003-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 333,
            'bp_code' => 'PG00004',
            'bp_name' => 'PGN SOLUTION - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'PG00004-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 334,
            'bp_code' => 'PG00005',
            'bp_name' => 'PGN WIDAR - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'PG00005-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 335,
            'bp_code' => 'PH00001',
            'bp_name' => 'PHE OGAN KOMERING, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks phe ogan komering admedika',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 336,
            'bp_code' => 'PL00001',
            'bp_name' => 'PLATINUM HEALTHCARE, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'PL00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 337,
            'bp_code' => 'PJ00001',
            'bp_name' => 'PLN NUSANTARA POWER UNIT PEMBANGKITAN CIRATA, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '107/HP-PKS-RSCK/XI/2021',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 338,
            'bp_code' => 'PO00001',
            'bp_name' => 'POCARI SWEAT, PT AMARTA INDAH OTSUKA',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'PO00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 339,
            'bp_code' => 'PO00002',
            'bp_name' => 'POU YUEN INDONESIA, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => '105/HP-PKS-RSCK/X/2021',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 340,
            'bp_code' => 'PR00016',
            'bp_name' => 'PRIMA SARANA JASA QQ SINAR MAS MSIG LIFE, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks prima sarana jasa sinar mas',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 341,
            'bp_code' => 'PR00001',
            'bp_name' => 'PRIMA SARANA JASA, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '09/HP-PKS-RSCK/III/2017',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 342,
            'bp_code' => 'PR00002',
            'bp_name' => 'PRODIA WIDYAHUSADA, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'PR00002-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 343,
            'bp_code' => 'PR00003',
            'bp_name' => 'PROFESIONAL HEALTH INDONESIA, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'PR00003-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 344,
            'bp_code' => 'PR00004',
            'bp_name' => 'PRUDENTIAL LIFE - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 345,
            'bp_code' => 'PR00006',
            'bp_name' => 'PRUDENTIAL LIFE ASSURANCE, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'PR00006-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 346,
            'bp_code' => 'PR00013',
            'bp_name' => 'PRUDENTIAL SHARIA LIFE ASSURANCE, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'mou belum ada',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 347,
            'bp_code' => 'AN00001',
            'bp_name' => 'PT ANGKASA PURA II PERSERO (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 348,
            'bp_code' => 'PT00002',
            'bp_name' => 'PT. MULTIBRATA ANUGERAH UTAMA',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'PT00002-01 belum ada pks',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 349,
            'bp_code' => 'PT00003',
            'bp_name' => 'PT. HINO MOTORS MANUFACTURING INDONESIA',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'PT00003-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 350,
            'bp_code' => 'PU00001',
            'bp_name' => 'PULCRA CHEMICALS INDONESIA, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'PU00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 351,
            'bp_code' => 'PU00007',
            'bp_name' => 'PUTRI DAYA USAHATAMA, PT (COB BPJS KESEHATAN)',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'putri daya usahatama perpanjangan',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 352,
            'bp_code' => 'QU00001',
            'bp_name' => 'QUANTUM INFRA SOLUSINDO, PT (MEDINFRAS)',
            'bp_type' => 'Tenant',
            'bp_scheme' => 'Corporate',
            'bp_contract' => '023/PKS-RSCK/XII/2020',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 353,
            'bp_code' => 'RA00001',
            'bp_name' => 'RADANA BHASKARA FINANCE, TBK PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'RA00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 354,
            'bp_code' => 'RA00010',
            'bp_name' => 'RADIANT UTAMA INTERINSCO, TBK PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pkd radiant admedika payor',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 355,
            'bp_code' => 'RA00015',
            'bp_name' => 'RAILINK, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks railink admedika',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 356,
            'bp_code' => 'RA00002',
            'bp_name' => 'RAMAYANA, ASURANSI  PT - ADMEDIKA',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '033/HP-PKS-RSCK/IX/2018',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 357,
            'bp_code' => 'RE00001',
            'bp_name' => 'RECSALOG GEOPRIMA',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'RE00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 358,
            'bp_code' => 'RE00002',
            'bp_name' => 'RELIANCE INDONESIA ASURANSI , PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => '317/00/RS/IX/08',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 359,
            'bp_code' => 'RE00007',
            'bp_name' => 'RELIANCE INDONESIA ASURANSI , PT (ADMEDIKA)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '317/00/RS/IX/08',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 360,
            'bp_code' => 'RS00096',
            'bp_name' => 'RS AVISENA',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '046/HP-PKS-RSCK/XI/2022',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 361,
            'bp_code' => 'RS00001',
            'bp_name' => 'RS CAHYA KAWALUYAN',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'RS00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 362,
            'bp_code' => 'RS00002',
            'bp_name' => 'RS CAHYA KAWALUYAN (KARYAWAN)',
            'bp_type' => 'TGRS',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'RS00002-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 363,
            'bp_code' => 'RS00004',
            'bp_name' => 'RS DUSTIRA',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'RS00004-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 364,
            'bp_code' => 'RS00014',
            'bp_name' => 'RS IMC (INDRA MEDICAL CENTER)',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '002/HP-PKS-RSCK/I/2022',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 365,
            'bp_code' => 'RS00005',
            'bp_name' => 'RS KARISMA CIMAREME',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'RS00005-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 366,
            'bp_code' => 'RS00057',
            'bp_name' => 'RS MELINDA 2',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '095/HP-ADD-PKS-RSCK/VIII/2021',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 367,
            'bp_code' => 'RS00006',
            'bp_name' => 'RS MITRA ANUGRAH LESTARI (RS MAL)',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => '043/HP-PKS-RSCK/X/2022',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 368,
            'bp_code' => 'RS00090',
            'bp_name' => 'RS MITRA KASIH',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'utk event pruride',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 369,
            'bp_code' => 'RS00084',
            'bp_name' => 'RS SEKAR KAMULYAN',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '010/PKS-RSCK/IV/2022',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 370,
            'bp_code' => 'RS00007',
            'bp_name' => 'RS ST. BORROMEUS',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '021/HP-PKS-RSCK/V/2022',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 371,
            'bp_code' => 'RS00015',
            'bp_name' => 'RS ST. YUSUP',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '8/7/2021',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 372,
            'bp_code' => 'RS00066',
            'bp_name' => 'RSIA KARTINI',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '083/HP-PKS-RSCK/VII/2021',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 373,
            'bp_code' => 'RS00008',
            'bp_name' => 'RSU KASIH BUNDA',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'RS00008-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 374,
            'bp_code' => 'RS00003',
            'bp_name' => 'RSUD CIBABAT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'RS00003-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 375,
            'bp_code' => 'RS00009',
            'bp_name' => 'RSUD CIKALONG WETAN',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => '085/HP-PKS-RSCK/VIII/2021',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 376,
            'bp_code' => 'RS00083',
            'bp_name' => 'RSUP DR HASAN SADIKIN BANDUNG',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '003/HP-PKS-RSCK/I/2022',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 377,
            'bp_code' => 'IK00001',
            'bp_name' => 'RUMAH MEBEL NUSANTARA, PT (IKEA INDONESIA)',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'belum ada pks',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 378,
            'bp_code' => 'SA00018',
            'bp_name' => 'SAKA ENERGI INDONESIA, PGN SEI, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks admedika saka sei',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 379,
            'bp_code' => 'SA00017',
            'bp_name' => 'SAKA INDONESIA PANGKAH LIMITED (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks admedika saka',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 380,
            'bp_code' => 'SA00001',
            'bp_name' => 'SAMSUNG TUGU, ASURANSI - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'SA00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 381,
            'bp_code' => 'SA00013',
            'bp_name' => 'SANTOSA HOSPITAL BANDUNG CENTRAL (SHBC)',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '093/HP-ADD- PKS-RSCK/VIII/2021',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 382,
            'bp_code' => 'SA00002',
            'bp_name' => 'SATYA PARAHYANGAN RESORT / MASON PINE HOTEL',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'SA00002-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 383,
            'bp_code' => 'SE00012',
            'bp_name' => 'SECURINDO PACKATAMA INDONESIA, PT (SECURE PARKING)-NON USAHA',
            'bp_type' => 'Tenant',
            'bp_scheme' => 'Corporate',
            'bp_contract' => '067/SPI.RO.BDG-CAK-KTR/I/21',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 384,
            'bp_code' => 'SE00014',
            'bp_name' => 'SECURINDO PACKATAMA INDONESIA, PT (SECURE PARKING)-SEWA',
            'bp_type' => 'Tenant',
            'bp_scheme' => 'Standard',
            'bp_contract' => '-',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 385,
            'bp_code' => 'SE00001',
            'bp_name' => 'SEKAWAN-ASURANSI HARTA AMAN, PT - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 386,
            'bp_code' => 'SE00002',
            'bp_name' => 'SEQUIS FINANCIAL (GROUP) - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 387,
            'bp_code' => 'SE00003',
            'bp_name' => 'SEQUISLIFE, ASURANSI JIWA - ADMEDIKA',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '045/HP-PKS-RSCK/III/2019',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 388,
            'bp_code' => 'SH00001',
            'bp_name' => 'SHOPEE INTERNATIONAL INDONESIA, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks admedika shopee',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 389,
            'bp_code' => 'SI00001',
            'bp_name' => 'SILOAM CARE-ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'SI00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 390,
            'bp_code' => 'SI00003',
            'bp_name' => 'SINAR MAS ASURANSI (HEALTH & PERSONAL LINES), PT - ADMEDIKA',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '018/HP-ADD-RSCK/X/2019',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 391,
            'bp_code' => 'SI00002',
            'bp_name' => 'SINAR MAS ASURANSI, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '018/HP-ADD-RSCK/X/2019',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 392,
            'bp_code' => 'SI00004',
            'bp_name' => 'SINAR MAS MSIG ASURANSI JIWA, PT - ADMEDIKA',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'SI00004-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 393,
            'bp_code' => 'SI00005',
            'bp_name' => 'SINCUNG LAJU CITRA JAYA, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'SI00005-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 394,
            'bp_code' => 'SK00001',
            'bp_name' => 'SKK MIGAS BP BERAU,LTD - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 395,
            'bp_code' => 'SM00002',
            'bp_name' => 'SMA TRINITAS',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'belum ada pks sma trinitas',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 396,
            'bp_code' => 'SM00001',
            'bp_name' => 'SMILE TRAIN',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'belum ada pks SM00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 397,
            'bp_code' => 'SN00001',
            'bp_name' => 'SNOGEN INDONESIA, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'SN00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 398,
            'bp_code' => 'SO00003',
            'bp_name' => 'SOLUSI ENERGY NUSANTARA, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'Pks Admedika Solusi',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 399,
            'bp_code' => 'SO00001',
            'bp_name' => 'SOMPO INSURANCE INDONESIA, PT - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 400,
            'bp_code' => 'SO00004',
            'bp_name' => 'SORIKMAS MINING, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks admedika sorikmas',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 401,
            'bp_code' => 'SO00002',
            'bp_name' => 'SOS INTERNATIONAL ASIH EKA ABADI, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '07/HP-RSCK/III/2017',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 402,
            'bp_code' => 'ST00001',
            'bp_name' => 'STAR ENERGY',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'ST00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 403,
            'bp_code' => 'SU00001',
            'bp_name' => 'SUMBER CIPTA MULTINIAGA, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'SU00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 404,
            'bp_code' => 'SU00002',
            'bp_name' => 'SUMBER CIPTA MULTINIAGA, PT - COB BPJS',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'SU00002-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 405,
            'bp_code' => 'SU00003',
            'bp_name' => 'SUN LIFE FINANCIAL INDONESIA, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'SU00003-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 406,
            'bp_code' => 'SU00004',
            'bp_name' => 'SUN LIFE FINANCIAL INDONESIA - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 407,
            'bp_code' => 'KS00002',
            'bp_name' => 'SUNDAY INSURANCE INDONESIA, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks admedika ksk insurance',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 408,
            'bp_code' => 'SU00005',
            'bp_name' => 'SUPER UNGGAS JAYA, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '022/ADD-RSCK/XII/2016',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 409,
            'bp_code' => 'SU00016',
            'bp_name' => 'SUPPLIER',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '-',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 410,
            'bp_code' => 'SU00018',
            'bp_name' => 'SUSTER-SUSTER CINTAKASIH CAROLUS BORROMEUS - BIARA SANTO BORROMEUS',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'belum ada pks suster biara borromeus',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 411,
            'bp_code' => 'SU00017',
            'bp_name' => 'SUWANTORO-NON USAHA',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '-',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 412,
            'bp_code' => 'SW00001',
            'bp_name' => 'SWAKARYA INSAN MANDIRI ( SIM ), PT BURSA EFEK INDONESIA (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks admedika swakarya',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 413,
            'bp_code' => 'SW00002',
            'bp_name' => 'SWISSTEX NARATAMA INDONESIA, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks Swisstex Alkindo',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 414,
            'bp_code' => 'SY00001',
            'bp_name' => 'SYNTECH MITRA INTEGRASI, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'SY00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 415,
            'bp_code' => 'TA00009',
            'bp_name' => 'TAH SUNG HUNG, PT-NON USAHA',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '023/HP-PKS-RSCK/VI/2022',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 416,
            'bp_code' => 'TA00001',
            'bp_name' => 'TAKAFUL KELUARGA ASURANSI, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '026/HP-PKS-RSCK/X/2017',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 417,
            'bp_code' => 'TA00005',
            'bp_name' => 'TAKAFUL KELUARGA ASURANSI, PT - ADMEDIKA',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '026/HP-PKS-RSCK/X/2017',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 418,
            'bp_code' => 'TA00002',
            'bp_name' => 'TASPEN, PT- ADMEDIKA PAYOR',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'TA00002-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 419,
            'bp_code' => 'TE00001',
            'bp_name' => 'TELEMEDIA DINAMIKA SARANA, PT - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'TE00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 420,
            'bp_code' => 'TE00002',
            'bp_name' => 'TELKOM MEDIKA, PT - ADMEDIKA',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '021/HP-PKS-RSCK/IX/2017',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 421,
            'bp_code' => 'TH00002',
            'bp_name' => 'THE JAYAKARTA HOTEL BANDUNG',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks hotel jayakarta',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 422,
            'bp_code' => 'TH00001',
            'bp_name' => 'THE JAYAKARTA HOTEL BANDUNG COB BPJS KESEHATAN',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '042/HP-PKS-RSCK/XI/2018',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 423,
            'bp_code' => 'TI00004',
            'bp_name' => 'TIANYOU JINGTIE ENGINEERING CONSULTING CO., LTD',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks tianyou',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 424,
            'bp_code' => 'TI00001',
            'bp_name' => 'TIKI JALUR NUGRAHA EKAKURIR, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'TI00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 425,
            'bp_code' => 'E-00001',
            'bp_name' => 'TIRTA MEDICAL CENTRE',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '019/HP-PKS-RSCK/VII/2017',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 426,
            'bp_code' => 'TO00001',
            'bp_name' => 'TOKIO MARINE LIFE INSURANCE - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 427,
            'bp_code' => 'TO00002',
            'bp_name' => 'TOKOPEDIA - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'TO00002-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 428,
            'bp_code' => 'TO00036',
            'bp_name' => 'TOKYU CONSTRUCTION INDONESIA, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks tokyu 2023',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 429,
            'bp_code' => 'TO00003',
            'bp_name' => 'TOTAL BANGUN PERSADA, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '026/HP-PKS-RSCK/XI/2019',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 430,
            'bp_code' => 'TR00009',
            'bp_name' => 'TRAKINDO UTAMA, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'PKS TRAKINDO 2023',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 431,
            'bp_code' => 'TR00005',
            'bp_name' => 'TRANSCOSMOSINDONESIA, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks admedika transcosmos',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 432,
            'bp_code' => 'TR00001',
            'bp_name' => 'TRITUNGGAL MANDIRI SOLUSINDO, PT',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'TR00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 433,
            'bp_code' => 'TU00001',
            'bp_name' => 'TUGU KRESNA PRATAMA - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 434,
            'bp_code' => 'TU00003',
            'bp_name' => 'TUGU PRATAMA INDONESIA, PT - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 435,
            'bp_code' => 'UN00006',
            'bp_name' => 'UNIVERSITAS KRISTEN KRIDA WACANA, (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks univ kristen krida admedika',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 436,
            'bp_code' => 'ST00005',
            'bp_name' => 'UNIVERSITAS SANTO BORROMEUS',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'belum ada pks stikes',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 437,
            'bp_code' => 'ST00006',
            'bp_name' => 'UNIVERSITAS SANTO BORROMEUS * (NON-USAHA)',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => '-',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 438,
            'bp_code' => 'UN00001',
            'bp_name' => 'UNPAR - YAYASAN UNIVERSITAS KATOLIK PARAHYANGAN',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'UN00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 439,
            'bp_code' => 'UN00002',
            'bp_name' => 'UNPAR - YAYASAN UNIVERSITAS KATOLIK PARAHYANGAN - COB BPJS',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => '113/HP-PKS-RSCK/XII/2021',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 440,
            'bp_code' => 'VA00001',
            'bp_name' => 'VALE OIL & GAS - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'VA00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 441,
            'bp_code' => 'VE00003',
            'bp_name' => 'VENDING MACHINE INDONESIA, PT (VM)-NON USAHA',
            'bp_type' => 'Tenant',
            'bp_scheme' => 'Standard',
            'bp_contract' => '095/HP-PKS-RSCK/VIII/2021',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 442,
            'bp_code' => 'VI00001',
            'bp_name' => 'VICTORIA INSURANCE PCVICGR, PT (ADMEDIKA PAYOR)',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 443,
            'bp_code' => 'VM00001',
            'bp_name' => 'VM INDONESIA, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'VM00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 444,
            'bp_code' => 'YA00001',
            'bp_name' => 'YAKES PERTAMINA - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'YA00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 445,
            'bp_code' => 'YA00002',
            'bp_name' => 'YAMAHA INDONESIA MOTOR MANUFACTURING, PT',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'YA00002-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 446,
            'bp_code' => 'YA00003',
            'bp_name' => 'YAYASAN BINA NUSANTARA (BINUS) - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 447,
            'bp_code' => 'YA00004',
            'bp_name' => 'YAYASAN PARAHYANGAN SATYA',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'YA00004-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 448,
            'bp_code' => 'YA00008',
            'bp_name' => 'YAYASAN PERGURUAN TINGGI KRISTEN MARANATHA',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '012/HP-PKS-RSCK/III/2023',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 449,
            'bp_code' => 'YA00009',
            'bp_name' => 'YAYASAN PERGURUAN TINGGI KRISTEN MARANATHA, COB BPJS KESEHATAN',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'pks maranatha cob 012/HP-PKS-RSCK/III/2023',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 450,
            'bp_code' => 'YA00005',
            'bp_name' => 'YAYASAN RS LNG BADAK - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'YA00005-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 451,
            'bp_code' => 'YA00006',
            'bp_name' => 'YAYASAN SALIB SUCI',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'YA00006-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 452,
            'bp_code' => 'YK00001',
            'bp_name' => 'YKP BANK JABAR BANTEN (BJB)',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '008/AD-HP-RSCK/II/2021',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 453,
            'bp_code' => 'YK00003',
            'bp_name' => 'YKP BANK JABAR BANTEN (BJB) PENSIUNAN BANK',
            'bp_type' => 'Perusahaan',
            'bp_scheme' => 'Standard',
            'bp_contract' => '006/HP-PKS-RSCK/II/2023',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 454,
            'bp_code' => 'JA00006',
            'bp_name' => 'ZURICH ASURANSI DINAMIKA, TBK PT (ZAI)  JAVA SMARTINDO - MEDICILIN',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => 'JA00006-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 455,
            'bp_code' => 'ME00003',
            'bp_name' => 'ZURICH ASURANSI INDONESIA, PT (ZAI) - MEDICILLIN',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => '09/HP-ADD-PK-RSCK/VIII/2021',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 456,
            'bp_code' => 'ME00024',
            'bp_name' => 'ZURICH ASURANSI INDONESIA, PT (ZAI) (ADMEDIKA) - MEDICILLIN',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Standard',
            'bp_contract' => '520/PKS/AdMedika/IV/2007',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('business_partners')->insert([
            'bp_ucode' => Str::random(20),
            'bp_order' => 457,
            'bp_code' => 'ZU00001',
            'bp_name' => 'ZURICH LIFE - ADMEDIKA PAYOR',
            'bp_type' => 'Asuransi',
            'bp_scheme' => 'Corporate',
            'bp_contract' => 'ZU00001-01',
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
