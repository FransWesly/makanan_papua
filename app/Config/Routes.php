<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Route untuk tampilan depan
$routes->get('/', 'Home::index');
$routes->get('home', 'Home::index');
$routes->get('produk', 'Produk::index');
$routes->get('kontak', 'Kontak::index');
$routes->post('kontak/kirim', 'Kontak::kirim');
$routes->get('tentang', 'Tentang::index');
$routes->post('pesanan/store', 'Pesanan::store');

// Rute untuk autentikasi
$routes->get('login', 'Auth::login');
$routes->post('auth/loginSubmit', 'Auth::loginSubmit');
$routes->get('auth/logout', 'Auth::logout');
$routes->get('register', 'Auth::register');
$routes->post('auth/registerSubmit', 'Auth::registerSubmit');
$routes->get('auth/logout', 'Auth::logout');

// Rute untuk admin
$routes->get('admin/dashboard', 'Admin::dashboard');
$routes->get('admin/kontak/kontak', 'Adminkontak::kontak');
$routes->get('admin/pengguna/pengguna', 'Adminpengguna::pengguna');
$routes->get('admin/tentang/tentang', 'Admintentang::tentang');

$routes->group('admin/produk/produk', function ($routes) {
    $routes->get('', 'Adminproduk::produk'); // Menampilkan daftar produk
    $routes->get('tambah_produk', 'Adminproduk::create'); // Form tambah produk
    $routes->post('store', 'Adminproduk::store'); // Proses simpan produk
    $routes->get('edit/(:num)', 'Adminproduk::edit/$1'); // Form edit produk
    $routes->post('update/(:num)', 'Adminproduk::update/$1'); // Proses update produk
    $routes->get('delete/(:num)', 'Adminproduk::delete/$1'); // Hapus produk
});
$routes->group('pesanan', function ($routes) {
    $routes->get('create/(:num)', 'Pesanan::create/$1'); // Daftar pesanan
    $routes->post('store', 'Pesanan::store');  // Proses simpan pesanan

});
$routes->group('admin/pesanan', function ($routes) {
    $routes->get('pesanan', 'Adminpesanan::pesanan'); // Menampilkan daftar pesanan
    $routes->get('create', 'Adminpesanan::create'); // Form tambah pesanan
    $routes->post('store', 'Adminpesanan::store'); // Proses simpan pesanan
    $routes->get('edit/(:num)', 'Adminpesanan::edit/$1'); // Form edit pesanan
    $routes->post('update/(:num)', 'Adminpesanan::update/$1'); // Proses update pesanan
    $routes->get('delete/(:num)', 'Adminpesanan::delete/$1'); // Hapus pesanan
});
$routes->group('admin/kontak', function ($routes) {
    $routes->get('', 'Adminkontak::kontak'); // Daftar kontak
    $routes->get('tambah', 'Adminkontak::create'); // Form tambah kontak
    $routes->post('store', 'Adminkontak::store'); // Proses simpan kontak
    $routes->get('edit/(:num)', 'Adminkontak::edit/$1'); // Form edit kontak
    $routes->post('update/(:num)', 'Adminkontak::update/$1'); // Proses update kontak
    $routes->get('delete/(:num)', 'Adminkontak::delete/$1'); // Hapus kontak
});
