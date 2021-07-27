<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cod extends Model
{
<<<<<<< HEAD
    //use HasFactory;
=======
    // use HasFactory;

>>>>>>> 10d0f1cfa9045a1ac502329b7e6cb1b43605c181
    protected $table = 'cods';

    protected $fillable = [
        'code',
        'description',
        'date',
        'is_aprovved',
        'tittle',
    ];
<<<<<<< HEAD
    //uno a uno
    function cod (){
        return $this-> belongsTo(relaled:cod::class);
}
// uno a varios

        /*function roses(){
            return $this->hasMany(related:Rose::class);
    
      { */

// varios a varios
/*function roses(){
     return $this-> belongsToMany(related:Rose::class);

}*





}
=======

    public function cod()
    {
        return $this->hasOne(Cod::class);
    }

    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_aprovved'=> 'boolean',
        'date' => 'datetime: Y-m-d'
   ];
}

<<<<<<< HEAD
// function authors()
// {
//     return $this->hasMany(Author::class);
// }

// function authors(){
//     return $this->belongsToMany(Author::class);
// }
// function projects(){
//     return $this->belongsToMany(Project::class);
// }

// ->withTimestamps();

// function setPasswordAttribute($value){
//     $this->attributes['password'] = Hash::make($value); 
// }
// function setCodeAttribute($value)
// {
//     $this->attributes['code'] = strtoupper($value);
// }
=======
>>>>>>> 10d0f1cfa9045a1ac502329b7e6cb1b43605c181
>>>>>>> a8e22a5b3ca8ca2ad281f1f503cea8cdbf3b3f48
