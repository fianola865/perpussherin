<?php
namespace App\Controllers;

use App\Models\ModelPeminjaman;
use CodeIgniter\Controller;

class Peminjaman extends Controller
{
    public function index()
    {
        $model = new ModelPeminjaman();
        $data['peminjamans'] = $model->getNyileh();
        return view('peminjaman/index', $data);
    }
    

    public function create()
    {
        return view('peminjaman/tambah');
    }

    public function store()
    {
        $model = new ModelPeminjaman();
        $tanggalPinjam = $this->request->getPost('TanggalPeminjaman') ?? date('Y-m-d');
        $data = [
            'UserID' => $this->request->getPost('UserID'),
            'BukuID' => $this->request->getPost('BukuID'),
            'TanggalPeminjaman' => $tanggalPinjam,
        ];
        $model->insert($data);
        return redirect()->to('/peminjaman');
    }

    public function update($PeminjamanID)
    {
        $model = new ModelPeminjaman();
        $data['peminjaman'] = $model->getNyileh($PeminjamanID);
        return view('peminjaman/update', $data);   
    }

    public function edit($PeminjamanID)
    {
        
        $model = new ModelPeminjaman();
        $tanggalPinjam = $this->request->getPost('TanggalPeminjaman') ?? date('Y-m-d');
        $data = [
            'UserID' => $this->request->getPost('UserID'),
            'BukuID' => $this->request->getPost('BukuID'),
            'TanggalPeminjaman' => $tanggalPinjam,
        ];
        $model->update($PeminjamanID, $data);
        return redirect()->to('/peminjaman');
    }
    

    public function delete($PeminjamanID)
    {
        $model = new ModelPeminjaman();
        $model->delete($PeminjamanID);
        return redirect()->to('/peminjaman');
    }
}
