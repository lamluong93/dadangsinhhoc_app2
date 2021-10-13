<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lop extends Model
{
    use HasFactory;

    protected $table = 'lop';

    protected $fillable = [
        'tenkhoahoc', 'tentiengviet', 'nganh_id', 'ghichu', 'chuanphanloai', 'trangthai', 'dongdanh_id',
    ];
}
