<?php

namespace App\Controllers;

use App\Models\PesananModel;

class Adminpesanan extends BaseController
{
    protected $pesananModel;

    public function __construct()
    {
        $this->pesananModel = new PesananModel();
    }

    public function pesanan()
    {
        $data = [
            'judul' => 'Pesanan',
            'menu'  => 'Pesanan',
            'pesanan' => $this->pesananModel->findAll(),
        ];
        return view('admin/pesanan/pesanan', $data);
    }

    public function create()
    {
        return view('admin/pesanan/tambah'); // View untuk tambah data
    }

    public function store()
    {
        $this->pesananModel->save([
            'pengguna_id' => $this->request->getPost('pengguna_id'),
            'total' => $this->request->getPost('total'),
            'metode_pembayaran' => $this->request->getPost('metode_pembayaran'),
            'status' => $this->request->getPost('status'),
            'no_hp' => $this->request->getPost('no_hp'),
        ]);
        return redirect()->to('admin/pesanan/pesanan/pesanan');
    }

    public function edit($id)
    {
        $data = [
            'judul' => 'Edit Pesanan',
            'menu'  => 'Pesanan',
            'pesanan' => $this->pesananModel->find($id),
        ];
        return view('admin/pesanan/edit', $data); // View untuk edit data
    }

    public function update($id)
    {
        $this->pesananModel->update($id, [
            'pengguna_id' => $this->request->getPost('pengguna_id'),
            'total' => $this->request->getPost('total'),
            'metode_pembayaran' => $this->request->getPost('metode_pembayaran'),
            'status' => $this->request->getPost('status'),
            'no_hp' => $this->request->getPost('no_hp'),
        ]);
        return redirect()->to('/admin/pesanan/pesanan');
    }

    public function delete($id)
    {
        $this->pesananModel->delete($id);
        return redirect()->to('/admin/pesanan/pesanan');
    }
}
