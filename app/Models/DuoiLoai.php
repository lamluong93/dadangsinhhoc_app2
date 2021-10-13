<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DuoiLoai extends Model
{
    use HasFactory; protected $table = 'duoi_loai';

    protected $fillable = [
        'tenkhoahoc', 'tentiengviet', 'bacphanloai', 'loai_id', 'ghichu', 'chuanphanloai',
    ];
}
