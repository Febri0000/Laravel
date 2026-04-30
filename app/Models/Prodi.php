<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    //
    protected $fillable = [
        'nama_prodi',
        'singkatan',
        'kaprodi',
        'fakultas_id'
    ];
}
