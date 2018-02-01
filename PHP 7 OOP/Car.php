<?php
abstract class Vehicle {
    private $noOfWheels;
    private $color;
    private $fuel;
    private $speed;

    /**
     * @param mixed $noOfWheels
     */
    public function setNoOfWheels($noOfWheels)
    {
        $this->noOfWheels = $noOfWheels;
    }

    /**
     * @return mixed
     */
    public function getNoOfWheels()
    {
        return $this->noOfWheels;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getFuel()
    {
        return $this->fuel;
    }

    /**
     * @param mixed $fuel
     */
    public function setFuel($fuel)
    {
        $this->fuel = $fuel;
    }

    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param mixed $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    public function start() {
        echo "vehicle is starting... <br>";
    }

    public function  accelerate() {
        echo "vehicle is accelerating... <br>";
    }

    public function brake() {
        echo "vehicle is stopping... <br>";
    }

    abstract function doMaintenance(); // metoda musi być zaimplementowana w klasach dziedziczących
}

abstract class PassengerVehicle extends Vehicle {
    private $passengerSeats;

    /**
     * @return mixed
     */
    public function getPassengerSeats()
    {
        return $this->passengerSeats;
    }

    /**
     * @param mixed $passengerSeats
     */
    public function setPassengerSeats($passengerSeats)
    {
        $this->passengerSeats = $passengerSeats;
    }
}

class Bike extends PassengerVehicle {
    private $saddleHeight;

    /**
     * @return mixed
     */
    public function getSaddleHeight()
    {
        return $this->saddleHeight;
    }

    /**
     * @param mixed $saddleHeight
     */
    public function setSaddleHeight($saddleHeight)
    {
        $this->saddleHeight = $saddleHeight;
    }

    public function accelerate()
    {
        echo "Bike is accelerate<br>";
    }

    public function brake()
    {
        parent::brake();
        echo "Brake method from bike class ... <br>";
    }

    public function doMaintenance() {
        echo "Bike is in maintenance";
    }

}

class Car extends PassengerVehicle {
    private $noOfDoors;

    /**
     * @return mixed
     */
    public function getNoOfDoors()
    {
        return $this->noOfDoors;
    }

    /**
     * @param mixed $noOfDoors
     */
    public function setNoOfDoors($noOfDoors)
    {
        $this->noOfDoors = $noOfDoors;
    }

    public function doMaintenance() {
        echo "Car is in maintenance";
    }
}

class AnotherCar extends PassengerVehicle {
    private $noOfDoors;

    /**
     * @return mixed
     */
    public function getNoOfDoors()
    {
        return $this->noOfDoors;
    }

    /**
     * @param mixed $noOfDoors
     */
    public function setNoOfDoors($noOfDoors)
    {
        $this->noOfDoors = $noOfDoors;
    }

    public function doMaintenance()
    {
        // TODO: Implement doMaintenance() method.
    }

}

abstract class TransportationVehicle extends Vehicle {
    private $noOfDoors;
    private $loadCapacity;

    /**
     * @return mixed
     */
    public function getNoOfDoors()
    {
        return $this->noOfDoors;
    }

    /**
     * @param mixed $noOfDoors
     */
    public function setNoOfDoors($noOfDoors)
    {
        $this->noOfDoors = $noOfDoors;
    }

    /**
     * @return mixed
     */
    public function getLoadCapacity()
    {
        return $this->loadCapacity;
    }

    /**
     * @param mixed $loadCapacity
     */
    public function setLoadCapacity($loadCapacity)
    {
        $this->loadCapacity = $loadCapacity;
    }
}

class Van extends TransportationVehicle {
    private $noOfBoxes;

    /**
     * @return mixed
     */
    public function getNoOfBoxes()
    {
        return $this->noOfBoxes;
    }

    /**
     * @param mixed $noOfBoxes
     */
    public function setNoOfBoxes($noOfBoxes)
    {
        $this->noOfBoxes = $noOfBoxes;
    }

    public function doMaintenance() {
        echo "Van is in maintenance";
    }
}

class Truck extends TransportationVehicle {
    private $sizeOfContainer;

    /**
     * @return mixed
     */
    public function getSizeOfContainer()
    {
        return $this->sizeOfContainer;
    }

    /**
     * @param mixed $sizeOfContainer
     */
    public function setSizeOfContainer($sizeOfContainer)
    {
        $this->sizeOfContainer = $sizeOfContainer;
    }

    public function doMaintenance() {
        echo "Truck is in maintenance";
    }
}

$carObj = new Car();
$carObj->setNoOfWheels(4);
$carObj->setColor('White');
$carObj->setFuel("Petrol");
$carObj->setSpeed(75);
$carObj->setPassengerSeats(5);
$carObj->setNoOfDoors(2);
$carObj->start();
$carObj->accelerate();
$carObj->brake();

//var_dump($carObj);

$bikeObj = new Bike();
$bikeObj->setNoOfWheels(2);
$bikeObj->setColor("Black");
$bikeObj->setFuel("Petrol");
$bikeObj->setSpeed(0);
$bikeObj->setPassengerSeats(2);
$bikeObj->setSaddleHeight(2);
$bikeObj->start();
$bikeObj->accelerate();
$bikeObj->brake();

//$vehicleObj = new Vehicle();
$vanObj = new Van();
$truckObj = new Truck();

$carObj->doMaintenance();
echo "<br>";
$vanObj->doMaintenance();
echo "<br>";
$bikeObj->doMaintenance();
echo "<br>";
$truckObj->doMaintenance();
echo "<br>";
$anotherCarObj = new AnotherCar();
echo "<br>";



?>