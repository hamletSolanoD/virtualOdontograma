<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class odontograma extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'odontogramas';
    
    protected $fillable = [
        'pacienteID'
    ];
}
