<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enterprises_has_business_sectors extends Model
{
    use HasFactory;

    protected $fillable = [
        'enterprises',
        'business_sectors'
    ];

    public $timestamps = false;
}
