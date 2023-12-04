<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use ArielMejiaDev\LarapexCharts\BarChart;
use App\Models\Customer;
use App\Models\Barang;

class TotalCustomerChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): BarChart
{
    $barangData = Barang::selectRaw('COUNT(*) as count, MONTHNAME(tanggalMasuk) as month')
        ->groupBy('month')
        ->orderByRaw('MONTH(tanggalMasuk)')
        ->get();
    // $totalCustomers = Customer::count();

    $months = $barangData->pluck('month')->toArray();
    $counts = $barangData->pluck('count')->toArray();

    return $this->chart->barChart()
        ->addData('Data Customer', $counts)
        ->setHeight(350)
        ->setGrid()
        ->setXAxis($months);
}
}