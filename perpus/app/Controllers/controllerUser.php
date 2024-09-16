<?php

namespace App\Controllers;

use App\Models\user;
use CodeIgniter\Controller;

class controllerUser extends Controller
{
    public function index()
    {
        $model = new user();
        $data['users'] = $model->findAll(); // Memperbaiki kesalahan penulisan kode
        return view('user/awal', $data); // Menambahkan view untuk menampilkan data
    }

    public function create()
    {
        return view('user/tambah');
    }

    public function store()
    {
        $model = new user();
        $data = [
            'UserID' => $this->request->getPost('UserID'),
            'Username' => $this->request->getPost('Username'),
            'Password' => md5($this->request->getPost('Password')),
            'Email' => $this->request->getPost('Email'),
            'NamaLengkap' => $this->request->getPost('NamaLengkap'),
            'Alamat' => $this->request->getPost('Alamat')
        ];
        $model->save($data);
        return redirect()->to('/user');
    }


    public function update($UserID)
    {
        $model = new user();
        $data['user'] = $model->find($UserID);
        return view('user/update', $data);
    }

    public function edit($UserID)
    {
        $model = new user();

        $data = [
            'Username' => $this->request->getPost('Username'),
            'Password' => md5($this->request->getPost('Password')),
            'Email' => $this->request->getPost('Email'),
            'NamaLengkap' => $this->request->getPost('NamaLengkap'),
            'Alamat' => $this->request->getPost('Alamat')
        ];

        $model->update($UserID, $data);
        return redirect()->to('/user');
    }

    public function delete($UserID)
    {
        $model = new user();
        $model->delete($UserID);
        return redirect()->to('/user');
    }



}