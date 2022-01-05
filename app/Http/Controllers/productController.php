<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class productController extends Controller
{
    public function index()
    {
        // $tanaman = Http::get('http://127.0.0.1:8000/api/tanaman-hias');
        // $dataTanaman = $tanaman->json();

        return view('frontend/product', compact('dataTanaman'));
    }
}
