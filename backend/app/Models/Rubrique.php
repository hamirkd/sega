<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubrique extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'societe_id',
        'code',
        'sens',
        'intitule',
        'type',
        'gain',
        'imprimable'
       ];
    
   public function getSocieteAttribute()
   {
       return Societe::find($this->societe_id);
   }
  
   protected $appends = ['societe'];
}
