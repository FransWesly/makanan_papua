<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdukModel;

class Produk extends BaseController
{
    public function index()
    {
        $produkModel = new ProdukModel();
        $data = [
            'judul' => 'Produk',
            'menu'  => 'produk',
            'produks' => $produkModel->findAll() // Mengambil semua data produk
        ];
        return view('v_produk', $data);
    }
}
