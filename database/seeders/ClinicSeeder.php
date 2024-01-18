<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ClinicSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'K20001',
            'cl_name' => 'K 2 I A - PAGI',
            'cl_order' => 1,
            'cl_active' => 0,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'KK002',
            'cl_name' => 'K 2 I A - SORE',
            'cl_order' => 2,
            'cl_active' => 0,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'KLI001',
            'cl_name' => 'KLINIK B.ORTHO - PAGI',
            'cl_order' => 3,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'KLI020',
            'cl_name' => 'KLINIK B.ORTHO - SORE',
            'cl_order' => 4,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'BED002',
            'cl_name' => 'KLINIK BEDAH - PAGI',
            'cl_order' => 5,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'BED004',
            'cl_name' => 'KLINIK BEDAH - SORE',
            'cl_order' => 6,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'BED001',
            'cl_name' => 'KLINIK BEDAH ANAK - PAGI',
            'cl_order' => 7,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'BED003',
            'cl_name' => 'KLINIK BEDAH ANAK - SORE',
            'cl_order' => 8,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'KLI009',
            'cl_name' => 'KLINIK BEDAH MULUT - PAGI',
            'cl_order' => 9,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'KLI027',
            'cl_name' => 'KLINIK BEDAH MULUT - SORE',
            'cl_order' => 10,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'KLI002',
            'cl_name' => 'KLINIK BEDAH SYARAF - PAGI',
            'cl_order' => 11,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'KLI021',
            'cl_name' => 'KLINIK BEDAH SYARAF - SORE',
            'cl_order' => 12,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'KLI010',
            'cl_name' => 'KLINIK BEDAH UROLOGI - PAGI',
            'cl_order' => 13,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'KLI028',
            'cl_name' => 'KLINIK BEDAH UROLOGI - SORE',
            'cl_order' => 14,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'KLI015',
            'cl_name' => 'KLINIK DOTS',
            'cl_order' => 15,
            'cl_active' => 0,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'FIS001',
            'cl_name' => 'KLINIK FISIOLOGI KLINIS - PAGI',
            'cl_order' => 16,
            'cl_active' => 0,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'FIS003',
            'cl_name' => 'KLINIK FISIOLOGI KLINIS - SORE',
            'cl_order' => 17,
            'cl_active' => 0,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'GIG001',
            'cl_name' => 'KLINIK GIGI - PAGI',
            'cl_order' => 18,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'GIG003',
            'cl_name' => 'KLINIK GIGI - SORE',
            'cl_order' => 19,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'GIG002',
            'cl_name' => 'KLINIK GIGI ANAK - PAGI',
            'cl_order' => 20,
            'cl_active' => 0,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'GIG004',
            'cl_name' => 'KLINIK GIGI ANAK - SORE',
            'cl_order' => 21,
            'cl_active' => 0,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'KLI005',
            'cl_name' => 'KLINIK GIZI - PAGI',
            'cl_order' => 22,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'KLI032',
            'cl_name' => 'KLINIK GIZI - SORE',
            'cl_order' => 23,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'KLI006',
            'cl_name' => 'KLINIK HOMECARE',
            'cl_order' => 24,
            'cl_active' => 0,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'KLI012',
            'cl_name' => 'KLINIK JANTUNG - PAGI',
            'cl_order' => 25,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'KLI029',
            'cl_name' => 'KLINIK JANTUNG - SORE',
            'cl_order' => 26,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'KES001',
            'cl_name' => 'KLINIK KESEHATAN ANAK - PAGI',
            'cl_order' => 27,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'KES002',
            'cl_name' => 'KLINIK KESEHATAN ANAK - SORE',
            'cl_order' => 28,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'KLI016',
            'cl_name' => 'KLINIK KESEHATAN JIWA',
            'cl_order' => 29,
            'cl_active' => 0,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'OKU001',
            'cl_name' => 'KLINIK KESEHATAN KERJA',
            'cl_order' => 30,
            'cl_active' => 0,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'KUL001',
            'cl_name' => 'KLINIK KULIT KELAMIN - PAGI',
            'cl_order' => 31,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'KLI024',
            'cl_name' => 'KLINIK KULIT KELAMIN - SORE',
            'cl_order' => 32,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'KLI007',
            'cl_name' => 'KLINIK MATA - PAGI',
            'cl_order' => 33,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'KLI025',
            'cl_name' => 'KLINIK MATA - SORE',
            'cl_order' => 34,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'KLI011',
            'cl_name' => 'KLINIK MCU',
            'cl_order' => 35,
            'cl_active' => 0,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'OBS001',
            'cl_name' => 'KLINIK OBSTETRI & GINEKOLOGI - PAGI',
            'cl_order' => 36,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'OBS002',
            'cl_name' => 'KLINIK OBSTETRI & GINEKOLOGI - SORE',
            'cl_order' => 37,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'KLI014',
            'cl_name' => 'KLINIK PARU - PAGI',
            'cl_order' => 38,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'KLI031',
            'cl_name' => 'KLINIK PARU - SORE',
            'cl_order' => 39,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'PEN001',
            'cl_name' => 'KLINIK PENYAKIT DALAM - PAGI',
            'cl_order' => 40,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'PEN002',
            'cl_name' => 'KLINIK PENYAKIT DALAM - SORE',
            'cl_order' => 41,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'KLI008',
            'cl_name' => 'KLINIK PSIKIATRI - PAGI',
            'cl_order' => 42,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'KLI026',
            'cl_name' => 'KLINIK PSIKIATRI - SORE',
            'cl_order' => 43,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'KLI013',
            'cl_name' => 'KLINIK REHABILITASI MEDIK - PAGI',
            'cl_order' => 44,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'KLI030',
            'cl_name' => 'KLINIK REHABILITASI MEDIK - SORE',
            'cl_order' => 45,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'SPO001',
            'cl_name' => 'KLINIK SPESIALIS PROSTODONSIA',
            'cl_order' => 46,
            'cl_active' => 0,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'KLI003',
            'cl_name' => 'KLINIK SYARAF - PAGI',
            'cl_order' => 47,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'KLI022',
            'cl_name' => 'KLINIK SYARAF - SORE',
            'cl_order' => 48,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'KLI004',
            'cl_name' => 'KLINIK THT - PAGI',
            'cl_order' => 49,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'KLI023',
            'cl_name' => 'KLINIK THT - SORE',
            'cl_order' => 50,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'UMU001',
            'cl_name' => 'KLINIK UMUM - PAGI',
            'cl_order' => 51,
            'cl_bpjs' => 0,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('clinics')->insert([
            'cl_ucode' => Str::random(20),
            'cl_code' => 'UMU002',
            'cl_name' => 'KLINIK UMUM - SORE',
            'cl_order' => 52,
            'cl_bpjs' => 0,
            'cl_active' => 0,
            'created_by' => 'administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
