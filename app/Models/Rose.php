<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rose extends Model
{
    //use HasFactory;
    
    protected $table ='roses';


    protected $attributes =['code',
'descripcion',
'date',
'title',
'is_approved',
   ];


   /*funtion project(){
       return $this-> belondTo (relaled:cod::class);
   }*/

    public function rose(){
    return$this->hasOne(related:Rose::class);

        }
      { 
    }
}
