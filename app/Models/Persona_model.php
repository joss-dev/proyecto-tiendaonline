<?php

namespace App\Models;

use CodeIgniter\Model;

class Persona_model extends Model
{
    protected $table      = 'personas';
    protected $primaryKey = 'id_persona';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['persona_nombre', 'persona_apellido', 'persona_telefono', 'persona_correo', 'persona_pass', 'persona_estado', 'persona_dni', 'perfil_id'];

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