<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        
        return view('pages.dashboard');
    }

    // function show($id) {
    //     $ebook = Buku::find($id);
    //     return view('show-ebook', [
    //         'ebook' => $ebook
    //     ]);
    // }
}
