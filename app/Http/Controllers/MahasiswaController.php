<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'nilai_quiz' => 'required',
            'nilai_tugas' => 'required',
            'nilai_absensi' => 'required',
            'nilai_praktek' => 'required',
            'nilai_uas' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $nilaiQuiz = $request->input('nilai_quiz'); // 15%
        $nilaiTugas = $request->input('nilai_tugas'); // 20%
        $nilaiAbsensi = $request->input('nilai_absensi'); // 10%
        $nilaiPraktek = $request->input('nilai_praktek'); // 15%
        $nilaiUas = $request->input('nilai_uas'); // 30%

        $nilaiAkhir = ($nilaiQuiz + $nilaiTugas + $nilaiAbsensi + $nilaiPraktek + $nilaiUas) / 5;
        if ($nilaiAkhir <= 65) {
            $grade = 'D';
        } elseif ($nilaiAkhir <= 75) {
            $grade = 'C';
        } elseif ($nilaiAkhir <= 85) {
            $grade = 'B';
        } elseif ($nilaiAkhir <= 100) {
            $grade = 'A';
        } else {
            $grade = 'E';
        }

        $mahasiswa = new Mahasiswa();
        $mahasiswa->name = $request->input('name');
        $mahasiswa->nilai_quiz = $nilaiQuiz;
        $mahasiswa->nilai_tugas = $nilaiTugas;
        $mahasiswa->nilai_absensi = $nilaiAbsensi;
        $mahasiswa->nilai_praktek = $nilaiPraktek;
        $mahasiswa->nilai_uas = $nilaiUas;
        $mahasiswa->nilai_akhir = $nilaiAkhir;
        $mahasiswa->grade = $grade;
        $mahasiswa->save();

        return redirect()->route('mahasiswa.show')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        $countA = Mahasiswa::where('grade', 'A')
            ->count();
        $countB = Mahasiswa::where('grade', 'B')
            ->count();
        $countC = Mahasiswa::where('grade', 'C')
            ->count();
        $countD = Mahasiswa::where('grade', 'D')
            ->count();
        $data = [
            'A' => $countA,
            'B' => $countB,
            'C' => $countC,
            'D' => $countD,
        ];

        $listMahasiswa = Mahasiswa::all();

        return view('pages.show', compact('data'), ['listMahasiswa' => $listMahasiswa]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
