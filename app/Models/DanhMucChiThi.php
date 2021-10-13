<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhMucChiThi extends Model
{
    use HasFactory;

    protected $table = 'danh_muc_chi_thi';

    protected $fillable = [
        'id',
        'nhomct_id',
        'ten',
        'ghichu'
    ];
}
