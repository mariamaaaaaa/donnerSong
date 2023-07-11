<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donneur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'age',
        'groupe',
        'tele',
        'ville',
        'photo',
        'poid',
        'q1',
        'q2',
        'q3',
    ];
}
