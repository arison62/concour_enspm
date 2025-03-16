<?php
namespace App\Models;
use CodeIgniter\Model;

class CentreExamenModel extends Model {
    protected $table = 'CentreExamen';
    
    protected $allowedFields = [
       'id',
       'nom',
       'adresse'
    ];
}
