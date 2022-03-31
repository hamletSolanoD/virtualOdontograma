<?php
use App\Models\odontograma;



Schema::connection(env("DB_MONGO_CONECTION"))->create('cars', function ($collection) {
    $collection->unique('pacienteID');
 });