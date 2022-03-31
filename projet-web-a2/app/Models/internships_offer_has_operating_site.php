<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class internships_offer_has_operating_site extends Model
{
    use HasFactory;

    protected $fillable = [
        'internships_offer',
        'operating_site'
    ];

    public $timestamps = false;
}
