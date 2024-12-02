<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenggunaModel; // Pastikan Anda sudah membuat model ini

class Adminpengguna extends BaseController
{
    protected $penggunaModel;

    public function __construct()
    {
        $this->penggunaModel = new PenggunaModel(); // Inisialisasi model
    }

    public function pengguna()
    {
        // Ambil data pengguna dari model
        $data = [
            'judul' => 'Pengguna',
            'menu'  => 'Pengguna',
            'pengguna' => $this->penggunaModel->findAll(), // Mendapatkan semua data pengguna
        ];
        return view('admin/pengguna/pengguna', $data);
    }
}
