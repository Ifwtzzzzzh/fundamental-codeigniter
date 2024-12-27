<?php

namespace App\Models;

use CodeIgniter\Model;

class TestModel extends Model
{
    protected $table = "tests";

    protected $primaryKey = 'id';

    /**
     * allowed Field
     */
    protected $allowedFields = [
        'kd_fak',
        'nm_fak'
    ];
}