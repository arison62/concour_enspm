<?php
namespace App\Models;
use CodeIgniter\Model;

class CycleModel extends Model {
    protected $table = 'Cycle';
    protected $allowedFields = ['nom'];
}