<?php
namespace App\Practical\Repository;

interface ExportInterface{
    public function getPDF();
    
    public function getCSV();
}