<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TraitementsDts extends Model
{
    use HasFactory;
    protected $fillable = [
        'trimestre',
        'annee',
        'societe_id',
        'alloc_familiale',
        'ristourne',
        'autre_deduc',
        'precision',
        'avance',
        'reste',
        'numero_dts',
        'signataire',
        'qualite'
       ];
    
}
