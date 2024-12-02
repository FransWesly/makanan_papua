<?php

namespace App\Controllers;

use App\Models\PenggunaModel;

class Auth extends BaseController
{
    public function register()
    {
        return view('register');
    }

    public function registerSubmit()
    {
        $model = new PenggunaModel();

        // Validasi input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'username' => 'required|min_length[3]|max_length[50]|is_unique[pengguna.username]',
            'password' => 'required|min_length[6]',
        ]);

        if (!$this->validate($validation->getRules())) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Simpan pengguna baru
        $data = [
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'peran' => 'user', // Default role
        ];

        $model->save($data);

        return redirect()->to('login')->with('success', 'Akun berhasil dibuat! Silakan login.');
    }

    public function login()
    {
        return view('login');
    }

    public function loginSubmit()
    {
        $model = new PenggunaModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->getUserByUsername($username);

        if ($user && password_verify($password, $user['password'])) {
            // Set session
            session()->set('user_id', $user['pengguna_id']);
            session()->set('username', $user['username']);
            session()->set('role', $user['peran']);

            return redirect()->to('admin/dashboard');
        } else {
            return redirect()->back()->with('error', 'Username atau password salah');
        }
    }
    public function logout()
    {
        // Menghapus session pengguna
        session()->destroy();

        // Redirect ke halaman login setelah logout
        return redirect()->to('/login'); // Ganti '/login' dengan rute yang sesuai
    }
}
