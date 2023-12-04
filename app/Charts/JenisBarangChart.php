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
            ->addData([40, 50, 30, 50, 891])
            ->setLabels(['L', 'P', 'C', 'B', 'A']);

        // Modify the options to hide the legend
        // $donutChart->setOptions([
        //     'legend' => [
        //         'show' => false, // Set show to false to hide the legend
        //     ],
        // ]);

        return $donutChart;
    }
}