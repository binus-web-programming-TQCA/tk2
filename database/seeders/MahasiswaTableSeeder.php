<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed the users table with dummy data
        Mahasiswa::create([
            'name' => 'John Doe',
            'grade' => 'A',
            'nilai' => 98,
        ]);

        Mahasiswa::create([
            'name' => 'Ethan Parker',
            'grade' => 'B',
            'nilai' => 85,
        ]);

        Mahasiswa::create([
            'name' => 'Jane Smith',
            'grade' => 'C',
            'nilai' => 72,
        ]);

        Mahasiswa::create([
            'name' => 'Lily Bennett',
            'grade' => 'D',
            'nilai' => 60,
        ]);

    }
}
