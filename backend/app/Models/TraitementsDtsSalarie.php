<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TraitementsDtsSalarie extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'traitements_dts_id',
        'matricule',
        'nom',
        'prenom',
        'n_cnss',
        'n_cnamgs',
        'date_embauche',
        'date_depart',
        'tx_cnamgs',
        'tx_cnss',
        'bpcnss1',
        'bpcnam1',
        'bdplaf1',
        'njrcnss1',
        'njrcnam1',
        'bpcnss2',
        'bpcnam2',
        'bdplaf2',
        'njrcnss2',
        'njrcnam2',
        'bpcnss3',
        'bpcnam3',
        'bdplaf3',
        'njrcnss3',
        'njrcnam3',
        'code_etablissement',
       ];
}
