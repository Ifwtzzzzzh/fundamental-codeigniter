<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FacultyModel;
use App\Models\FakultasModel;
use App\Models\TestModel;
use CodeIgniter\HTTP\ResponseInterface;

class FakultasController extends BaseController
{
    public function index()
    {
        $model = new FakultasModel();
        
        $pager = \Config\Services::pager();

        $data = array(
            'fakultas' => $model->paginate(10, 'fak'),
            'pager' => $model->pager
        );

        return view('faculty/index', $data);
    }

    public function create() {
        return view('faculty/create');
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
            return view('faculty/index', [
                'validation' => $this->validator
            ]);

        } else {
            $model = new FakultasModel();
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
        $model = new FakultasModel();

        $data = array(
            'fak' => $model->find($id)
        );

        return view('faculty/edit', $data);
    }

    public function update($id)
    {
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
            $model = new FakultasModel();

            return view('faculty/edit', [
                'fak' => $model->find($id),
                'validation' => $this->validator
            ]);

        } else {
            $model = new FakultasModel();

            $model->update($id, [
                'kd_fak'   => $this->request->getPost('kd_fak'),
                'nm_fak' => $this->request->getPost('nm_fak'),
            ]);

            session()->setFlashdata('message', 'Fakultas Berhasil Diupdate');
            return redirect()->to(base_url('faculty'));
        }
    }

    public function delete($id)
    {
        $fakultas = new FakultasModel();

        $post = $fakultas->find($id);

        if($post) {
            $fakultas->delete($id);
            session()->setFlashdata('message', 'Fakultas Berhasil Dihapus');
            return redirect()->to(base_url('faculty'));
        }
    }
}