<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoDuLieu extends Model
{
    use HasFactory;

    protected $table = 'bo_du_lieu';

    protected $fillable = [
        'tieude',
        'ngaycongbo',
        'ngonngu',
        'series',
        'tomtat',
        'thongtinbosung',
        'quyensohuutritue',
        'phanloai',
        'dophu',
        'websitelink',
        'logo_url',
        'trichdan',
        'motadialy',
        'tukhoa',
        'tukhoadongnghia',
        'ngaybatdau',
        'ngayketthuc',
        'dophuphanloai',
        'toadotay',
        'toadodong',
        'toadobac',
        'toadonam',
        'tenfilegoc',
        'tenfile',
        'tochuc_id',
        'diadiem',
        'loaibodulieu',
        'trangthai',
        'chuanphanloai',
    ];
}
