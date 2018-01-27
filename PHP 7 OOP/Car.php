<?php
class Vehicle {
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
}

class PassengerVehicle extends Vehicle {
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
}

class TransportationVehicle extends Vehicle {
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

var_dump($carObj);

?>