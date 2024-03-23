<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Specialty;

class SpecialtiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specialties = [
            'Neurología',
            'Quirúrgica',
            'Pediatría',
            'Cardiología',
            'Urología',
            'Medicina forense',
            'Dermatología'
        ];
        foreach ($specialties as $specialtyName) {
            Specialty::create([
                'name' => $specialtyName
            ]);
            // $specialty->users()->saveMany(
            //     User::factory(4)->state(['role' => 'doctor'])->make()
            // );
        }
        // User::find(3)->specialties()->save($specialty);
    }
}
