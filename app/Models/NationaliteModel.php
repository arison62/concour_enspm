<?php
namespace App\Models;
use CodeIgniter\Model;

class NationaliteModel extends Model{
    protected $table = 'Nationalite';
    protected $primaryKey  = 'id';
    protected $allowedFields = ['nom'];

}

