<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cod extends Model
{
    // use HasFactory;

    protected $table = 'cods';

    protected $fillable = [
        'code',
        'description',
        'date',
        'is_aprovved',
        'tittle',
    ];

    public function cod()
    {
        return $this->hasOne(Cod::class);
    }

    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_aprovved'=> 'boolean',
        'date' => 'datetime: Y-m-d'
   ];
}

// function authors()
// {
//     return $this->hasMany(Author::class);
// }

// function authors(){
//     return $this->belongsToMany(Author::class);
// }
// function projects(){
//     return $this->belongsToMany(Project::class);
// }

// ->withTimestamps();

// function setPasswordAttribute($value){
//     $this->attributes['password'] = Hash::make($value); 
// }
// function setCodeAttribute($value)
// {
//     $this->attributes['code'] = strtoupper($value);
// }
