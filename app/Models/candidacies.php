<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class candidacies extends Model
{
    use HasFactory;

    use softDeletes;

    protected $fillable = [
        'resume',
        'cover_letter',
        'step',
        'validation_sheet',
        'internship_contract',
        'internships_offer_id_internship_offer',
        'users_id_user'
    ];
}
