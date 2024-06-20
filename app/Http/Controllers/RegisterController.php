<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class RegisterController extends Controller
{
    public function postRegister(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'email' => 'required|string',
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:6|max:20',
        ]);

        // URL endpoint API untuk permintaan POST
        $apiUrl = "http://vps.danar.site:8080/register"; // Gantilah dengan URL API yang benar

        // Siapkan data untuk permintaan POST
        $postData = [
            'email' => $validatedData['email'],
            'username' => $validatedData['name'],
            'password' => $validatedData['password'],
        ];

        try {
            // Buat instance klien Guzzle baru
            $client = new Client();

            // Lakukan permintaan POST ke API
            $response = $client->post($apiUrl, [
                'form_params' => $postData
            ]);

            // Dapatkan badan respons sebagai array
            $data = json_decode($response->getBody(), true);

             // Simpan pesan sukses di session flash data
             return redirect()->back()->with('success', 'Registration successful!');
             // atau $data jika ingin menyimpan respons
        } catch (\Exception $e) {
            // Simpan pesan kesalahan di session flash data
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
