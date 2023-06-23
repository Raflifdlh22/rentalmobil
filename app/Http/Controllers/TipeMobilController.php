<?php

namespace App\Http\Controllers;

use App\Models\TipeMobil;
use Illuminate\Http\Request;

class TipeMobilController extends Controller
{
    // menampilkan data
    function index()
    {
        $tipeMobilData = TipeMobil::get();
        return view('pages.tipemobil.index', compact('tipeMobilData'));
    }
    
    // menambahkan data
    function store(Request $request)
    {
        //validasi data yang masuk
        $tipeMobilData = $request->validate([
            'tipe' => 'required',
        ]);
        // simpan kedalam database
        TipeMobil::create($tipeMobilData);
        // mengalihkan ke halaman awal
        return redirect()->to('/tipemobil');
    }

    function create()
    {
        return view('pages.tipeMobil.create');
    }

    // update data
    function update($id, Request $request)
    {
        //validasi data yang masuk
        $ValidasiTipeMobil = $request->validate([
            'tipe' => 'required',
        ]);
        // simpan kedalam database
        // $tipeMobilData = TipeMobil::find($id);
        // $tipeMobilData->update($ValidasiTipeMobil);
        TipeMobil::find($id)->update($ValidasiTipeMobil);
        // mengalihkan ke halaman awal
        return redirect()->to('/tipemobil');
    }

    function edit($id)
    {
        $tipeMobilData = TipeMobil::find($id);
        return view('pages.tipemobil.edit', compact('tipeMobilData'));
    }

    // hapus data
    function delete($id)
    {
        $tipeMobilData = TipeMobil::find($id);
        $tipeMobilData->delete();
        // TipeMobil::find($id)->delete($id);

        return redirect()->to('/tipemobil');
    }
}

