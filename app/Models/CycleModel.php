<?php
namespace App\Models;
use CodeIgniter\Model;

class CycleModel extends Model {
    protected $table = 'Cycle';
    protected $allowedFields = ['nom'];

    public function findAllWithDiplomeTypes(){
        $cycles = $this->findAll();
        $diplomeTypeModel = new DiplomeTypeModel();

        foreach($cycles as &$cycle){
            $cycle['diplomeTypes'] = $diplomeTypeModel->where('cycle_id', $cycle['id'])->findAll();
        }

        return $cycles;
    }
}