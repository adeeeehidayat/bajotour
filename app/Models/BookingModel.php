<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{
    protected $table = 'booking';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama_paket',
        'tanggal',
        'jumlah_orang',
        'nama_depan',
        'nama_belakang',
        'email',
        'hp',
        'metode_pembayaran',
        'total_harga',
        'created_at'
    ];
}
