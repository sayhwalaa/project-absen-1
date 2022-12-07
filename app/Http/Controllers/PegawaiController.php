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
<<<<<<< HEAD
=======
    // public function index(Request $request)
    // {
    //     $search = $request->search;
    //     $pegawaii = Pegawai::where('nip', 'LIKE', '%'. $search . '%')
    //     ->orWhere('nama', 'LIKE', '%'. $search . '%')
    //     ->orWhere('jabatan', 'LIKE', '%'. $search . '%')
    //     ->paginate(5);        
    //     return view('pegawai.home', ['pegawaii' => $pegawaii]);
    // }


    public function create(){
        return view('pegawai.form-daftar');
    }


    public function store(Request $request){
        $pegawai = Pegawai::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'tglLahir' => $request->tglLahir,
            'alamat' => $request->alamat,
            'noHp' => $request->noHp,
            'jabatan' => $request->jabatan,
            'cabang' => $request->cabang,
        ]);
        
        Pegawai::create($validateData);
        session()->flash('pesan',"Penambahan Data {$validateData['nama']} berhasil");
        return redirect(route('pegawai.home'));
    }


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
>>>>>>> 79d0450863eca7af36946d1c56ca5bd46e3cbd00
    

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
