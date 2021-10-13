<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gioi extends Model
{
    use HasFactory;

    protected $table = 'gioi';

    protected $fillable = [
        'tenkhoahoc', 'tentiengviet', 'ghichu', 'trangthai', 'dongdanh_id',
    ];
}
