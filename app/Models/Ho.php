<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ho extends Model
{
    use HasFactory; protected $table = 'ho';

    protected $fillable = [
        'tenkhoahoc', 'tentiengviet', 'bo_id', 'ghichu', 'chuanphanloai', 'trangthai', 'dongdanh_id',
    ];
}
