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
        'notes', 'create_date', 'update_date'];
	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'create_date';
	protected $updatedField         = 'update_date';
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
