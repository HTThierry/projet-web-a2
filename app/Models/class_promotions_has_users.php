<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class class_promotions_has_users extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_promotions_id_promotion',
        'users_id_user'
    ];

    public $timestamps = false;
}
