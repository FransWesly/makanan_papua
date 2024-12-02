<?php

namespace App\Models;

use CodeIgniter\Model;

class KontakModel extends Model
{
    protected $table = 'kontak'; // Nama tabel
    protected $primaryKey = 'kontak_id'; // Primary key
    protected $allowedFields = ['nama', 'email', 'pesan', 'tanggal_dikirim']; // Kolom yang dapat diisi

    // Menetapkan untuk auto increment jika kontak_id adalah auto increment
    protected $useAutoIncrement = true;

    // Jika Anda ingin menambahkan validasi
    protected $validationRules = [
        'nama' => 'required|max_length[100]',
        'email' => 'required|valid_email|max_length[100]',
        'pesan' => 'required',
    ];

    protected $validationMessages = [
        'nama' => [
            'required' => 'Nama harus diisi.',
            'max_length' => 'Nama tidak boleh lebih dari 100 karakter.',
        ],
        'email' => [
            'required' => 'Email harus diisi.',
            'valid_email' => 'Email tidak valid.',
            'max_length' => 'Email tidak boleh lebih dari 100 karakter.',
        ],
        'pesan' => [
            'required' => 'Pesan harus diisi.',
        ],
    ];

    // Menonaktifkan validasi jika tidak diperlukan
    protected $skipValidation = false; // Set true jika Anda ingin menonaktifkan validasi di beberapa tempat
}
