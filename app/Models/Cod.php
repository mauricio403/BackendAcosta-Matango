<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cod extends Model
{
    //use HasFactory;
    protected $table = 'cods';

    protected $attributes = [
        'code',
        'description',
        'date',
        'is_aprovved',
        'tittle',
    ];
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