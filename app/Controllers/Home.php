<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Home extends BaseController
{
    public function index()
    {
        $produkModel = new ProdukModel();
        $data['produk'] = $produkModel->findAll();

        // Menentukan menu aktif
        $data['menu'] = 'Home'; // Atur menu aktif di sini

        return view('v_home', $data);
    }
}
