<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'forenid',
        'referralkey',
        'sponserid',
        'mobile',
        'amount',
        'epin',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
     // return one level of child items
     public function itemsFuction()
     {
         return $this->hasMany(User::class, 'forenid');
     }
 
     // recursive relationship
     public function childItems()
     {
         return $this->hasMany(User::class, 'forenid')->with('itemsFuction');
     }

    
}
