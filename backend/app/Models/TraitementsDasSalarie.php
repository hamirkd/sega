<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TraitementsDasSalarie extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'traitements_das_id',
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
        'irpp',
        'tcs',
        'fnh',
        'cfp',
        'brute',
        'avlog',"salaire_brut",
        'av_nour',
        'prim_impo',
        'brut_conge',
        'total_brut',
        'total',
        'primes_non_impo',
        'deb10',
        'deb11',
        'fin12',
        'fin13das',
        'nif_conjoint',
        'nom_conjoint',
        'prenom_conjoint',
        'nom_jeune_fille_conjoint',
        'profession_conjoint',
        'employeur_conjoint',
        'telephone_conjoint',
        'code_postal_conjoint',
        'ville_conjoint',
    ];
}
