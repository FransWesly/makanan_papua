<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'produk'; // Nama tabel produk
    protected $primaryKey = 'produk_id'; // Primary key

    protected $allowedFields = [
        'nama',         // Pastikan ini sesuai dengan kolom di tabel
        'deskripsi',    // Pastikan ini sesuai dengan kolom di tabel
        'harga',
        'gambar',       // Pastikan ini sesuai dengan kolom di tabel
        'stok'
    ]; // Field yang diizinkan

    // Metode untuk menghitung semua produk
    public function countAll()
    {
        return $this->countAllResults();
    }
}
