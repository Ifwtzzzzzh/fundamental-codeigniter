<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Siswa;
use App\Models\Fakultas;
use App\Models\ProgramStudi;
use CodeIgniter\HTTP\ResponseInterface;

class SiswaController extends BaseController
{
    protected $siswa;
    protected $fakultas;
    protected $programStudi;

    public function __construct()
    {
        $this->siswa = new Siswa();
        // $this->fakultas = new Fakultas();
        $this->programStudi = new ProgramStudi();
    }


    public function index()
    {
        $siswaModel = new Siswa();
        $data['siswa'] = $siswaModel->findAll();
        // $data['siswa'] = $this->siswa->findAll();
        return view('siswa/index', $data);
    }

    public function create()
    {
        $data['fakultas'] = $this->fakultas->findAll();
        $data['program_studi'] = $this->programStudi->findAll();
        return view('siswa/create', $data);
    }

    public function store()
    {
        $this->siswa->save([
            'NIM' => $this->request->getPost('NIM'),
            'nm_mhs' => $this->request->getPost('nm_mhs'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'kd_fak' => $this->request->getPost('kd_fak'),
            'kd_prod' => $this->request->getPost('kd_prod'),
        ]);
        return redirect()->to('/siswa');
    }

    public function edit($NIM)
    {
        $data['siswa'] = $this->siswa->find($NIM);
        $data['fakultas'] = $this->fakultas->findAll();
        $data['program_studi'] = $this->programStudi->findAll();
        return view('siswa/edit', $data);
    }

    public function update($NIM)
    {
        $this->siswa->update($NIM, [
            'nm_mhs' => $this->request->getPost('nm_mhs'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'kd_fak' => $this->request->getPost('kd_fak'),
            'kd_prod' => $this->request->getPost('kd_prod'),
        ]);
        return redirect()->to('/siswa');
    }

    public function delete($NIM)
    {
        $this->siswa->delete($NIM);
        return redirect()->to('/siswa');
    }

}