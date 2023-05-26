<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobilController extends Controller
{
    protected $arrayMobil = [
        [
            'namaMobil' => 'Hijet',
            'merkMobil' => 'Daihatsu',
            'cc' => 1000,
        ],    
    ];
    public function index()
    {
        //datamobil : ketika session tidak kosong maka mereturn sebelah kiri
        // jiak kosong maka mereturn sebelah kanan
        $datamobil = session()->get('dataMobilBaru') ?? $this->arrayMobil;
        return view('mobil.index', compact('datamobil'));
    }
    function create(){
        return view('mobil.form');
    }
    function store(Request $request)
    {
        $namaMobil = $request->nama_mobil;
        $merkMobil = $request->merk_mobil;
        $cc = $request->cc;

        $dataMobilBaru = [
            'namamobil' => $namaMobil,
            'merkmobil' => $merkMobil,
            'cc' => $cc,
        ];
        
        array_push($this->arrayMobil, $dataMobilBaru);
        return redirect()->to('/mobil')->with('dataMobilBaru',$this->arrayMobil);
    }
}