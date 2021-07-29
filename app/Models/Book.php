<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table ='books';


    protected $fillable = [
        'code',
        'date',
        'description',
        'title',
        'published',

    ];

    protected $casts = [
        'published' => 'boolean'
    ];


    public function author(){
        return $this->hasMany(Author::class);
    }

    //mutators

    function setCodeAttribute($value){
        $this->attributes['code'] = strtoupper($value);
    }

    //accesors

    function getCodeAttribute(){
       return strtolower( $this->attributes['code']);
    }



}
