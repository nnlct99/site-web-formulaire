<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'telephone' ,
        'email',
        'objet',
        'message',
        'appointment'
    ];
}