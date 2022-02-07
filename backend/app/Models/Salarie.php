<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salarie extends Model
{
    use HasFactory;
    
   protected $fillable = [
    'societe_id',
    'matricule',
    'nif',
    'nom',
    'prenom',
    'emploi',
    'niveau',
    'nationalite',
    'age',
    'sexe',
    'enfants',
    'telephone',
    'code_postal',
    'ville',
    'emploi_occupe',
    'situation_familiale',
    'deb10',
    'deb11',
    'fin12',
    'fin13das',
   ];
   

   public function getSocieteAttribute()
   {
       return Societe::find($this->societe_id);
   }
  
   protected $appends = ['societe'];
}
