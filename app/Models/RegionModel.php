<?php
namespace App\Models;
use CodeIgniter\Model;

class RegionModel extends Model{
    protected $table = 'Region';
    protected $allowedFields = ['nom'];
    public function findAllWithDepartements()
    {
        $regions = $this->findAll();
        $departementModel = new DepartementModel();
        
        foreach ($regions as &$region) {
            $region['departements'] = $departementModel->where('region_id', $region['id'])->findAll();
        }
        
        return $regions;
    }
}