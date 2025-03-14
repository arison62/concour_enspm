<?php
namespace App\Models;
use CodeIgniter\Model;

class CompteModel extends Model {
    protected $table = 'Compte';
    protected $allowedFields = [
        'email',
        'mot_de_passe',
        'date_creation'
    ];
}