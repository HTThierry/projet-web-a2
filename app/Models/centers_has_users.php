<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class centers_has_users extends Model
{
    use HasFactory;

    protected $fillable = [
        'centers_id_center',
        'users_id_user'
    ];

    public $timestamps = false;
}
