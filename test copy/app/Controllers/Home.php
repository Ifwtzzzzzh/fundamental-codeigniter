<?php

namespace App\Controllers;

use Config\Database;

class Home extends BaseController
{
    public function __construct() {
        
    }
    public function index(): string
    {
        return view('home');
    }
}