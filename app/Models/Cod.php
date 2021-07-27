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

    protected $attributes = [
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

    public function cod(){
        return $this ->hasOne(Cod::class);
    }



}

>>>>>>> 10d0f1cfa9045a1ac502329b7e6cb1b43605c181
