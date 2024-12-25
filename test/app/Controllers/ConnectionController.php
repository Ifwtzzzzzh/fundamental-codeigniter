<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Database;

class ConnectionController extends BaseController
{
    public function index()
    {
        $db = Database::connect();

        if ($db->connID) {
            echo "Database connected successfully!";
        } else {
            echo "Failed to connect to the database.";
        }
    }

}