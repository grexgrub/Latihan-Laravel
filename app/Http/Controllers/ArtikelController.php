<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Request;
use App\Models\artikel;

class ArtikelController extends Controller
{
    public function __construct()
    {
        $artikel = new artikel();
    }



    public function index()
    {
        $artikel = new artikel();
        return view('main/home', [
            'artikel' => $artikel->findFirst(),
            'title' => 'artikel'
        ]);
    }

    public function myartikel()
    {
        $myartikel = new artikel();
        return view('main/myartikel', [
            'title' => 'myartikel',
        ]);
    }


    public function buatartikel()
    {
        $myartikel = new artikel();
        return view('main/buatartikel', [
            'title' => 'buatartikel',
        ]);
    }
}
