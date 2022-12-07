<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index(){
        $pegawai = Pegawai::select('*')
        ->get();
        return view('pegawai.home', ['pegawai' => $pegawai]);
    }

    
    public function tambahPegawai(){
        return view('pegawai.form-daftar');
    }


    public function simpanPegawai(Request $request){
        $validateData = $request->validate([
            'nip' => 'required|size:10|unique:pegawai',
            'nama' => 'required|min:1|max:50',
            'tglLahir' => 'required',
            'alamat' => 'required',
            'noHp' => 'required',
            'jabatan' => 'required',
            'cabang' => 'required',
        ]);
        
        Pegawai::create($validateData);
        session()->flash('pesan',"Penambahan Data {$validateData['nama']} berhasil");
        return redirect(route('pegawai.index'));
    }
}