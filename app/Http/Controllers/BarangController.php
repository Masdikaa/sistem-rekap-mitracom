<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        // Logic for displaying a view
        return view('pages.datamaster.master-barang');
    }
}
