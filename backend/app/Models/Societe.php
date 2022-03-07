<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Societe extends Model
{
    use HasFactory;
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
    'code',
      'regime',
      'raison_sociale',
      'sigle',
      'rccm',
      'cnss',
      'contribuable',
      'statistique',
      'activite',
      'date_creation',
      'date_mise_service',
      'date_effet',
      'date_immatriculation',
      'adresse',
      'code_postal',
      'ville',
      'bp',
      'telephone',
      'fax',
      'email',
      'nif',
      'source_donnees',
      'code_residence',
      'adressen',
      'rue',
      'lieu_dit',
      'quartier',
      'arrondissement',
      'departement',
      'signataire',
      'province'
    ];
}