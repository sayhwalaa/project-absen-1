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
}
