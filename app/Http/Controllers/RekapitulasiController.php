<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class RekapitulasiController extends Controller
{
    public function index(Request $request)
    {
        $month = $request->input('month');
        $year = $request->input('year');

        $data = Barang::whereYear('tanggalMasuk', $year)
            ->whereMonth('tanggalMasuk', $month)
            ->orderBy('tanggalMasuk')
            ->get();

        return view('pages.rekapitulasi', compact('data'));
    }

    public function print($year, $month)
    {
        // Fetch the data based on the year and month
        $data = Barang::whereYear('tanggalMasuk', $year)
            ->whereMonth('tanggalMasuk', $month)
            ->where('status', 'selesai')
            ->get();

            $monthName = date('F', mktime(0, 0, 0, $month, 1));


        // Return the print view with the fetched data
        // return view('pages.print-rekap', compact('data'));
        return view("pages.print-rekap", [
            "data" => $data,
            "tahun" => $year,
            "bulan" => $monthName,
        ]);
    }

}