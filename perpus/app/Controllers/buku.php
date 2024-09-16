<?php

namespace App\Controllers;

use App\Models\BukuModel;
use CodeIgniter\Controller;

class Buku extends Controller
{
    public function index()
    {
        $model = new BukuModel();
        $data['bukus'] = $model->findAll(); // Memperbaiki kesalahan penulisan kode
        return view('buku/index', $data); // Menambahkan view untuk menampilkan data
    }

    public function create()
    {
        return view('buku/tambah');
    }

    public function store()
    {
        $model = new BukuModel();
        $data = [
            'id' => $this->request->getPost('id'),
            'Judul' => $this->request->getPost('Judul'),
            'Penulis' => $this->request->getPost('Penulis'),
            'Penerbit' => $this->request->getPost('Penerbit'),
            'TahunTerbit' => $this->request->getPost('TahunTerbit')
        ];
        $model->save($data);
        return redirect()->to('/buku');
    }

    public function update($BukuID)
    {
        $model = new BukuModel();
        $data['buku'] = $model->find($BukuID);
        return view('buku/update', $data);
    }

    public function edit($BukuID)
    {
        $model = new BukuModel();

        $data = [
            'Judul' => $this->request->getPost('Judul'),
            'Penulis' => $this->request->getPost('Penulis'),
            'Penerbit' => $this->request->getPost('Penerbit'),
            'TahunTerbit' => $this->request->getPost('TahunTerbit')
        ];

        $model->update($BukuID, $data);
        return redirect()->to('/buku');
    }
    public function delete($BukuID)
    {
        $model = new BukuModel();
        $model->delete($BukuID);
        return redirect()->to('/buku');
    }
    }
