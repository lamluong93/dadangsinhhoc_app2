<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nganh extends Model
{
    use HasFactory;

    protected $table = 'nganh';

    protected $fillable = [
        'tenkhoahoc', 'tentiengviet', 'gioi_id', 'ghichu', 'chuanphanloai', 'trangthai', 'dongdanh_id',
    ];
}
