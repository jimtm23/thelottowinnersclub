<?php

namespace App\Models;

use CodeIgniter\Model;

class Orders extends Model
{

	protected $table                = 'orders';
	protected $primaryKey           = 'seq';
	protected $useAutoIncrement     = true;

	protected $returnType           = 'array';
	protected $useSoftDelete        = false;

    protected $allowedFields = ['seq','lucky_no', 'type', 'status',
        'notes', 'created_at', 'updated_at'];
	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField  		= 'created_at';
	protected $updatedField  		= 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];

	

}
