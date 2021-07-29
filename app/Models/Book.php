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
    public function author(){
        return $this->hasOne(Author::class);
    }
}
