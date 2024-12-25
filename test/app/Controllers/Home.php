<?php

namespace App\Controllers;

use Config\Database;

class Home extends BaseController
{
    public function index(): string
    {
        $db = Database::connect();

        if ($db->connID) {
            echo "Database connected successfully!";
        } else {
            echo "Failed to connect to the database.";
        }
        return view('welcome_message');
    }
}