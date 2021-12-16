<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Epin extends Model
{
   
    use HasFactory;
    protected $fillable = [
        'user_id',
        'pin',
        'status'
    ];
    /**
 * The attributes that should be hidden for arrays.
 *
 * @var array
 */
protected $hidden = [
    
];

/**
 * The attributes that should be cast to native types.
 *
 * @var array
 */
protected $casts = [
   
];
}
