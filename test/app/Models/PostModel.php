<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table = "posts";

    protected $primaryKey = 'id';

    /**
     * allowed Field
     */
    protected $allowedFields = [
        'title',
        'content'
    ];

}