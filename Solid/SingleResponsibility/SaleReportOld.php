<?php

namespace App\Solid\SingleResponsibility;

use Illuminate\Support\Facades\DB;

class SaleReportOld{

    public function getSaleReport($startDate, $endDate, $type = 'csv'){
        $sales = DB::table('sales')
        ->whereBetween('created_at', [$startDate, $endDate])
        ->latest()
        ->get();


        // Export the sales
        if($type == 'csv'){
            return 'csv of ' . $sales;
        }
        if($type == 'pdf'){
            return 'pdf of ' . $sales;
        }

        if($type == 'xls'){
            return 'xls of ' . $sales;
        }

    }
}






