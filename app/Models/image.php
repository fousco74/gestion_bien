<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Bien;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class image extends Model
{
    protected $fillable=[
        'nom_img' 
     ];

     public function bien():BelongsTo{
        return $this->belongsTo(Bien::class);

     }

     
    use HasFactory;
}
