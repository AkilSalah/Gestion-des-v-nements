<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'lieu',
        'categorie',
        'date',
        'nbPlaces',
        'description',
        'image',   
    ];

    public function organisateur(){
        return $this->belongsTo(Organisateur::class);
    }
    public function categories() {
        return $this->belongsTo(Categorie::class);
    }

    }
