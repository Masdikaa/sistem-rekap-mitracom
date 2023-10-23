<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{

    public function index()
    {
        $data = Kategori::all();
        // dd($data);
        return view('pages.datamaster.kategori.index', [
            'data' => $data
        ]);
    }
    
}
