<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    use HasFactory;
     protected $table = 'properties';
     protected $fillable = [
            'name',
            'adresse',
            'city',
            'postalCode',
            'surface',
            'rooms',
            'yearsBuild',
            'type_id',
            'user_id'
        ];
}
