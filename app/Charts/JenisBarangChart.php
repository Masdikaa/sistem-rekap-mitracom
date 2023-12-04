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
        $jenisBarang = $this->chart->pieChart()
            ->addData([40, 50, 30])
            ->setHeight(410)
            ->setLabels(['Laptop', 'Printer', 'Computer']);
        
        return $jenisBarang;
    }
}