<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NguonGen extends Model
{
    use HasFactory;

    protected $table = 'nguon_gen';

    protected $fillable = [
        'id',
        'loainguongen_id',
        'ten',
        'tenthongthuong',
        'tendantoc',
        'tenkhoahoc',
        'dacdiem',
        'maso_qg',
        'masotinh',
        'tinhtrangluugiu',
        'tinhtrangnghiencuu',
        'tinhtrangsudung',
        'nguongoc',
        'xuatxu',
        'phuongthucluutru',
        'dientichluutru',
        'vatlieuditruyenluutru',
        'slvatlieuditruyen',
        'thoigianbatdauluugiu',
        'hinhthucbaoquan',
        'genquyhiem',
        'banchatditruyen',
        'tinhtrang',
        'bienphapbaoton',
        'khanangtiepcan',
        'quytrinhtiepcan',
        'genco_dk',
        'ghichu',
    ];
}
