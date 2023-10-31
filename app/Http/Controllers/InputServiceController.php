<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Kategori;

class InputServiceController extends Controller
{
    public function index()
    {
        // Get kategori from datamaster
        // $kategori = Kategori::pluck('kategori');
        // $status = Barang::whereIn('status', ['selesai', 'batal', 'perbaikan', 'pengecekan'])->get();

        // return view("pages.input-service", [
        //     "kategori" => $kategori,
        //     "status" => $status
        // ]);

        return view("pages.input-service");
    }

    public function store(Request $request)
    {
        $customer = Customer::create([
            'namaCustomer' => ($request->input('nama-customer')),
            'noHP' => $request->input('hp-customer'),
            'alamat' => $request->input('alamat-customer'),
        ]);

        return redirect()->route('home');
    }
}
