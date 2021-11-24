<?php

namespace App\Models;

use App\Models\Classe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Eleve extends Model
{
    use HasFactory;
    
    protected  $fillable=[
        'nom',
        'prenom',
        'date_naiss',
        'sexe',
        'adresse',
        'tel',
        'classe_id',
    ];
    public function classes(){
        return $this->belongsTo(Classe::class,'classe_id');
    }
}