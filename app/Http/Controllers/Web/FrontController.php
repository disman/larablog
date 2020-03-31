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
        return view('front', compact('kategori', 'artikel'));
    }
}
