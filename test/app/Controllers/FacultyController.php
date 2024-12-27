<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FacultyModel;
use CodeIgniter\HTTP\ResponseInterface;

class FacultyController extends BaseController
{
    public function index()
    {
        $facultyModel = new FacultyModel();

        //pager initialize
        $pager = \Config\Services::pager();

        $data = array(
            'faculties' => $facultyModel->paginate(2, 'faculties'),
            'pager' => $facultyModel->pager
        );

        return view('faculty-index', $data);
    }
}