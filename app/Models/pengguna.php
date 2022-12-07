<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    use HasFactory;
    protected $table = 'pengguna';
    protected $primaryKey = 'nip';
    protected $fillable = ['nip', 'nama', 'email', 'tglLahir', 'alamat', 'noHp', 'jabatan'];
    protected $guarded = [];
}