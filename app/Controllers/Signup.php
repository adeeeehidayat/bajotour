<?php

namespace App\Controllers;

use App\Models\SignupModel;
use CodeIgniter\Controller;

class Signup extends Controller
{
    public function simpan()
    {
        $signupModel = new SignupModel();

        $data = [
            'nama_lengkap' => $this->request->getPost('signupName'),
            'email'        => $this->request->getPost('signupEmail'),
            'password'     => password_hash($this->request->getPost('signupPassword'), PASSWORD_DEFAULT)
        ];

        // Cek apakah email sudah ada
        if ($signupModel->isEmailExists($data['email'])) {
            return redirect()->back()->with('error', 'Email sudah ada, silahkan login dengan email tersebut.');
        }

        // Buat akun baru
        if ($signupModel->createUser($data)) {
            return redirect()->back()->with('success', 'Akun berhasil dibuat, silahkan login.');
        } else {
            return redirect()->back()->with('error', 'Terjadi kesalahan, silahkan coba lagi.');
        }
    }
}
