<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DasQuittance extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'societe_id',
        'annee',
        'mois',
        'montant',
        'date_quittance',
        'n_quittance',
        'nature',
       ];
    
//    public function getSocieteAttribute()
//    {
//        return Societe::find($this->societe_id);
//    }
  
//    protected $appends = ['societe'];
}
