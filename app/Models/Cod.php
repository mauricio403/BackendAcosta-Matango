<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cod extends Model
{
    //use HasFactory;

    // use HasFactory;


    protected $table = 'cods';

    protected $fillable = [
        'code',
        'description',
        'date',
        'approved',
        'tittle',
    ];

    //uno a uno
    function cod (){
        return $this-> belongsTo(relaled:cod::class);
    };
};
