<?php
namespace App\Models;
use CodeIgniter\Model;

class PaiementModel extends Model {
    protected $table = 'Paiement';
    protected $allowedFields = ['candidat_id', 'montant', 'date_paiement', 'recu_path', 'statut'];
}