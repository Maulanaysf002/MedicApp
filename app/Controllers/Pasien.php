<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PasienModels;

class Pasien extends BaseController
{
    protected $PasienModel;
    public function __construct()
    {
        $this->PasienModel = new PasienModels();
    }

    // index
    public function index()
    {
        helper('number_helper');
        $data = [
            'title'     => 'Halaman Data Pasien',
            'pasien'    => $this->PasienModel->paginate(5, 'pasien'),
            'pager'     => $this->PasienModel->pager,
            'nomor'     => nomor($this->request->getVar('page_pasien'), 5)
        ];
        return view('pasien/indexPasien', $data);        
    }

    // form create
    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data'
        ];
        return view('pasien/create', $data);
    }

    // save data
    public function save()
    {
        $this->PasienModel->save([
            'nama_pasien' => $this->request->getPost('nama_pasien'),
            'usia'        => $this->request->getPost('usia'),
            'alamat'      => $this->request->getPost('alamat'),
            'kelamin'     => $this->request->getPost('kelamin'),
            'tgl_lahir'   => $this->request->getPost('tgl_lahir'),            
        ]);

        
        session()->setFlashdata('save', 'data berhasil disimpan');
        return redirect()->to('/Pasien');
    }

    // delete
    public function delete($id_pasien)
    {
        $this->PasienModel->delete($id_pasien);

        session()->setFlashdata('delete', 'data berhasil dihapus');
        return redirect()->to('/Pasien');
    }

    // edit
    public function edit($id_pasien)
    {
        $data = [
            'title'  => 'halaman edit form',
            'pasien' => $this->PasienModel->find($id_pasien)
        ];
        return view('pasien/edit', $data);
    }

    // update
    public function update($id_pasien)
    {
        $this->PasienModel->update($id_pasien, [
            'nama_pasien' => $this->request->getPost('nama_pasien'),
            'usia'        => $this->request->getPost('usia'),
            'alamat'      => $this->request->getPost('alamat'),
            'kelamin'     => $this->request->getPost('kelamin'),
            'tgl_lahir'   => $this->request->getPost('tgl_lahir'),  
        ]);

        session()->setFlashdata('update', 'data berhasil diupdate');
        return redirect()->to('/Pasien');
    }

}
