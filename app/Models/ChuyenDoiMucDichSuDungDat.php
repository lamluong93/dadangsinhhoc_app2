<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChuyenDoiMucDichSuDungDat extends Model
{
    use HasFactory;

    protected $table = 'chuyen_doi_muc_dich_su_dung_dat';

    protected $fillable = [
        'tenduan',
        'mucdichchuyendoi',
        'loaidatchuyendoi',
        'dientich',
        'diadiem_id',
        'thoigian',
        'huyen',
        'xa',
        'nguondulieu',
        'ghichu',
    ];
}
