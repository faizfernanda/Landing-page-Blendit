<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{
    public function showForm()
    {
        return view('test'); // Nama view yang akan ditampilkan
    }

    public function showHome()
    {
        return view('main'); // Nama view yang akan ditampilkan
    }
}
