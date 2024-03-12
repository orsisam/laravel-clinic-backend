<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ProfileClinic;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'User Admin',
            'email' => 'admin@example.com',
            'role' => 'admin',
            'password' => Hash::make('12345678'),
            'phone' => '0800000000',
        ]);

        ProfileClinic::factory()->create([
            'name' => 'Klinik Sehat',
            'address' => 'JL. Welirang 20A-C Kota Malang',
            'phone' => '0845454545455',
            'email' => 'cs@kliniksehat.id',
            'doctor_name' => 'Prof. Dr. ismail bin Mail',
            'clinic_code' => '0199200388PX',
        ]);

        // call other seeder
        $this->call([
            DoctorSeeder::class,
        ]);
    }
}
