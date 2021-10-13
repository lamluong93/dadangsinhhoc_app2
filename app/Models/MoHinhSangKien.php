<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoHinhSangKien extends Model
{
    use HasFactory;

    protected $table = 'mo_hinh_sang_kien';

    protected $fillable = [
        'id', 'ten', 'hinhthuc', 'noidung', 'coquan_id', 'diadiemtochuc', 'tgbatdau', 'tgketthuc', 'ketquaapdung', 'ghichu',
    ];
}
