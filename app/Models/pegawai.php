<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';
    protected $primaryKey = 'nip';
<<<<<<< HEAD
    protected $fillable = ['nip' ,'nama', 'tglLahir', 'noHp','alamat', 'jabatan', 'cabang'];
=======
    protected $fillable = ['nip','nama', 'tglLahir', 'noHp', 'alamat', 'jabatan', 'cabang'];
>>>>>>> a10ad4e6b284df0fb81f66f18841026d0247c53f
    protected $guarded = [];
}
