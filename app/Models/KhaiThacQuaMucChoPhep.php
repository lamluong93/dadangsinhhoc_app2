<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhaiThacQuaMucChoPhep extends Model
{
    use HasFactory;

    protected $table = 'khai_thac_qua_muc_cho_phep';

    protected $fillable =[
        'phanloai',
        'sinhvatkhaithac',
        'bienphapkhaithac',
        'lopphukt',
        'dientichkt',
        'soluongsv',
        'donvitinhsoluong',
        'khoiluongsv',
        'donvitinhkhoiluong',
        'iucn',
        'cites',
        'sachdovietnam',
        'nghidinh64',
        'nghidinh06',
        'diadiem_id',
        'thoigian',
        'huyen_id',
        'xa_id',
        'nguondulieu',
        'ghichu',
    ];
}
