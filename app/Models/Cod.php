<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cod extends Model
{
    // use HasFactory;

    protected $table = 'cods';

    protected $attributes = [
        'code',
        'description',
        'date',
        'is_aprovved',
        'tittle',
    ];

    public function cod(){
        return $this ->hasOne(Cod::class);
    }



}

