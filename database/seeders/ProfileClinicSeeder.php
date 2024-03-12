<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileClinicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profile_clinics')->insert([
            'name' => 'Klinik Sehat',
            'address' => 'JL. Welirang 20A-C Kota Malang',
            'phone' => '0845454545455',
            'email' => 'cs@kliniksehat.id',
            'doctor_name' => 'Prof. Dr. ismail bin Mail',
            'clinic_code' => '0199200388PX',
        ]);
    }
}
