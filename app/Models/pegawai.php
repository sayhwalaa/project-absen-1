<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';
    protected $primaryKey = 'nip';
    protected $fillable = ['nip' ,'nama', 'tglLahir', 'noHp','alamat', 'jabatan', 'cabang'];
    protected $guarded = [];
}
