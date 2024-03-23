<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Hector',
            'email' => 'hector@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'cedula'=>'0400000712',
            'address'=>'Av Perú',
            'phone'=>'0968000009',
            'role'=>'admin',
        ]);

        User::create([
            'name' => 'Hector Ferro',
            'email' => 'ferro@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'), // password
            'role' => 'paciente',
        ]);

        User::create([
            'name' => 'Gregory House',
            'email' => 'house@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'), // password
            'role' => 'doctor',
        ]);

        User::factory()
        ->count(50)
        ->state(['role' => 'paciente'])
        ->create();
    }
}
