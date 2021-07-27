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
     * @var array
     */
    protected $fillable  =[
        'code',
        'descripcion',
        'date',
        'title',
        'is_approved',
     ];

    /**
     * The attributes that should be hidden for arrays.
     * @var array
     */
    protected $casts = [
        'is_approved' => 'boolean',
        'date' => 'datetime:Y-m-d',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    function setPasswordAttribute($value){
        $this->attributes['password'] = Hash::make($value); 
    }

    // uno a uno

    // function rose(){
   // return $this->hasOne(related:Rose::class);

}
// uno a varios
        /*function roses(){
            return $this->hasMany(related:Rose::class);
      { */
// varios a varios
function setCodeAttribute($value)
    {
        $this->attributes['code'] = strtoupper($value);
    }
    
// Accessors

}