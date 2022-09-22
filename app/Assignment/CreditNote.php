<?php
namespace App\Assignment;

use App\Assignment\Repository\ExportableInterface;

class CreditNote implements ExportableInterface
{
    //Credit note never support PDF don't call this function
    public function getPDF() {
        throw new \Exception('PDF File is not available');
    }
    public function getCSV() {
        return 'CSV file';
    }
}