<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KontakModel;

class Kontak extends BaseController
{
    protected $kontakModel;

    public function __construct()
    {
        $this->kontakModel = new KontakModel();
    }

    public function index()
    {
        $data = [
            'judul' => 'Kontak',
            'menu'  => 'kontak'
        ];
        return view('v_kontak', $data); // Pastikan nama view sesuai
    }

    public function kirim()
    {
        // Validasi input
        if (!$this->validate([
            'name' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'subject' => 'required|min_length[3]',
            'message' => 'required|min_length[5]',
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Simpan data ke database
        $this->kontakModel->save([
            'nama' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'subjek' => $this->request->getPost('subject'), // Pastikan ada field 'subjek' di database
            'pesan' => $this->request->getPost('message'),
        ]);

        // Tampilkan pesan sukses
        return redirect()->back()->with('success_message', 'Terimakasih atas masukan Anda, akan kami proses.');
    }
}
