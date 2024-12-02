<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use App\Models\PesananModel;
use CodeIgniter\Controller;

class Pesanan extends Controller
{
    public function create($produk_id)
    {
        $produkModel = new ProdukModel();
        $produk = $produkModel->find($produk_id);

        if (!$produk) {
            return redirect()->to('/')->with('error', 'Produk tidak ditemukan.');
        }

        return view('v_pesanan', ['produk' => $produk]);
    }

    public function store()
    {
        $model = new PesananModel();

        $data = [
            'pengguna_id' => session()->get('user_id'),
            'total' => $this->request->getPost('harga') * $this->request->getPost('jumlah'),
            'metode_pembayaran' => $this->request->getPost('metode_pembayaran'),
            'no_hp' => $this->request->getPost('no_hp'),
            'status' => 'pending',
            'nama_pembeli' => $this->request->getPost('nama_pembeli')
        ];

        if (empty($data['no_hp'])) {
            return redirect()->back()->with('error', 'Nomor HP tidak boleh kosong.');
        }

        $model->save($data);

        return redirect()->to('/')->with('success', 'Pesanan berhasil dibuat!');
    }
}
