<?php
namespace App\Models;
use CodeIgniter\Model;

class DiplomeModel extends Model{
    protected $table = 'Diplome';
    protected $allowedFields = ['candidat_id', 'type_diplome_id', 'annee_obtention', 'etablissement'];
}