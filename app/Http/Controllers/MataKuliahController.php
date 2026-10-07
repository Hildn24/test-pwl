<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    public function Index()
    {
        $data = [
            'title' => 'List Mata Kuliah',
            'mks' => Matakuliah::all(),
        ];
        return view('list_mk', $data);
    }

    public function Create()
    {
        return view('create_mk', ['title' => 'Create Mata Kuliah']);
    }

    public function Store(Request $request)
    {
        MataKuliah::create([
            'nama_mk' => $request->input('nama_mk'),
            'sks' => $request->input('sks'),
        ]);

        return redirect()->to('/matakuliah');
    }
}
