<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToChuc extends Model
{
    use HasFactory;

    protected $table = 'to_chuc';

    protected $fillable = [
        'id',
        'ten',
        'loai',
        'diachi',
        'lienhe',
        'email',
        'dienthoai',
        'mota',
        'trangthai',
    ];
}
