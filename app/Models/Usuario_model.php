<?php

namespace App\Models;

use CodeIgniter\Model;

class Usuario_model extends Model
{
    protected $table      = 'usuarios';
    protected $primaryKey = 'id_usuario';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['usuario_nombre', 'usuario_apellido', 'usuario_telefono', 'usuario_correo', 'usuario_pass', 'usuario_estado', 'usuario_dni', 'perfil_id'];

    // Dates
    protected $useTimestamps = false;// poner en true
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