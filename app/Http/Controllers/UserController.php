<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    //menampilkan data
    function index(){
        $userData = User::get();
        return view('pages.user.index', compact('userData'));
    }

    // menambahkan data

    function store(Request $request)
    {
        // validasi data yang masuk
        $userData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'password' => 'required',
            

        ]);
        // simpan kedalam database
        User::create($userData);
        // mengalihkan ke halaman awal
        return redirect()->to('/user');
    }

    function create()
    {
        return view('pages.user.create');
    }

    // update data
    function update($id, Request $request)
    {
        // validasi data yang masuk
        $validasiuser = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'password' => 'required',
        ]);
        // simpan kedalam database
        User::find($id)->update($validasiuser);
        bcrypt($request->pasword);
        return redirect()->to('/user');
    }

    function edit($id)
    {
        $userData = User::find($id);
        return view('pages.user.edit', compact('user'));
    }

    // hapus data
    function delete($id)
    {
        $userdata = User::find($id);
        $userdata->delete();


        return redirect()->to('/user');
    }
}
