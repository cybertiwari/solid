<?php

use App\Practical\Database\MysqlDB;
use App\Practical\Export;
use App\Practical\InvoiceExport;
use App\Practical\OrderReport;
use App\Practical\TaxReport;

$router->get('/',function ()
{
    return view('index');
});
$router->get('/about',function ()
{
    return view('about');
});
$router->get('/order-report',function ()
{
    $startDate = '2021-11-10';
    $endDate = '2022-5-10';
    return (new OrderReport(new MysqlDB))->getOrderReport($startDate,$endDate);
});
$router->get('/tax-report',function ()
{
    $startDate = '2021-11-10';
    $endDate = '2022-5-10';
    return (new TaxReport(new MysqlDB))->queryDb($startDate,$endDate);
});
$router->get('/pdf-export',function ()
{
    $module = (new InvoiceExport)->getById(request('id'));
    return (new Export)->downloadPdfFile($module);
});
$router->get('/csv-export',function ()
{
    $module = (new InvoiceExport)->getById(request('id'));
    return (new Export)->downloadCSVFile($module);
});
