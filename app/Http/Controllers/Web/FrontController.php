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
        $totalArtikel = Artikel::latest()->limit(4)->get();
        return view('front', compact('kategori', 'artikel', 'totalArtikel', 'artikelTerkait'));
    }

    public function show(Artikel $judul)
    {
        $artikelDetail = $judul;
        // $kategori = Kategori::all();
        $artikelTerkait = Artikel::latest()->get()->random(3);
        $kategori = Kategori::withCount('Artikel')->get();
        return view('front.artikel_detail', compact('artikelDetail', 'kategori', 'artikelTerkait'));
    }

    public function artikelKategori(Kategori $kategori)
    {
        $totalArtikel = $kategori->Artikel()->get();
        $kategori = Kategori::all();
        $artikel = Artikel::latest()->get()->random(2);
        $artikelTerkait = Artikel::latest()->limit(5)->get();
        return view('front', compact('kategori', 'artikel', 'totalArtikel', 'artikelTerkait'));
    }
}
