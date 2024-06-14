<?php

namespace App\Controllers;

use App\Models\AccountModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth/login');
    }

    public function doLogin()
    {
        $model = new AccountModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $user = $model->find($username);
        if ($user && password_verify($password, $user['password'])) {
            session()->set([
                'username' => $user['username'],
                'role' => $user['role'],
                'logged_in' => TRUE
            ]);
            return redirect()->to('/');
        } else {
            return redirect()->to('/login')->with('error', 'Invalid Login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
