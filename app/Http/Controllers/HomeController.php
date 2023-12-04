<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\TotalCustomerChart;
use App\Charts\JenisBarangChart;
use App\Models\Barang;

class HomeController extends Controller
{
    function index(TotalCustomerChart $totalCustomers,JenisBarangChart $jenisBarang) {
        
        // dd($totalCustomers);

        return view('pages.dashboard',[
            'totalCustomers' => $totalCustomers->build(),
            'jenisBarang'=> $jenisBarang->build(),
            'barangSelesai' => Barang::where('status','Selesai')->count(),
            'barangPengecekan' => Barang::where('status','Pengecekan')->count(),
            'barangPerbaikan' => Barang::where('status','Perbaikan')->count(),
            'barangBatal' => Barang::where('status','Batal')->count(),

        ]);

        //return view ('pages.dashboard');
    }
}