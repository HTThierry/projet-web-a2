<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contacts extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        'email',
        'enterprises_id_enterprise'
    ];

    public $timestamps = false;
}