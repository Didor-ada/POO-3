<?php

require_once 'Highway.php';
final class ResidentialWay extends Highway
{
    public function __construct(int $nbLane = 2, int $maxSpeed = 50)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicles(object $vehicle)
    {
        // TODO: Implement addVehicles() method.

        if ($vehicle instanceof Vehicle) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}