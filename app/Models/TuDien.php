<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TuDien extends Model
{
    use HasFactory;

    protected $table = 'tu_dien';

    protected $fillable = [
        'value',
        'type',
        'description',
    ];
}
