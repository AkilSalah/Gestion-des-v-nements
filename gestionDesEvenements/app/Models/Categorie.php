<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Categorie extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'categorieName'
    ];
    protected $dates = ['deleted_at'];


    public function event(){
        return $this->hasMany(Event::class);
    }

}
