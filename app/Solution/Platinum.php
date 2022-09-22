<?php
namespace App\Solution;

use App\Solution\Repository\PackageInterface;

class Platinum implements PackageInterface
{
    public function getPrice()
    {
        return $this->getPlatinumPrice();
    }
    public function getPlatinumPrice()
    {
        return '100Rs';
    }
}
