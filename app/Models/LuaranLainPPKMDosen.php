<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LuaranLainPPKMDosen extends Model
{
    use HasFactory;
    protected $table = "luaran_lain_ppkm_dosen";
    protected $primaryKey = 'pk_luaran_lain_ppkm_dosen';
    protected $fillable = [
        'id_luaran_lain_ppkm', 'id_dosen', 'utama'
    ];
}
