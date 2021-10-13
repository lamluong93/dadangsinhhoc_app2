<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhomNguonGen extends Model
{
    use HasFactory;

    protected $table = 'nhom_nguon_gen';

    protected $fillable = [
        'id',
        'phanloai',
        'nhomnguongen',
        'mota',
        'ghichu',
    ];
}
