<?php

class Vehicle {
    public function start() {

    }
    public function stop () {

    }

}

// Inheritance 
// Object -> is a -> object


class Car extends Vehicle {

}

class Bike extends Vehicle {
    
}




class User extends Vehicle {
    public $role;
    public function login(){

    }
}


class Employee extends User {
    public string $name;
    public string $address;
    public string $dob;

    public function getAge()  {
        //calculate age base on 'dob'


    }

}


$employee = new Employee();
$employee->login();





