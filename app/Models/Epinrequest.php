<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Epinrequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'userid',
        'amount',
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
