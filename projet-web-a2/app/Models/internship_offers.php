<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class internship_offers extends Model
{
    use HasFactory;

    use softDeletes;

    protected $fillable = [
        'title',
        'description',
        'duration',
        'unit',
        'remuneration_base',
        'number_of_place',
        'enterprises_id_enterprise'
    ];
}
