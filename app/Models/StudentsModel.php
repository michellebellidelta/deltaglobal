<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentsModel extends Model
{
    protected $table = 'tbl_student';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $insertID = 0;
    protected $returnType = 'array';
    protected $useSoftDeletes   = true;

    protected $allowedFields = ['name', 'photo', 'street', 'number', 'neighborhood', 'city', 'complement', 'state', 'country', 'cep'];
    protected $validationRules = [
        'name' => 'required|min_length[5]',
        'street' => 'required|min_length[3]',
        'number' => 'required',
        'neighborhood' => 'required|min_length[3]',
        'city' => 'required|min_length[3]',
        'state' => 'required',
        'country' => 'required|min_length[3]',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
