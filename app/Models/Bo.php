<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bo extends Model
{
    use HasFactory;

    protected $table= 'bo';

    protected $fillable = [
        'tenkhoahoc', 'tentiengviet', 'lop_id', 'ghichu', 'chuanphanloai', 'trangthai', 'dongdanh_id',
    ];
}
