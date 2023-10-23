<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KategoriController extends Controller
{

    public function index()
    {
        $data = Kategori::all();
        return view('pages.datamaster.kategori.index', [
            'data' => $data
        ]);
    }

    //Create Page
    public function create()
    {
        return view('pages.datamaster.kategori.create',);
    }

    public function store(Request $request)
    {
        $category = Kategori::create([
            'kategori' => ($request->input('category'))
        ]);

        return redirect()->route('datamaster-kategori.index');
    }
}
