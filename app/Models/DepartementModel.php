<?php
namespace App\Models;
use CodeIgniter\Model;

class DepartementModel extends Model{

    protected $table = 'Departement';
    protected $allowedFields = ['nom', 'region_id'];
    
}