<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChuongTrinhDeTaiDuAnKiemSoatSVNLXH extends Model
{
    use HasFactory;
    
    protected $table = 'chuong_trinh_de_tai_du_an_kiem_soat_svnlxh';

    protected $fillable = [
        'id',
        'ten',
        'noidung',
        'thoigianbatdau',
        'thoigianketthuc',
        'donvithuchien',
        'spchinh',
        'ghichu'
    ];
}
