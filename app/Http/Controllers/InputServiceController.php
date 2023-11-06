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
        $kategori = Kategori::pluck('kategori');
        // $status = Barang::whereIn('status', ['selesai', 'batal', 'perbaikan', 'pengecekan'])->get();

        return view("pages.input-service", [
            "kategori" => $kategori,
            // "status" => $status
        ]);

        return view("pages.input-service");
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // Insert to table customer
        $customer = Customer::create([
            'namaCustomer' => ($request->input('nama-customer')),
            'noHP' => $request->input('hp-customer'),
            'alamat' => $request->input('alamat-customer'),
        ]);

        $customer->relasiCustomer()->create([
            'namaCustomer' => ($request->input('nama-customer')),
            'noHP' => $request->input('hp-customer'),
            'alamat' => $request->input('alamat-customer'),
        ]);

        // Inset to table barang
        $barang = Barang::create([
            'namaBarang' => ($request->input('namaBarang')),
            'kerusakan' => $request->input('kerusakan'),
            'kelengkapan' => $request->input('kelengkapan'),
            'estimasiBiaya' => $request->input('estimasiBiaya'),
            'tanggalMasuk' => $request->input('tanggalMasuk'),
            'tanggalEstimasi' => $request->input('tanggalEstimasi'),
            'tanggalAmbil' => $request->input('tanggalAmbil'),
            'biayaPerbaikan' => $request->input('biayaPerbaikan'),
            // 'status' => $request->input('status'),
            'status' => $request->input(strtolower('status')),
        ]);

        $barang->relasiBarang()->create([
            'namaBarang' => ($request->input('namaBarang')),
            'kerusakan' => $request->input('kerusakan'),
            'kelengkapan' => $request->input('kelengkapan'),
            'estimasiBiaya' => $request->input('estimasiBiaya'),
            'tanggalMasuk' => $request->input('tanggalMasuk'),
            'tanggalEstimasi' => $request->input('tanggalEstimasi'),
            'tanggalAmbil' => $request->input('tanggalAmbil'),
            'biayaPerbaikan' => $request->input('biayaPerbaikan'),
            'status' => $request->input('status'),
        ]);


        return redirect()->route('home');
    }
}