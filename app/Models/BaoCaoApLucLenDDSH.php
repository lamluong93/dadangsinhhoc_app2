<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaoCaoApLucLenDDSH extends Model
{
    use HasFactory;

    protected $table = 'bao_cao_ap_luc_len_ddsh';

    protected $fillable = [
        'id',
        'thongso_id',
        'soluong',
        'donvitinhsoluong',
        'khoiluong',
        'donvitinhkhoiluong',
        'dientich',
        'mota',
        'phancap',
        'tendonvi',
        'kybaocao',
        'thoigianbatdau',
        'thoigianketthuc',
        'ghichu',
        'nguondulieu'
    ];
}
