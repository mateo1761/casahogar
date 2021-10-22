<?php

namespace App\Models;

use CodeIgniter\Model;

class Animalesmodelo extends Model
{
    protected $table = 'animales';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nombre', 'fotografia', 'edad', 'descripcion' , 'tipo'];
}