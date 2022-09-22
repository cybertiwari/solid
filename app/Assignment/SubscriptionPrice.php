<?php
namespace App\Assignment;

use App\Assignment\Gold;
use App\Assignment\Silver;
use App\Assignment\Platinum;

class SubscriptionPrice {
    public function getSubscriptionPrice($package)
    {
        switch (true) {
            case $package instanceof Platinum:
                return $package->getPlatinumPrice();
            case $package instanceof Gold:
                return $package->getGoldPrice();
            case $package instanceof Silver:
                return $package->getSilverPrice();
            default:
                throw new \InvalidArgumentException('Unknown Package');
        }
    }
}