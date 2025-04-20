<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    //
    Use HasFactory;
    protected $hidden = [
        'name',
        'description',
        'image',
    ];
}
