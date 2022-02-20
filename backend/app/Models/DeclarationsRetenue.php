<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeclarationsRetenue extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'mois',
        'annee',
        'societe_id',
        'mode_reglement',
        'numero_cheque',
        'iban',
        'bic',
        'date_versement',
        'date_signature',
        'lieu_signature',
        'irpp',
        'tcs',
        'fnh',
        'cfp',
       ];
    
   public function getSocieteAttribute()
   {
       return Societe::find($this->societe_id);
   }
  
   protected $appends = ['societe'];
}
