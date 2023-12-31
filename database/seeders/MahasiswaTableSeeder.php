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
            'name' => 'SAMUEL GEVIN',
            'nilai_quiz' => 100,
            'nilai_tugas' => 100,
            'nilai_absensi' => 100,
            'nilai_praktek' => 100,
            'nilai_uas' => 100,
            'nilai_akhir' => 100,
            'grade' => 'A',
        ]);

        Mahasiswa::create([
            'name' => 'ASTO ARIANTO MIWANDA',
            'nilai_quiz' => 100,
            'nilai_tugas' => 100,
            'nilai_absensi' => 100,
            'nilai_praktek' => 100,
            'nilai_uas' => 100,
            'nilai_akhir' => 100,
            'grade' => 'A',
        ]);

        Mahasiswa::create([
            'name' => 'FAJRIANTO MANUNGKI',
            'nilai_quiz' => 100,
            'nilai_tugas' => 100,
            'nilai_absensi' => 100,
            'nilai_praktek' => 100,
            'nilai_uas' => 100,
            'nilai_akhir' => 100,
            'grade' => 'A',
        ]);

        Mahasiswa::create([
            'name' => 'SEKAR AYU DEWI KARTINI',
            'nilai_quiz' => 100,
            'nilai_tugas' => 100,
            'nilai_absensi' => 100,
            'nilai_praktek' => 100,
            'nilai_uas' => 100,
            'nilai_akhir' => 100,
            'grade' => 'A',
        ]);

        Mahasiswa::create([
            'name' => 'RIZKY ALDI SAPUTRA',
            'nilai_quiz' => 100,
            'nilai_tugas' => 100,
            'nilai_absensi' => 100,
            'nilai_praktek' => 100,
            'nilai_uas' => 100,
            'nilai_akhir' => 100,
            'grade' => 'A',
        ]);

        Mahasiswa::create([
            'name' => 'John Doe',
            'nilai_quiz' => 98,
            'nilai_tugas' => 98,
            'nilai_absensi' => 98,
            'nilai_praktek' => 98,
            'nilai_uas' => 98,
            'nilai_akhir' => 98,
            'grade' => 'A',
        ]);

        Mahasiswa::create([
            'name' => 'Ethan Parker',
            'nilai_quiz' => 85,
            'nilai_tugas' => 85,
            'nilai_absensi' => 85,
            'nilai_praktek' => 85,
            'nilai_uas' => 85,
            'nilai_akhir' => 85,
            'grade' => 'B',
        ]);

        Mahasiswa::create([
            'name' => 'Jane Smith',
            'nilai_quiz' => 72,
            'nilai_tugas' => 72,
            'nilai_absensi' => 72,
            'nilai_praktek' => 72,
            'nilai_uas' => 72,
            'nilai_akhir' => 72,
            'grade' => 'C',
        ]);

        Mahasiswa::create([
            'name' => 'Foo Bee',
            'nilai_quiz' => 72,
            'nilai_tugas' => 72,
            'nilai_absensi' => 72,
            'nilai_praktek' => 72,
            'nilai_uas' => 72,
            'nilai_akhir' => 72,
            'grade' => 'C',
        ]);

        Mahasiswa::create([
            'name' => 'Lily Bennett',
            'nilai_quiz' => 60,
            'nilai_tugas' => 60,
            'nilai_absensi' => 60,
            'nilai_praktek' => 60,
            'nilai_uas' => 60,
            'nilai_akhir' => 60,
            'grade' => 'D',
        ]);

    }
}
