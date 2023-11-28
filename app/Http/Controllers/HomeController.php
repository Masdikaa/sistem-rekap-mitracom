<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\TotalCustomerChart;

class HomeController extends Controller
{
    function index(TotalCustomerChart $totalCustomers) {
        
        // dd($totalCustomers);

        return view('pages.dashboard',[
            'totalCustomers' => $totalCustomers->build(),
        ]);
    }
}