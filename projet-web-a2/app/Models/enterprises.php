<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class enterprises extends Model
{
    use HasFactory;

    use softDeletes;
    protected $fillable = [
        'title',
        'description',
        'number_of_cesi_students',
        'pilot_confidence',
        'logo',
        'headquarter'
    ];
}
