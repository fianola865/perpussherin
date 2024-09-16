<?php
namespace App\Controllers;

use App\Models\Pengembalian;
use CodeIgniter\Controller;

class Mbalek extends Controller
{
    public function index()
    {
        $model = new Pengembalian();
        $data['pengembalians'] = $model->findAll();
        return view('pengembalian/index', $data);
    }
    

    public function create()
    {
        return view('pengembalian/tambah');
    }

    public function store()
    {
        $model = new Pengembalian();
        $tanggalKembali = $this->request->getPost('TanggalPengembalian') ?? date('Y-m-d');
        $data = [
            'UserID' => $this->request->getPost('UserID'),
            'BukuID' => $this->request->getPost('BukuID'),
            'TanggalPengembalian' => $tanggalKembali,
        ];
        $model->insert($data);
        return redirect()->to('/pengembalian');
    }

    public function update($PeminjamanID)
    {
        $model = new Pengembalian();
        $data['pengembalian'] = $model->find($PeminjamanID);
        return view('pengembalian/update', $data);   
    }

    public function edit($PeminjamanID)
    {
        
        $model = new Pengembalian();
        $tanggalKembali = $this->request->getPost('TanggalPengembalian') ?? date('Y-m-d');
        $data = [
            'UserID' => $this->request->getPost('UserID'),
            'BukuID' => $this->request->getPost('BukuID'),
            'TanggalPengembalian' => $tanggalKembali,
        ];
        $model->update($PeminjamanID, $data);
        return redirect()->to('/pengembalian');
    }
    

    public function delete($PeminjamanID)
    {
        $model = new Pengembalian();
        $model->delete($PeminjamanID);
        return redirect()->to('/pengembalian');
    }
}
