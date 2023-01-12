<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactformModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'contact_form';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'name',
        'email',
        'number',
        'message',
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
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

    public function createContact($user_contact){
        $this->save([
            'name' => $user_contact['name'],
            'number' => $user_contact['number'],
            'email' => $user_contact['email'],
            'message' => $user_contact['message']
        ]);
        return [
            'id' => $this->getInsertID(),
            'name' => $user_contact['name']
        ];
    }
}

   