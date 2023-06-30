<?php 

namespace App\Controllers;

use App\Models\DokterModels;

class Dokter extends BaseController
{
  protected $DokterModel;
  public function __construct()
  {
    $this->DokterModel = new DokterModels();
  }

  // index
  public function index()
  {
    helper('number_helper');
    $data = [
      'title'  => 'Data Dokter',
      'dokter' => $this->DokterModel->paginate(5, 'dok'),
      'pager'  => $this->DokterModel->pager,
      'nomor'  => nomor($this->request->getVar('page_dok'), 5)
    ];
    return view('dokter/indexDokter', $data);
  }

  // form create
  public function create()
  {
    $data = [
      'title' => 'Form Create Data'
    ];
    return view('dokter/create', $data);
  }

  // methode save data
  public function save()
  {
    $this->DokterModel->save([
      'nama'      => $this->request->getPost('nama_dokter'),
      'asal'      => $this->request->getPost('asal'),
      'keahlian'  => $this->request->getPost('keahlian'),
      'nomor_IDI' => $this->request->getPost('nomor_IDI'),
    ]);

    session()->setFlashdata('save', 'data berhasil disave');
    return redirect()->to('/Dokter');
  }

  // method delete
  public function delete($id_dokter)
  {
    $this->DokterModel->delete($id_dokter);

    session()->setFlashdata('delete', 'data berhasil dihapus');
    return redirect()->to('/Dokter');
  }

  // form edit
  public function edit($id_dokter)
  {
    $data = [
      'title'  => 'Edit Data',
      'dokter' => $this->DokterModel->find($id_dokter)
    ];

    return view('dokter/edit', $data);
  }

  // update data
  public function update($id_dokter)
  {
    $this->DokterModel->update($id_dokter, [
      'nama'      => $this->request->getPost('nama_dokter'),
      'asal'      => $this->request->getPost('asal'),
      'keahlian'  => $this->request->getPost('keahlian'),
      'nomor_IDI' => $this->request->getPost('nomor_IDI'),
    ]);

    session()->setFlashdata('update', 'data berhasil diupdate');
    return redirect()->to('/Dokter');
  }

}