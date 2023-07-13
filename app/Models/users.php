<?php

namespace App\Models;

use App\Models\centers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class users extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'login',
        'password',
        'roles_id_role'
    ];

    public function centers()
    {
        return $this->belongsToMany(centers::class, 'centers_has_users','users_id_user','centers_id_center');
    }
}
