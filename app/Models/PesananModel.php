<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
    protected $table = 'pesanan'; // Nama tabel dalam database
    protected $primaryKey = 'pesanan_id'; // Primary key tabel

    protected $allowedFields = [
        'pengguna_id',
        'tanggal_pesanan',
        'total',
        'metode_pembayaran',
        'status',
        'no_hp',
        'nama_pembeli'
    ]; // Field yang diizinkan untuk disimpan

    // Metode untuk mengambil jumlah pesanan per bulan untuk tahun tertentu
    public function getMonthlyOrders($year)
    {
        return $this->select('MONTH(tanggal_pesanan) as bulan, COUNT(*) as total')
            ->where('YEAR(tanggal_pesanan)', $year)
            ->groupBy('bulan')
            ->findAll();
    }
}
