<?php

abstract class Vehicle {
    abstract public function getBaseFare ():int;

    abstract public function getPeraKiloFare():int;

    public function getTotal(int $kilo)  {
        return $this->getBaseFare() + ($kilo * $this->getPeraKiloFare());
    }
}

class Car extends Vehicle {
    public function getBaseFare(): int
    {
        return 50;

    }
     public function getPeraKiloFare():int {
        return 10;
    }
}

class Byke extends Vehicle {
    public function getBaseFare(): int
    {
        return 20;
        
    }
    public function getPeraKiloFare():int {
        return 5;
    }
}

class CNG extends Vehicle {
    public function getBaseFare(): int
    {
        return 30;
        
    }
    public function getPeraKiloFare():int {
        return 7;
    }
}


$car = new Car();
$total = $car->getTotal(kilo:5);

var_dump($total);