<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Book extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $table ='app.books';


    protected $fillable = [
        'code',
        'date',
        'description',
        'published',
        'title',

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
