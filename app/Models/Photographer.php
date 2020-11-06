<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photographer extends Model
{
    use HasFactory;
    protected $fillable = [
        'phone',
        'email',
        'bio',
        'profile_picture'
    ];
    protected $table ="photographers";
}
