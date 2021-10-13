<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiNguonGen extends Model
{
    use HasFactory;

    protected $table='loai_nguon_gen';

    protected $fillable = [
        'id',
        'nhomnguongen_id',
        'ten',
        'mota',
        'ghichu',
    ];

    public $timestamps = false;
}
