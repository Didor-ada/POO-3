<?php

require_once 'Highway.php';
final class MotorWay extends Highway
{
    public function __construct(int $nbLane = 4, int $maxSpeed = 130)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicles(object $vehicle)
    {
        // TODO: Implement addVehicles() method.

        if ($vehicle instanceof Car || $vehicle instanceof truck){
            $this->currentVehicles[]=$vehicle;
        }
    }
}