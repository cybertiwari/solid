<?php
namespace App\Practical;


class InvoiceExport{
    public function getInvoicePDF(){
        return __DIR__."/invoice.pdf";
    }
    
    public function getInvoiceCSV(){
        return __DIR__."/invoice.csv";
    }

    public function getById($id)
    {
        return $this;
    }
}