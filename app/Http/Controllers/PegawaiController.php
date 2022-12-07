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
    

    public function tambahpegawai()
    {
        return view('pegawai.tambahPegawai');
    }


    public function simpanpegawai(Request $request)
    {
        $pegawai = Pegawai::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'tglLahir' => $request->tglLahir,
            'alamat' => $request->alamat,
            'noHp' => $request->noHp,
            'jabatan' => $request->jabatan,
            'cabang' => $request->cabang,
        ]);

        return redirect()->route('pegawai.home');
    }
}
