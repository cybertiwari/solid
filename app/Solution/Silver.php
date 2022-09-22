<?php
namespace App\Solution;

use App\Solution\Repository\PackageInterface;

class Silver implements PackageInterface
{
    public function getPrice()
    {
        return $this->getSilverPrice();
    }
    public function getSilverPrice()
    {
        return '80Rs';
    }
}
