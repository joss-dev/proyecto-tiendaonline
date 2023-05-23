<?php

namespace App\Models;

use CodeIgniter\Model;

class Producto_model extends Model
{
    protected $table      = 'productos';
    protected $primaryKey = 'id_producto';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false; //estaba en true

    protected $allowedFields = ['producto_nombre', 'producto_descripcion', 'producto_stock', 'producto_marca', 'producto_imagen'];

    // Dates
    protected $useTimestamps = true;// poner en true
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at'; //agregar a la tabla
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
