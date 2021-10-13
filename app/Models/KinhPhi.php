<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KinhPhi extends Model
{
    use HasFactory;

    protected $table = 'kinh_phi';

    protected $fillable = [
        'id',
        'nguonkinhphi',
        'mucdichsudung',
        'tyle',
        'thoigian',
        'ghichu',
    ];

}
