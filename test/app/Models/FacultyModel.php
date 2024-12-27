<?php

namespace App\Models;

use CodeIgniter\Model;

class FacultyModel extends Model
{
    protected $table = "faculties";

    protected $primaryKey = 'id';

    /**
     * allowed Field
     */
    protected $allowedFields = [
        'kd_fak',
        'nm_fak'
    ];
}