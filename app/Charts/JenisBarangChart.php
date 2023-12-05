<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use ArielMejiaDev\LarapexCharts\PieChart;
use App\Models\Barang;

class JenisBarangChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): PieChart
    {
        $barangData = Barang::selectRaw('COUNT(*) as count, idKategori')
            ->groupBy('idKategori')
            ->get();

        $categories = $barangData->pluck('idKategori')->toArray();
        $counts = $barangData->pluck('count')->toArray();

       // dd($categories);

        $jenisBarang = $this->chart->pieChart()
            ->addData([$counts[0], $counts[1], $counts[2]])
            ->setHeight(410)
            ->setLabels(['PC', 'Laptop', 'Printer']);
        
        return $jenisBarang;
    }
}