<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Bien;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class option extends Model
{
     protected $fillable=[
        'nom' 
     ];
    

    use HasFactory;
}
