<?php

namespace App\Controllers;

use App\Models\LoginModel;
use CodeIgniter\Controller;

class Login extends Controller
{
    public function prosesLogin()
    {
        $loginModel = new LoginModel();

        $email = $this->request->getPost('loginEmail');
        $password = $this->request->getPost('loginPassword');

        $user = $loginModel->getUserByEmail($email);

        // Jika email tidak ditemukan
        if (!$user) {
            return redirect()->back()->with('error', 'Email tidak ditemukan.');
        }

        // Jika password salah
        if (!password_verify($password, $user['password'])) {
            return redirect()->back()->with('error', 'Password salah.');
        }

        // Jika email dan password benar
        return redirect()->back()->with('success', 'Selamat datang di BajoTour.');
    }
}
