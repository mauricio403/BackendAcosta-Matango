<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
   
    protected $table ='app.authors';

    protected $fillable = [
        'age',
        'email',
        'identification',
        'names',
        'phone',
    ];

    function book(){
        return $this->belongsTo(Book::class);
    }
   
}
