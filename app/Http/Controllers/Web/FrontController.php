<?php

namespace App\Http\Controllers\Web;

use App\Artikel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kategori;

class FrontController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        $artikel = Artikel::latest()->get()->random(2);
        $artikelTerkait = Artikel::latest()->limit(5)->get();
        $totalArtikel = Artikel::latest()->get();
        return view('front', compact('kategori', 'artikel', 'totalArtikel', 'artikelTerkait'));
    }
}
