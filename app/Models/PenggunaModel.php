<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel extends Model
{
    protected $table = 'pengguna'; // Nama tabel
    protected $primaryKey = 'pengguna_id'; // Primary key sesuai dengan kolom di tabel
    protected $allowedFields = ['username', 'password', 'peran']; // Kolom yang dapat diisi

    // Menetapkan untuk auto increment jika pengguna_id adalah auto increment
    protected $useAutoIncrement = true;

    // Jika Anda ingin menambahkan validasi
    protected $validationRules = [
        'username' => 'required|max_length[50]',
        'password' => 'required|min_length[6]', // Minimal panjang password
        'peran' => 'required|in_list[admin]', // Pastikan peran adalah 'admin'
    ];

    protected $validationMessages = [
        'username' => [
            'required' => 'Username harus diisi.',
            'max_length' => 'Username tidak boleh lebih dari 50 karakter.',
        ],
        'password' => [
            'required' => 'Password harus diisi.',
            'min_length' => 'Password harus minimal 6 karakter.',
        ],
        'peran' => [
            'required' => 'Peran harus dipilih.',
            'in_list' => 'Peran harus berupa admin.',
        ],
    ];

    // Metode untuk mendapatkan pengguna berdasarkan username
    public function getUserByUsername($username)
    {
        return $this->where('username', $username)->first(); // Mengambil pengguna pertama berdasarkan username
    }
}
