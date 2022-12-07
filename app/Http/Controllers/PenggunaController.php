<?php

namespace App\Http\Controllers;
use App\Models\pengguna;
use Illuminate\Http\Request;

class penggunaController extends Controller
{
    public function index(){
        $pengguna = Pengguna::select('*')
        ->get();
        return view('pengguna.home', ['pengguna' => $pengguna]);
    }

    public function tambahPengguna(){
        return view('pengguna.form-daftar');
    }


    public function simpanPengguna(Request $request){
        $validateData = $request->validate([
            'nip' => 'required|size:10|unique:pengguna',
            'nama' => 'required|min:1|max:50',
            'email' => 'required',
            'tglLahir' => 'required',
            'alamat' => 'required',
            'noHp' => 'required',
            'jabatan' => 'required',
            'cabang' => 'required',
        ]);
        
        Pengguna::create($validateData);
        session()->flash('pesan',"Penambahan Data {$validateData['nama']} berhasil");
        return redirect(route('pengguna.index'));
    }
}
