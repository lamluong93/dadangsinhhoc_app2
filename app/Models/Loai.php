<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loai extends Model
{
    use HasFactory; protected $table = 'loai';

    protected $fillable = [
        'tenkhoahoc', 'tentiengviet', 'maloai', 'chi_id', 'ghichu', 'chuanphanloai', 'trangthai', 'dongdanh_id',
    ];
}
