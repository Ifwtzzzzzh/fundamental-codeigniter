<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TestModel;

class TestController extends BaseController
{
    public function index()
    {
        $model = new TestModel();
        
        $pager = \Config\Services::pager();

        $data = array(
            'tests' => $model->paginate(10, 'test'),
            'pager' => $model->pager
        );

        return view('fakultas/index', $data);
    }

    public function create() {
        return view('fakultas/create');
    }

    public function store() {
        helper(['form', 'url']);

        $validation = $this->validate([
            'kd_fak' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Kode Fakultas.'
                ]
            ],
            'nm_fak'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Nama Fakultas.'
                ]
            ],
        ]);

        if(!$validation) {
            return view('fakultas/index', [
                'validation' => $this->validator
            ]);

        } else {
            $model = new TestModel();
            $model->insert([
                'kd_fak'   => $this->request->getPost('kd_fak'),
                'nm_fak' => $this->request->getPost('nm_fak'),
            ]);
            
            session()->setFlashdata('message', 'Fakultas Berhasil Disimpan');
            return redirect()->to(base_url('faculty'));
        }
    }

    public function edit($id)
    {
        $model = new TestModel();

        $data = array(
            'test' => $model->find($id)
        );

        return view('fakultas/edit', $data);
    }

    public function update($id)
    {
        //load helper form and URL
        helper(['form', 'url']);
         
        //define validation
        $validation = $this->validate([
            'kd_fak' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Kode Fakultas.'
                ]
            ],
            'nm_fak'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Nama Fakultas.'
                ]
            ],
        ]);

        if(!$validation) {

            //model initialize
            $model = new TestModel();

            //render view with error validation message
            return view('fakultas/edit', [
                'faculty' => $model->find($id),
                'validation' => $this->validator
            ]);

        } else {
            
            //model initialize
            $model = new TestModel();
            
            //insert data into database
            $model->update($id, [
                'kd_fak'   => $this->request->getPost('kd_fak'),
                'nm_fak' => $this->request->getPost('nm_fak'),
            ]);

            //flash message
            session()->setFlashdata('message', 'Fakultas Berhasil Diupdate');

            return redirect()->to(base_url('faculty'));
        }
    }

    public function delete($id)
    {
        //model initialize
        $postModel = new TestModel();

        $post = $postModel->find($id);

        if($post) {
            $postModel->delete($id);

            //flash message
            session()->setFlashdata('message', 'Fakultas Berhasil Dihapus');

            return redirect()->to(base_url('faculty'));
        }
    }
}