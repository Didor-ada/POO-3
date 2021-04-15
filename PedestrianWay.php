<?php

require_once 'Highway.php';
final class PedestrianWay extends Highway
{
    public function __construct(int $nbLane = 1, int $maxSpeed = 10)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicles(object $vehicle)
    {
        // TODO: Implement addVehicles() method.

        if ($vehicle instanceof Skateboard || $vehicle instanceof Bike) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}