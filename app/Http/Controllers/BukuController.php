<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index() {
        $data_buku = Buku::all();
        $no = 0;
        return view('buku.index', compact('data_buku', 'no'));
    }
}
