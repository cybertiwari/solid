<?php
namespace App\Practical;

use App\Practical\Database\MysqlDB;

class OrderReport {

    protected $db;
    public function __construct(
        MysqlDB $db
    ) {
        $this->db = $db;
    }

    public function getOrderReport($startDate,$endDate)
    {
        $report = $this->queryDb($startDate,$endDate);
        return $this->FormatHtml($report->getTotal());
    }
    public function queryDb($startDate,$endDate)
    {
        return $this->db->table('order_reports')->whereBetween('created_at',[$startDate,$endDate])->getOrders();
    }
    public function FormatHtml($report)
    {
        return "<h1>{$report}</h1>";
    }
}