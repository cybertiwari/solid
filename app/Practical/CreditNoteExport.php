<?php
namespace App\Practical;

use App\Practical\Repository\ExportInterface;
use Exception;

class CreditNoteExport{
    public function getCreditNotCSV(){
        return __DIR__."creditnote.csv";
    }
}