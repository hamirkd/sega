<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TraitementsDas extends Model
{
    use HasFactory;
    protected $fillable = [
        'annee',
        'societe_id',
        'brut_presence',
        'av_eau_elec',
        'brut_conge',
        'prime_impo','av_nourriture',
        'prime_non_impo',
        'irpp',
        'tcs',
        'fnh',
    ];
}
