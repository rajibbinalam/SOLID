<?php

namespace App\Solid\SingleResponsibility;

use Illuminate\Support\Facades\DB;

class SaleReport{

    public function getSaleReport($startDate, $endDate){
        return DB::table('sales')
        ->whereBetween('created_at', [$startDate, $endDate])
        ->latest()
        ->get();

    }


    public function getSaleReportForMonth($month){
        return DB::table('sales')
        ->where('month', $month)
        ->latest()
        ->get();

    }


    public function getSaleReportForYear($year){
        return DB::table('sales')
        ->whereBetween('year', $year)
        ->latest()
        ->get();

    }
}






