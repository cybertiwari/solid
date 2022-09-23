<?php
namespace App\Practical;

use App\Practical\OrderReport;

class TaxReport extends OrderReport{
   
    public function queryDb($startDate,$endDate)
    {
        $totalTax = $this->db->table('order_reports')->whereBetween('created_at',[$startDate,$endDate])->getOrders()->getTax()->getTotal();
        return $this->FormatHtml($totalTax);
    }
}