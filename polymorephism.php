

// 1. Method overloading (compile time polymorphim) Not supported same method don't diclare
// 2. Method overloading (Run time polymorphim)



<?php

abstract class Vehicle {
   abstract public function getBaseFare ():int;

    abstract public function getPeraKiloFare():int;


    public function getTotal(int $kilo)  {
        return $this->getBaseFare() + ($kilo * $this->getPeraKiloFare());
    }
    
    // public function getTotal(int $kilo, int $discount) {

    // } // (compile time polymorphim)

}

// (new Vehicle(())->getTotal(kilo:1);
// (new Vehicle(())->getTotal(kilo:1, discount:10);

interface HourlyRentable {
    public function getHourlyRate():int;
}
interface DailyRentable {
    public function getDailyRate():int;
}


class Car extends Vehicle implements HourlyRentable , DailyRentable{
    public function getBaseFare(): int
    {
        return 50;

    }

     public function getPeraKiloFare():int {
        return 10;
    }

    public function getHourlyRate(): int
    {
        return 100 ;
    }
    public function getDailyRate(): int
    {
     return 100;   
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

class CNG extends Vehicle implements HourlyRentable{
    public function getBaseFare(): int
    {
        return 30;
        
    }
    public function getPeraKiloFare():int {
        return 7;
    }

    public function getHourlyRate(): int
    {
        return 50;
    }

}


$car = new Car();
$total = $car->getTotal(kilo:5);

var_dump($total);

