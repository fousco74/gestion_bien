<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use app\Models\image;
use App\Models\option;


class Bien extends Model
{

    protected $fillable=[
       'titre_b',
        'desc',
        'nb_piece',
        'nb_chambre',
        'adresse',
        'ville',
        'nb_etage',
        'surface',
        'prix',
        'code_postal',
        'sold'
     ];

   
    public function option() :  BelongsToMany{
        return $this->belongsToMany(option::class);
    }

    
    use HasFactory;
}
