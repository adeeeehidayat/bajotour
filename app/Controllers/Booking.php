<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\BookingModel;

class Booking extends BaseController
{
    public function index()
    {
        return view('booking');
    }

    public function simpan()
    {
        // Load the BookingModel
        $bookingModel = new BookingModel();

        // Get data from POST request
        $data = [
            'nama_paket' => $this->request->getPost('nama_paket'),
            'tanggal' => $this->request->getPost('tanggal'),
            'jumlah_orang' => $this->request->getPost('jumlah_orang'),
            'nama_depan' => $this->request->getPost('nama_depan'),
            'nama_belakang' => $this->request->getPost('nama_belakang'),
            'email' => $this->request->getPost('email'),
            'hp' => $this->request->getPost('hp'),
            'metode_pembayaran' => $this->request->getPost('metode_pembayaran'),
            'total_harga' => $this->request->getPost('total_harga'),
            'created_at' => date('Y-m-d H:i:s')
        ];

        // Save data to database
        $bookingModel->insert($data);

        // Prepare response
        $response = [
            'status' => 'success',
            'message' => 'Booking berhasil disimpan!',
            'data' => $data
        ];

        // Return response as JSON
        return $this->response->setJSON($response);
    }
}
