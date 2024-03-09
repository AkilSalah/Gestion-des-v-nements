<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'idUser'
    ];
    public function user(){
        return $this->belongsTo(User::class, 'idUser');
    }
    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'clinetId');
    }

}
