<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Tentang extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'tentang',
            'menu'  => 'tentang'
        ];
        return view('v_tentang', $data);
    }
}
