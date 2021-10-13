<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HopTacQuocTe extends Model
{
    use HasFactory;

    protected $table = 'hop_tac_quoc_te';

    protected $fillable = [
        'id',
        'ten',
        'tinhchat',
        'ngaybanhanh',
        'ngayhieuluc',
        'thoihanhieuluc',
        'tendoitacnn',
        'phancap',
        'danhnghia',
        'coquanchutri',
        'nguoiki',
        'thoigianketthuc',
        'tinhtrang',
        'noidungchinh',
        'noidung',
        'ghichu',
    ];

}
