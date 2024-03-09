<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'organisateurId',
        'title',
        'lieu',
        'categoryId',
        'date',
        'nbPlaces',
        'description',
        'image',  
        'status', 
        'acceptation'
    ];

    public function organisateur(){
        return $this->belongsTo(Organisateur::class,'organisateurId');
    }
    public function categories() {
        return $this->belongsTo(Categorie::class,'categoryId');
    }
    public function reservations() {
        return $this->hasMany(Reservation::class,'eventId');
    }

    }
