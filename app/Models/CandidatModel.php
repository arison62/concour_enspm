<?php
namespace App\Models;
use CodeIgniter\Model;

class CandidatModel extends Model {
    protected $table = 'Candidat';
    
    protected $allowedFields = [
        'nom', 'prenom', 'date_naissance', 'lieu_naissance',
        'nationalite_id', 'departement_id', 'parcours_id',
        'centre_examen_id', 'compte_id'
    ];
}