<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class RekapitulasiController extends Controller
{
    public function index()
    {
        // Get kategori from datamaster
        $data = Barang::with('customer')->where('status', 'selesai')->get();
        return view("pages.rekapitulasi", [
            "data" => $data,
        ]);
    }
}