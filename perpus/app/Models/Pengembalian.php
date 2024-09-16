<?php

namespace App\Models;

use CodeIgniter\Model;

class Pengembalian extends Model
{
    protected $table            = 'pengembalian';
    protected $primaryKey       = 'PeminjamanID';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['UserID', 'BukuID', 'TanggalPengembalian'];

    
    public function getNyeleh()
{
    return $this->select('pengembalian.PeminjamanID, pengembalian.TanggalPengembalian, user.username as user_name, buku.judul as buku_title')
                ->join('user', 'user.UserID =pengembalian.UserID')
                ->join('buku', 'buku.BukuID =pengembalian.BukuID')
                ->findAll();
}

}
