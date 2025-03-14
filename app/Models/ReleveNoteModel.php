<?php
namespace App\Models;
use CodeIgniter\Model;

class ReleveNoteModel extends Model {
    protected $table = 'ReleveNote';
    protected $allowedFields = ['diplome_id', 'fichier_path', 'date_obtention'];
}