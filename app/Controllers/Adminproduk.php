<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Adminproduk extends BaseController
{
    protected $produkModel;

    public function __construct()
    {
        $this->produkModel = new ProdukModel();
    }

    public function produk()
    {
        $data['produk'] = $this->produkModel->findAll();
        return view('admin/produk/produk', $data);
    }

    public function create()
    {
        return view('admin/produk/tambah_produk');
    }

    public function store()
    {
        // Upload gambar
        $gambar = $this->request->getFile('gambar');
        $namaGambar = '';

        if ($gambar->isValid() && !$gambar->hasMoved()) {
            $namaGambar = $gambar->getRandomName();
            // Pindahkan gambar ke folder public/assets
            $gambar->move('assets', $namaGambar); // Pastikan folder assets ada
        }

        // Simpan data produk ke database
        $this->produkModel->save([
            'nama' => $this->request->getPost('nama'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'harga' => $this->request->getPost('harga'),
            'gambar' => 'assets/' . $namaGambar, // Simpan path gambar
            'stok' => $this->request->getPost('stok'),
        ]);

        return redirect()->to('/admin/produk/produk'); // Redirect ke halaman produk setelah simpan
    }


    public function edit($id)
    {
        $data['produk'] = $this->produkModel->find($id);
        return view('admin/produk/edit_produk', $data);
    }

    public function update($id)
    {
        // Ambil data produk berdasarkan ID
        $produk = $this->produkModel->find($id);
        if (!$produk) {
            // Produk tidak ditemukan
            return redirect()->to('/admin/produk/produk')->with('error', 'Produk tidak ditemukan.');
        }

        $data = [
            'nama' => $this->request->getPost('nama'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'harga' => $this->request->getPost('harga'),
            'stok' => $this->request->getPost('stok'),
        ];

        // Jika ada gambar baru yang diupload
        $gambar = $this->request->getFile('gambar');
        if ($gambar && $gambar->isValid()) {
            $namaGambar = $gambar->getRandomName();
            $gambar->move('assets', $namaGambar); // Pastikan folder assets ada
            $data['gambar'] = 'assets/' . $namaGambar;
        }

        // Update produk di database
        $this->produkModel->update($id, $data);
        return redirect()->to('/admin/produk/produk')->with('success', 'Produk berhasil diperbarui.'); // Redirect ke halaman produk
    }

    public function delete($id)
    {
        $this->produkModel->delete($id);
        return redirect()->to('/admin/produk/produk');
    }
}
