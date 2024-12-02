<?php

namespace App\Controllers;

use App\Models\KontakModel;

class Adminkontak extends BaseController
{
    protected $kontakModel;

    public function __construct()
    {
        $this->kontakModel = new KontakModel();
    }

    public function kontak()
    {
        $data = [
            'judul' => 'Kontak',
            'menu'  => 'Kontak',
            'kontak' => $this->kontakModel->findAll(),
        ];
        return view('admin/kontak/kontak', $data);
    }

    public function create()
    {
        return view('admin/kontak/tambah'); // View untuk tambah data
    }

    public function store()
    {
        $validation = $this->validate([
            'nama' => 'required|max_length[100]',
            'email' => 'required|valid_email|max_length[100]',
            'pesan' => 'required',
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->kontakModel->save([
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'pesan' => $this->request->getPost('pesan'),
            'tanggal_dikirim' => date('Y-m-d H:i:s'), // Set tanggal pengiriman
        ]);
        return redirect()->to('/admin/kontak/kontak')->with('success', 'Kontak berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data = [
            'judul' => 'Edit Kontak',
            'menu'  => 'Kontak',
            'kontak' => $this->kontakModel->find($id),
        ];
        return view('admin/kontak/edit', $data); // View untuk edit data
    }

    public function update($id)
    {
        $validation = $this->validate([
            'nama' => 'required|max_length[100]',
            'email' => 'required|valid_email|max_length[100]',
            'pesan' => 'required',
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->kontakModel->update($id, [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'pesan' => $this->request->getPost('pesan'),
        ]);
        return redirect()->to('/admin/kontak/kontak')->with('success', 'Kontak berhasil diperbarui.');
    }

    public function delete($id)
    {
        $this->kontakModel->delete($id);
        return redirect()->to('/admin/kontak/kontak')->with('success', 'Kontak berhasil dihapus.');
    }
}
