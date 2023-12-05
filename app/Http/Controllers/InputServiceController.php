<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Kategori;
use Illuminate\Support\Facades\Auth;

class InputServiceController extends Controller
{
    public function index(Request $request)
    {
        $filters = $request->only('kategori', 'status', 'tanggalMasuk');

        $tanggalMasuk = $filters['tanggalMasuk'] ?? null;

        $data = Barang::filter($filters)
        ->when($tanggalMasuk, function ($query) use ($tanggalMasuk) {
            return $query->whereMonth('tanggalMasuk', $tanggalMasuk);
        })
        ->orderBy('idBarang', 'desc')
        ->get();

        return view("pages.service.index", [
            "data" => $data,
        ]);
    }
    public function create()
    {
        // Get kategori from datamaster
        $kategori = Kategori::all();
        return view("pages.service.create", [
            "kategori" => $kategori,
        ]);
    }

    public function store(Request $request)
    {
            $user = auth()->user();

            $namaCustomer = $request->input('namaCustomer');
            $noHP = $request->input('noHP');
        
            $existingCustomer = Customer::where('namaCustomer', $namaCustomer)
            ->where('noHP', $noHP)
            ->first();

        if ($existingCustomer) {
            $idCustomer = $existingCustomer->idCustomer;
        } else {
            $customer = new Customer;
            $customer->namaCustomer = $namaCustomer;
            $customer->noHP = $noHP;
            $customer->alamat = $request->input('alamat');
            $customer->save();
            $idCustomer = $customer->idCustomer;
        }
            $barang = new Barang;
            $barang->namaBarang = $request->input('namaBarang'); 
            $barang->idKategori = $request->input('kategori');
            $barang->kelengkapan = $request->input('kelengkapan');
            $barang->tanggalMasuk = $request->input('tanggalMasuk');
            $barang->idUser = $user->idUser;
            $barang->idCustomer = $idCustomer;

            $barang->save();
            return redirect()->route('input-service.index');
    }

    public function detail($id)
    {
        $barang = Barang::with('customer')->findOrFail($id);
        return response()->json(['barang' => $barang]);
    }

    public function fix(Request $request, $id) {

        $data = Barang::findOrFail($id);
        $data->update([
            'kerusakan' => $request->input('kerusakan'),
            'estimasiBiaya' => $request->input('estimasiBiaya'),
            'tanggalEstimasi' => $request->input('tanggalEstimasi'),
            'status' => 'selesaicek',
        ]);

        return redirect()->back()->with('success', 'Data updated successfully');
    }

    public function batal(Request $request, $id) {

        $data = Barang::findOrFail($id);
        $data->update([
            'alasanBatal' => $request->input('alasanBatal'),
            'status' => 'batal',
        ]);

        return redirect()->back()->with('success', 'Data updated successfully');
    }
    public function proses(Request $request, $id) {

        $data = Barang::findOrFail($id);
        $data->update([
            'status' => 'perbaikan',
        ]);

        return redirect()->back()->with('success', 'Data updated successfully');
    }
    public function selesai(Request $request, $id) {

        $data = Barang::findOrFail($id);
        $data->update([
            'biayaPerbaikan' => $request->input('biayaPerbaikan'),
            'tanggalAmbil' => $request->input('tanggalAmbil'),
            'status' => 'selesai',
        ]);

        return redirect()->back()->with('success', 'Data updated successfully');
    }
}