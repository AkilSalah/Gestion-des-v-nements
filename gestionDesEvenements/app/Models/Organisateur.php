<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisateur extends Model
{
    use HasFactory;
    protected $fillable = [
        'idUser'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'idUser');
    }
    public function event(){
        return $this->hasMany(Event::class,'id');
    }
}
