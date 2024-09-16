<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPeminjaman extends Model
{
    protected $table            = 'peminjaman';
    protected $primaryKey       = 'PeminjamanID';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['UserID', 'BukuID', 'TanggalPeminjaman', 'TanggalPengembalian'];

    public function getNyileh()
    {
        return $this->select('peminjaman.*, Username as user_name, Judul as buku_title')
                    ->join('user', 'user.UserID = peminjaman.UserID')
                    ->join('buku', 'buku.BukuID = peminjaman.BukuID')
                    ->findAll();
    }
}

