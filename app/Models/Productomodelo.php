<?php

namespace App\Models;

use CodeIgniter\Model;

class Productomodelo extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id';

    protected $allowedFields = ['producto', 'precio', 'foto', 'descripcion', 'tipo'];
}