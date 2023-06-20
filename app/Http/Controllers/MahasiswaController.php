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
            'nilai' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $nilai = $request->input('nilai');
        if ($nilai <= 65) {
            $grade = 'D';
        } elseif ($nilai <= 75) {
            $grade = 'C';
        } elseif ($nilai <= 85) {
            $grade = 'B';
        } elseif ($nilai <= 100) {
            $grade = 'A';
        } else {
            $grade = 'E';
        }

        $mahasiswa = new Mahasiswa();
        $mahasiswa->name = $request->input('name');
        $mahasiswa->nilai = $nilai;
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
