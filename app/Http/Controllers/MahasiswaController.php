<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = \App\Models\Mahasiswa::all();
        return view('mahasiswa', compact('data'));
    }

    public function storeajax(Request $request)
    {
        $mahasiswa = new \App\Models\Mahasiswa;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->nilai = $request->nilai ?? $request->kelas ?? '-';
        $mahasiswa->save();

        return response()->json($mahasiswa);
    }
    public function showajax($id)
    {
        $mahasiswa = \App\Models\Mahasiswa::find($id);
        return response()->json($mahasiswa);
    }
}