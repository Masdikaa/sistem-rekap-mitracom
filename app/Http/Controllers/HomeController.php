<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\TotalCustomerChart;
use App\Charts\JenisBarangChart;

class HomeController extends Controller
{
    function index(TotalCustomerChart $totalCustomers,JenisBarangChart $jenisBarang) {
        
        // dd($totalCustomers);

        return view('pages.dashboard',[
            'totalCustomers' => $totalCustomers->build(),
            'jenisBarang'=> $jenisBarang->build()
        ]);

        //return view ('pages.dashboard');
    }
}