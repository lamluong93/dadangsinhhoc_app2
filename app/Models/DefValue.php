<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DefValue extends Model
{
    use HasFactory;

    protected $fillable = [
        'tudien_id',
        'giatri'
    ];
}
