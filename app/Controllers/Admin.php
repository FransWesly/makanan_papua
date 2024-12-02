<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use App\Models\PesananModel;
use App\Models\PenggunaModel;

class Admin extends BaseController
{
    protected $produkModel;
    protected $pesananModel;
    protected $penggunaModel;

    public function __construct()
    {
        $this->produkModel = new ProdukModel();
        $this->pesananModel = new PesananModel();
        $this->penggunaModel = new PenggunaModel();
    }

    public function dashboard()
    {
        $data = [
            'total_produk' => $this->produkModel->countAll(),
            'total_pesanan' => $this->pesananModel->countAll(),
            'total_pengguna' => $this->penggunaModel->countAll(),
            'total_kontak' => $this->penggunaModel->countAll(),

        ];

        return view('admin/dashboard', $data);
    }
}
