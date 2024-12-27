<?php

namespace App\Models;

use CodeIgniter\Model;

class FakultasModel extends Model
{
    protected $table = "fakultas";

    protected $primaryKey = 'kd_fak';

    /**
     * allowed Field
     */
    protected $allowedFields = [
        'kd_fak',
        'nm_fak'
    ];
}