<?php

namespace Config;

use CodeIgniter\Database\Config;

/**
 * Database Configuration
 */
class Database extends Config
{
    /**
     * The directory that holds the Migrations
     * and Seeds directories.
     */
    public string $filesPath = APPPATH . 'Database' . DIRECTORY_SEPARATOR;

    /**
     * Lets you choose which connection group to
     * use if no other is specified.
     */
    public string $defaultGroup = 'default';

    /**
     * The default database connection.
     *
     * @var array<string, mixed>
     */
    public array $default = [
        'DSN'          => '',
        'hostname' => '127.0.0.1', // pastikan ini sesuai dengan server database Anda
        'username'     => 'root',       // ganti sesuai dengan username database Anda
        'password'     => '',           // ganti sesuai dengan password database Anda
        'database'     => 'makanan',    // nama database Anda
        'DBDriver'     => 'MySQLi',     // gunakan MySQLi untuk koneksi ke MySQL
        'DBPrefix'     => '',
        'pConnect'     => false,
        'DBDebug'      => true,         // set true untuk debugging; pastikan diubah ke false di production
        'charset'      => 'utf8mb4',    // gunakan utf8mb4 untuk mendukung karakter Unicode
        'DBCollat'     => 'utf8mb4_general_ci',
        'swapPre'      => '',
        'encrypt'      => false,
        'compress'     => false,
        'strictOn'     => false,
        'failover'     => [],
        'port'         => 3306,         // port default untuk MySQL
        'numberNative' => false,
    ];

    /**
     * This database connection is used when
     * running PHPUnit database tests.
     *
     * @var array<string, mixed>
     */
    public array $tests = [
        'DSN'         => '',
        'hostname'    => '127.0.0.1',
        'username'    => '',
        'password'    => '',
        'database'    => ':memory:', // untuk SQLite
        'DBDriver'    => 'SQLite3',
        'DBPrefix'    => 'db_',  // Prefix untuk database
        'pConnect'    => false,
        'DBDebug'     => true,
        'charset'     => 'utf8mb4', // gunakan utf8mb4 untuk testing
        'DBCollat'    => 'utf8mb4_general_ci',
        'swapPre'     => '',
        'encrypt'     => false,
        'compress'    => false,
        'strictOn'    => false,
        'failover'    => [],
        'port'        => 3306,
        'foreignKeys' => true,
        'busyTimeout' => 1000,
    ];

    public function __construct()
    {
        parent::__construct();

        // Pastikan kita selalu mengatur grup database ke 'tests' jika
        // kita sedang menjalankan suite pengujian otomatis, sehingga
        // kita tidak menimpa data live secara tidak sengaja.
        if (ENVIRONMENT === 'testing') {
            $this->defaultGroup = 'tests';
        }
    }
}
