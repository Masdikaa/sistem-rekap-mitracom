<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use ArielMejiaDev\LarapexCharts\DonutChart;

class JenisBarangChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): DonutChart
    {
        $donutChart = $this->chart->donutChart()
            ->addData([40, 50, 30])
            ->setLabels(['Laptop', 'Printer', 'Computer']);

        return $donutChart;
    }
}