<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    
    protected $fillable = [
        'title',
        'description',
        'img',
        'date',
        'featured',
    ];
    protected $table ="photos";
}
