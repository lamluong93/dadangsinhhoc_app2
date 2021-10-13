<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaiLieuThamKhaoBoDuLieu extends Model
{
    use HasFactory;

    protected $table = 'tai_lieu_tham_khao_bo_du_lieu';

    protected $fillable = [
        'bodulie_id', 'ten',
    ];
}
