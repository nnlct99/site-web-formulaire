<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Societe extends Model
{
    protected $fillable = [
        'nom',
        'siret',
        'denomination' ,
        'email',
        'gerant',
    ];
}