<?php

namespace App\Controllers;

use App\Models\AccountModel;
use CodeIgniter\Controller;

class AccountController extends Controller
{
    public function index()
    {
        $model = new AccountModel();
        $data['accounts'] = $model->findAll();
        return view('account/index', $data);
    }

    public function create()
    {
        return view('account/create');
    }

    public function store()
    {
        $model = new AccountModel();
        $data = [
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'name' => $this->request->getPost('name'),
            'role' => $this->request->getPost('role')
        ];
        $model->save($data);
        return redirect()->to('/account');
    }

    public function edit($username)
    {
        $model = new AccountModel();
        $data['account'] = $model->find($username);
        return view('account/edit', $data);
    }

    public function update($username)
    {
        $model = new AccountModel();
        $data = [
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'name' => $this->request->getPost('name'),
            'role' => $this->request->getPost('role')
        ];
        $model->update($username, $data);
        return redirect()->to('/account');
    }

    public function delete($username)
    {
        $model = new AccountModel();
        $model->delete($username);
        return redirect()->to('/account');
    }
}
