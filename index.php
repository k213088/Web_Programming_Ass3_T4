<?php

class Vehicle {
    protected $make;
    protected $model;

    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }

    public function start() {
        echo "Starting the vehicle. <br>";
    }

    public function stop() {
        echo "Stopping the vehicle. <br>";
    }
}

class Car extends Vehicle {
    protected $fuelType;

    public function __construct($make, $model, $fuelType) {
        parent::__construct($make, $model);
        $this->fuelType = $fuelType;
    }

    public function accelerate() {
        echo "Accelerating the car. <br>";
    }
}

class Bicycle extends Vehicle {
    protected $numGears;

    public function __construct($make, $model, $numGears) {
        parent::__construct($make, $model);
        $this->numGears = $numGears;
    }

    public function ringBell() {
        echo "Ring the bell. <br>";
    }
}

class ElectricCar extends Car {
    protected $batteryCapacity;

    public function __construct($make, $model, $fuelType, $batteryCapacity) {
        parent::__construct($make, $model, $fuelType);
        $this->batteryCapacity = $batteryCapacity;
    }

    public function chargeBattery() {
        echo "Charging the battery. <br>";
    }
}

$car = new Car("Toyota", "Camry", "Gasoline");
$car->start();
$car->accelerate();
$car->stop();

$bicycle = new Bicycle("Giant", "Escape", 21);
$bicycle->start();
$bicycle->ringBell();
$bicycle->stop();

$electricCar = new ElectricCar("Tesla", "Model S", "Electric", "100 kWh");
$electricCar->start();
$electricCar->accelerate();
$electricCar->chargeBattery();
$electricCar->stop();

?>
