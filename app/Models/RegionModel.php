<?php
namespace App\Models;
use CodeIgniter\Model;

class RegionModel extends Model{
    protected $table = 'Region';
    protected $allowedFields = ['nom'];
}