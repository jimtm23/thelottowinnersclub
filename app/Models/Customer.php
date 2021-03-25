<?php

namespace App\Models;

use CodeIgniter\Model;

class Customer extends Model
{

	protected $table                = 'customers';
	protected $primaryKey           = 'user_id';
	protected $useAutoIncrement     = false;

	protected $returnType           = 'array';
	protected $useSoftDelete        = false;

    protected $allowedFields = ['user_id','first_name', 'middle_name', 'last_name', 'suffix',
        'status', 'addr_no', 'addr_bldg', 'addr_street', 'addr_state', 'addr_country',
		'contact_no',
        'addr_zipcode', 'id_type', 'id_photo', 'face_photo', 'attachment', 'notes'];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
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
