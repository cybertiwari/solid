<?php
namespace App\Practical;

class Export {
    public function downloadPdfFile($exportModule)
    {
        $file = $exportModule->getInvoicePDF();
        header('Content-Type: application/octet-stream');  
        header("Content-Transfer-Encoding: utf-8");   
        header("Content-disposition: attachment; filename=\"" . basename($file) . "\"");   
        readfile($file);  
    }
    public function downloadCSVFile($exportModule)
    {
        $file = $exportModule->getInvoiceCSV();
        header('Content-Type: application/octet-stream');  
        header("Content-Transfer-Encoding: utf-8");   
        header("Content-disposition: attachment; filename=\"" . basename($file) . "\"");   
        readfile($file);  
    }
}