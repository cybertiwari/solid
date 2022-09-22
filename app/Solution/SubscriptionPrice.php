<?php
namespace App\Solution;

use App\Solution\Repository\PackageInterface;

class SubscriptionPrice {
    
    public function getSubscriptionPrice(PackageInterface $package)
    {
        return $package->getPrice();
    }
}