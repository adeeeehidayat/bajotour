<?php

namespace App\Controllers;

use App\Models\ForgotPasswordModel;
use CodeIgniter\Controller;

class ForgotPassword extends Controller
{
    public function simpan()
    {
        $forgotPasswordModel = new ForgotPasswordModel();

        $email = $this->request->getPost('fpEmail');
        $password = $this->request->getPost('newPassword');
        $confirmPassword = $this->request->getPost('confirmNewPassword');

        $user = $forgotPasswordModel->getUserByEmail($email);

        // Jika email tidak ditemukan
        if (!$user) {
            return redirect()->back()->with('error', 'Email tidak ditemukan.');
        }

        // Jika password dan konfirmasi password tidak sama
        if ($password !== $confirmPassword) {
            return redirect()->back()->with('error', 'Password dan konfirmasi password tidak sama.');
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $forgotPasswordModel->updatePassword($email, $hashedPassword);

        return redirect()->back()->with('success', 'Password berhasil diubah. Silakan login kembali.');
    }
}
