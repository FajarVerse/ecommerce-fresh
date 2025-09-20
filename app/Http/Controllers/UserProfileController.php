<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate(
            [
                'username' => 'sometimes|string|min:3|max:255|regex:/^[A-Za-z\s]+$/',
                'email' => 'sometimes|string|lowercase|email|min:7|max:255|unique:users,email,' . $user->id,
                'nohp' => 'required|string|min:12|max:20|regex:/^[0-9]+$/',
                'alamat' => 'required|string|min:15|max:255',
                'kota' => 'required|string|min:4|max:255|regex:/^[A-Za-z\s]+$/',
                'negara' => 'required|string|min:4|max:255|regex:/^[A-Za-z\s]+$/',
                'kodepos' => 'required|string|min:5|max:20|regex:/^[0-9]+$/',
            ],
            [
                'nama.required' => 'Nama wajib diisi',
                'nama.string' => 'Nama hanya boleh huruf',
                'nama.min' => 'Nama minimal 3 huruf',
                'nama.regex' => 'Nama hanya boleh berisi huruf',

                'email.required' => 'Alamat email wajib diisi.',
                'email.min' => 'Alamat email minimal 7 karakter',
                'email.unique' => 'Alamat email sudah digunakan',

                'nohp.required' => 'Nomor HP wajib diisi',
                'nohp.string' => 'Nomor HP hanya boleh angka',
                'nohp.min' => 'Nomor HP minimal 12 angka',
                'nohp.max' => 'Nomor HP maksimal 15 angka',
                'nohp.regex' => 'Nomor HP hanya boleh angka',

                'alamat.required' => 'Alamat wajib diisi',
                'alamat.string' => 'Alamat hanya boleh huruf',
                'alamat.min' => 'Alamat minimal 15 karakter',
                'alamat.max' => 'Alamat maksimal 255 karakter',

                'kota.required' => 'Kota wajib diisi',
                'kota.string' => 'Kota hanya boleh huruf',
                'kota.min' => 'Kota minimal 4 karakter',
                'kota.max' => 'Kota maksimal 255 karakter',
                'kota.regex' => 'Kota hanya boleh huruf',

                'negara.required' => 'Negara wajib diisi',
                'negara.string' => 'Negara hanya boleh huruf',
                'negara.min' => 'Negara minimal 4 karakter',
                'negara.max' => 'Negara maksimal 255 karakter',
                'negara.regex' => 'Negara hanya boleh huruf',

                'kodepos.required' => 'Kode Pos wajib diisi',
                'kodepos.string' => 'Kode Pos hanya boleh angka',
                'kodepos.min' => 'Kode Pos minimal 5 angka',
                'kodepos.max' => 'Kode Pos maksimal 20 angka',
                'kodepos.regex' => 'Kode Pos hanya boleh angka',
            ]
        );


        $user->update([
            'username' => $request->username ?? $user->username,
            'email' => $request->email ?? $user->email,
            'nohp' => $request->nohp ?? $user->nohp,
            'alamat' => $request->alamat ?? $user->alamat,
            'kota' => $request->kota ?? $user->kota,
            'negara' => $request->negara ?? $user->negara,
            'kodepos' => $request->kodepos ?? $user->kodepos
        ]);

        return back();
    }
}
