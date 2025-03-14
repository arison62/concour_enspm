<?php
namespace App\Models;
use CodeIgniter\Model;

class DiplomeTypeModel extends Model {
    protected $table = 'DiplomeType';
    protected $allowedFields = ['nom', 'cycle_id'];
}