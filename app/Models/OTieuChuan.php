<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OTieuChuan extends Model
{
    use HasFactory;

    protected $table = 'o_tieu_chuan';

    protected $fillable = [
        'ten',
        'kichthuoc',
        'hinhdang',
        'vitri',
        'khonggian',
        'docao',
        'dosau',
        'diadiem_id',
    ];
}
