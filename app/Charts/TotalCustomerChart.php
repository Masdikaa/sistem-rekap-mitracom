<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Customer;

class TotalCustomerChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        // $totalCustomers = Customer::count();

        return $this->chart->barChart()
            ->addData('Data Customer', [1,12,2,11,3,10,4,9,5,8,6,7])
            ->setHeight(350)
            ->setGrid()
            ->setXAxis(['January', 'February', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember',]);
    }
}