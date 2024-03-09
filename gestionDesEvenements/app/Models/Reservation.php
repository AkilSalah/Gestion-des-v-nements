<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'clinetId',
        'eventId',
        'status',
    ];
    public function client(){
        return $this->belongsTo(Client::class , 'clinetId');
    }
    public function event(){
        return $this->belongsTo(Event::class,'eventId');
    }
}
