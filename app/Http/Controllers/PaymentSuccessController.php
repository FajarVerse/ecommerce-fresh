<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentSuccessController extends Controller
{
    public function sukses()
    {
        $pembayaranData = [
            'no_resi' => 'RES123456789',
            'id_transaksi' => 'TRX202509221',
            'metode_pembayaran' => 'Transfer Bank',
            'waktu_pembayaran' => '14:00 WIB, Senin, 22 September 2025',
            'nama' => 'Mahnoor Hashmi',
            'estimasi_sampai' => '24 September 2025',
            'total_pembayaran' => 'Rp 400.000',
        ];

        return view('PembayaranSukses',compact('pembayaranData'));
    }
}
