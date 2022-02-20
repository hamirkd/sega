<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeclarationsRetenuesSalarie extends Model
{
    use HasFactory;
    protected $fillable = [
        'declarations_retenue_id',
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
        'irpp',
        'tcs',
        'fnh',
        'cfp',
       ];
}
