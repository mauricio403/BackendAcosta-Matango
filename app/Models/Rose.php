<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rose extends Model
{
    //use HasFactory;
    
    protected $table ='roses';

    protected $attributes =[
        'code',
        'descripcion',
        'date',
        'title',
        'is_approved',
   ];

// uno a uno

     function rose(){
     return $this->hasOne(related:Rose::class);

        }
// uno a varios

       /* function roses()
        {
            return $this->hasMany(related:Rose::class);
    
      {
*/
// varios a varios

 /*function roses(){
  return $this-> belongsToMany(related:Rose::class);
 }*/

//mutators

function setCodeAttibute($value)
{
 $this-> attributes['code']=strtoupper ($values);

}

function setCodeAttibute($value)
{
 $this-> attributes['date']=strtoupper ($values);

// accessors
function getFullAttibute($value)
{
 return $this-> attributes['id']=strtoupper($this-> attributes['code']);

}