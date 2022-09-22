<?php
namespace App\Assignment\Repository;

interface ExportableInterface
{
    public function getPDF();

    public function getCSV();
}
