<?php
namespace App\Solution;

use App\Solution\Repository\PackageInterface;

class Gold implements PackageInterface
{
    public function getPrice()
    {
        return $this->getGoldPrice();
    }
    
    public function getGoldPrice()
    {
        return '90Rs';
    }
}
