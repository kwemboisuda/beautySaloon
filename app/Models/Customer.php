<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    Use HasFactory;
    // protected $hidden = [
    //     'name',
    //     'email',
    //     'image',
    // ];
    protected $fillable = [
        'name', 
        'email',
        'image',
        
        // Add other fields you want to be mass-assignable
    ];

}
