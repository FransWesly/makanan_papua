<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Admintentang extends BaseController
{
    public function tentang()
    {
        $data = [
            'judul' => 'tentang',
            'menu'  => 'tentang'
        ];
        return view('admin/tentang/tentang', $data);
    }
}
