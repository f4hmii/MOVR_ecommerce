<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    
        $produkTerbaru = Produk::latest()->take(2)->get();


        $produkUnggulan = Produk::inRandomOrder()->take(2)->get();

        return view('home', compact('produkTerbaru', 'produkUnggulan'));
    }
}
