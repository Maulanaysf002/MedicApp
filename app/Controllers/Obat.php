<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ObatModels;

class Obat extends BaseController
{
    protected $ObatModel;
    public function __construct()
    {
        $this->ObatModel = new ObatModels();
    }

    // method index
    public function index()
    {
        helper('number_helper');
        $data = [
            'title'  => 'Halaman Data Obat',
            'obat'   => $this->ObatModel->paginate(5, 'obat'),
            'pager'  => $this->ObatModel->pager,
            'nomor'  => nomor($this->request->getVar('page_o'), 5)
        ];

        return view('obat/indexObat', $data);
    }

    // form create Data
    public function create()
    {
        $data = [
            'title'  =>  'Tambah Data Obat'
        ];

        return view('obat/create', $data);
    }

    // save data
    public function save()
    {
        $this->ObatModel->save([
            'nama_obat' => $this->request->getPost('nama_obat'),
            'golongan' => $this->request->getPost('golongan'),
            'kategori' => $this->request->getPost('kategori'),
            'bentuk' => $this->request->getPost('bentuk'),
        ]);

        session()->setFlashdata('save', 'data berhasil disimpan');
        return redirect()->to('Obat');
    }

    // delet mthod
    public function delete($id_obat)
    {
        $this->ObatModel->delete($id_obat);

        session()->setFlashdata('delete', 'data berhasil dihapus');
        return redirect()->to('Obat');
    }

    // edit form
    public function edit($id_obat)
    {
        $data = [
            'title' => 'form edit data obat',
            'obat'  => $this->ObatModel->find($id_obat)
        ];
        return view('obat/edit', $data);
    }

    // update obat data
    public function update($id_obat)
    {
        $this->ObatModel->update($id_obat, [
            'nama_obat' => $this->request->getPost('nama_obat'),
            'golongan' => $this->request->getPost('golongan'),
            'kategori' => $this->request->getPost('kategori'),
            'bentuk' => $this->request->getPost('bentuk'),
        ]);

        session()->setFlashdata('update', 'data berhasil diupdate');
        return redirect()->to('Obat');
    }


}
