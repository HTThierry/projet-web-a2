<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class operating_sites extends Model
{
    use HasFactory;

    use softDeletes;

    protected $fillable = [
        'title',
        'description',
        'picture',
        'country',
        'city',
        'address',
        'contact_number',
        'enterprises_id_enterprise',
        'countries_id_country'
    ];
}
