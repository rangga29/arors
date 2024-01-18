<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use function now;
use function strtoupper;

class AppointmentSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('appointments')->insert([
            'sc_id' => 20,
            'ap_ucode' => Str::random(20),
            'ap_no' => '987654301',
            'ap_token' => strtoupper(Str::random(6)),
            'ap_queue' => 1,
            'ap_type' => 'UMUM',
            'ap_registration_time' => '07:30:00',
            'ap_appointment_time' => '08:00:00',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('appointments')->insert([
            'sc_id' => 20,
            'ap_ucode' => Str::random(20),
            'ap_no' => '987654302',
            'ap_token' => strtoupper(Str::random(6)),
            'ap_queue' => 2,
            'ap_type' => 'UMUM',
            'ap_registration_time' => '07:33:00',
            'ap_appointment_time' => '08:03:00',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('appointments')->insert([
            'sc_id' => 20,
            'ap_ucode' => Str::random(20),
            'ap_no' => '987654303',
            'ap_token' => strtoupper(Str::random(6)),
            'ap_queue' => 3,
            'ap_type' => 'UMUM',
            'ap_registration_time' => '07:36:00',
            'ap_appointment_time' => '08:06:00',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('appointments')->insert([
            'sc_id' => 30,
            'ap_ucode' => Str::random(20),
            'ap_no' => '987654304',
            'ap_token' => strtoupper(Str::random(6)),
            'ap_queue' => 1,
            'ap_type' => 'UMUM',
            'ap_registration_time' => '07:30:00',
            'ap_appointment_time' => '08:00:00',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('appointments')->insert([
            'sc_id' => 30,
            'ap_ucode' => Str::random(20),
            'ap_no' => '987654305',
            'ap_token' => strtoupper(Str::random(6)),
            'ap_queue' => 2,
            'ap_type' => 'UMUM',
            'ap_registration_time' => '07:33:00',
            'ap_appointment_time' => '08:03:00',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('umum_appointments')->insert([
            'ap_id' => 1,
            'uap_norm' => '00-23-83-18',
            'uap_name' => 'SILVESTER RANGGA SURYA N',
            'uap_birthday' => '1994-12-31',
            'uap_phone' => '081234567890',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('umum_appointments')->insert([
            'ap_id' => 2,
            'uap_norm' => '00-22-72-01',
            'uap_name' => 'PASIEN REGOL 1',
            'uap_birthday' => '2022-09-29',
            'uap_phone' => '081234567890',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('umum_appointments')->insert([
            'ap_id' => 3,
            'uap_norm' => '00-22-72-02',
            'uap_name' => 'PASIEN REGOL 2',
            'uap_birthday' => '2022-09-29',
            'uap_phone' => '081234567890',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('umum_appointments')->insert([
            'ap_id' => 4,
            'uap_norm' => '00-22-72-03',
            'uap_name' => 'PASIEN REGOL 11',
            'uap_birthday' => '2022-09-29',
            'uap_phone' => '081234567890',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('umum_appointments')->insert([
            'ap_id' => 5,
            'uap_norm' => '00-22-72-04',
            'uap_name' => 'PASIEN REGOL 3',
            'uap_birthday' => '2022-09-29',
            'uap_phone' => '081234567890',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //

        DB::table('appointments')->insert([
            'sc_id' => 20,
            'ap_ucode' => Str::random(20),
            'ap_no' => '987654306',
            'ap_token' => strtoupper(Str::random(6)),
            'ap_queue' => 4,
            'ap_type' => 'BPJS',
            'ap_registration_time' => '07:39:00',
            'ap_appointment_time' => '08:09:00',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('appointments')->insert([
            'sc_id' => 30,
            'ap_ucode' => Str::random(20),
            'ap_no' => '987654307',
            'ap_token' => strtoupper(Str::random(6)),
            'ap_queue' => 3,
            'ap_type' => 'BPJS',
            'ap_registration_time' => '07:36:00',
            'ap_appointment_time' => '08:06:00',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('appointments')->insert([
            'sc_id' => 30,
            'ap_ucode' => Str::random(20),
            'ap_no' => '987654308',
            'ap_token' => strtoupper(Str::random(6)),
            'ap_queue' => 4,
            'ap_type' => 'BPJS',
            'ap_registration_time' => '07:39:00',
            'ap_appointment_time' => '08:09:00',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('appointments')->insert([
            'sc_id' => 31,
            'ap_ucode' => Str::random(20),
            'ap_no' => '987654309',
            'ap_token' => strtoupper(Str::random(6)),
            'ap_queue' => 1,
            'ap_type' => 'BPJS',
            'ap_registration_time' => '15:30:00',
            'ap_appointment_time' => '16:00:00',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('appointments')->insert([
            'sc_id' => 31,
            'ap_ucode' => Str::random(20),
            'ap_no' => '987654310',
            'ap_token' => strtoupper(Str::random(6)),
            'ap_queue' => 2,
            'ap_type' => 'BPJS',
            'ap_registration_time' => '15:33:00',
            'ap_appointment_time' => '16:03:00',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('bpjs_kesehatan_appointments')->insert([
            'ap_id' => 6,
            'bap_norm' => '00-23-83-18',
            'bap_name' => 'SILVESTER RANGGA SURYA N',
            'bap_birthday' => '1994-12-31',
            'bap_phone' => '081234567890',
            'bap_bpjs' => '1234567890987654321',
            'bap_ppk1' => '123456789',
            'bap_skdp' => '123456',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('bpjs_kesehatan_appointments')->insert([
            'ap_id' => 7,
            'bap_norm' => '00-22-72-01',
            'bap_name' => 'PASIEN REGOL 1',
            'bap_birthday' => '2022-09-29',
            'bap_phone' => '081234567890',
            'bap_bpjs' => '23456789010987654321',
            'bap_ppk1' => '234567890',
            'bap_skdp' => '234567',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('bpjs_kesehatan_appointments')->insert([
            'ap_id' => 8,
            'bap_norm' => '00-22-72-02',
            'bap_name' => 'PASIEN REGOL 2',
            'bap_birthday' => '2022-09-29',
            'bap_phone' => '081234567890',
            'bap_bpjs' => '345678901210987654321',
            'bap_ppk1' => '345678901',
            'bap_skdp' => '345678',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('bpjs_kesehatan_appointments')->insert([
            'ap_id' => 9,
            'bap_norm' => '00-22-72-03',
            'bap_name' => 'PASIEN REGOL 11',
            'bap_birthday' => '2022-09-29',
            'bap_phone' => '081234567890',
            'bap_bpjs' => '4567890123210987654321',
            'bap_ppk1' => '456789012',
            'bap_skdp' => '456789',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('bpjs_kesehatan_appointments')->insert([
            'ap_id' => 10,
            'bap_norm' => '00-22-72-04',
            'bap_name' => 'PASIEN REGOL 3',
            'bap_birthday' => '2022-09-29',
            'bap_phone' => '081234567890',
            'bap_bpjs' => '56789012343210987654321',
            'bap_ppk1' => '567890123',
            'bap_skdp' => '567890',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
