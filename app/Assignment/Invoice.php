<?php
namespace App\Assignment;

use App\Assignment\Repository\ExportableInterface;

class Invoice implements ExportableInterface
{
    public function getPDF() {
        return 'PDF file';
    }
    public function getCSV() {
        return 'CSV file';
    }
}
