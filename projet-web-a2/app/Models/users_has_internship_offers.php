<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users_has_internship_offers extends Model
{
    use HasFactory;

    protected $fillable = [
        'users',
        'internships_offers'
    ];

    public $timestamps = false;
}
