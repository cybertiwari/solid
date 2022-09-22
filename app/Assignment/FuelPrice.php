<?php
namespace App\Assignment;

use App\Assignment\CngCar;
use App\Assignment\DieselCar;
use App\Assignment\PetrolCar;

class FuelPrice {
    public function getFuelPrice($car)
    {
        switch (true) {
            case $car instanceof PetrolCar:
                return $car->getPetrolPrice();
            case $car instanceof DieselCar:
                return $car->getDieselPrice();
            case $car instanceof CngCar:
                return $car->getCngPrice();
            default:
                throw new \InvalidArgumentException('Unknown car');
        }
    }
}