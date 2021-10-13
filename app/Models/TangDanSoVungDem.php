<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TangDanSoVungDem extends Model
{
    use HasFactory;

    protected $table = 'tang_dan_so_vung_dem';

    protected $fillable = [
        'id',
        'danso',
        'tyletang',
        'diadiem_id',
        'thoigiankhaosat',
        'kybaocao',
        'tgbatdau',
        'tgketthuc',
        'huyen_id',
        'xa_id',
        'nguondulieu',
        'ghichu',
    ];
}
