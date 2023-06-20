<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

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
        //
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

        return view('pages.show', compact('data'));
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
