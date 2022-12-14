<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;
    protected $table = 'presensi';
    protected $primaryKey ='id';
    protected $fillable = ['tglPresensi','jamMasuk','jamPulang','keterangan'];

    public function pengguna(){
        return $this->belongsTo(Pengguna::class); 
    }
}
