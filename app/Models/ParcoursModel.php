<?php
namespace App\Models;
use CodeIgniter\Model;

class ParcoursModel extends Model
{
    protected $table = 'Parcours';
    protected $allowedFields = ['nom'];

}
