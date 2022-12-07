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
    // public function index(Request $request)
    // {
    //     $search = $request->search;
    //     $pegawaii = Pegawai::where('nip', 'LIKE', '%'. $search . '%')
    //     ->orWhere('nama', 'LIKE', '%'. $search . '%')
    //     ->orWhere('jabatan', 'LIKE', '%'. $search . '%')
    //     ->paginate(5);        
    //     return view('pegawai.home', ['pegawaii' => $pegawaii]);
    // }


    // public function create()
    // {
    //     return view('matakuliah.daftar');
    // }


    // public function store(Request $request)
    // {
    // $validateData = $request->validate([
    //     'kode'          => 'required|size:3|unique:mata_kuliahs',
    //     'matakuliah'    => 'required|min:3|max:50',
    //     'dosen'         => 'required',
    // ]);

    //     Matakuliah::create($validateData);
    //     return redirect('matakuliahs')->with('success', 'Data berhasil ditambah!');
    // }


    // public function show($matakuliah)
    // {
    //     //result = Mahasiswa::find($mahasiswa);
    //     $result = Matakuliah::findOrFail($matakuliah);
    //     return view ('matakuliah.show', ['matakuliah' => $result]);
    // }


    // public function edit(Matakuliah $matakuliah)
    // {
    //     return view('matakuliah.edit',['matakuliah' => $matakuliah]);
    // }


    // public function update(Request $request, Matakuliah $matakuliah)
    // {
    //     $validateData = $request->validate([
    //     'kode'          => 'required|size:3|unique:mata_kuliahs,kode,'.$matakuliah->id,
    //     'matakuliah'    => 'required|min:3|max:50',
    //     'dosen'         => 'required',
    //     ]);

    //     $matakuliah->update($validateData);
    //     return redirect()->route('mata_kuliahs.index', ['matakuliah'=>$matakuliah->id])
    //     ->with('success', "Data berhasil diedit!");
    // }


    // public function destroy(Matakuliah $matakuliah)
    // {
    //     $mahasiswa->delete();
    //     return redirect('mata_kuliahs')->with('success', "Data berhasil dihapus!");
    // }
    

    // public function login()
    // {
    //     return view('index');
    // }
}
