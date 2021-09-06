<?php

namespace Park;

final class Ferry extends Vehicule implements Navigable
{
    private Parking $parking;

    public static function setSpeed(float $speed): void
    {
        self::$speed = $speed;
    }

    public static function speed(): float
    {
        return self::$speed;
    }

    //Kia electric status: stop, park address: place chateau, place : 56A
    public function __toString()
    {
        $strings = [];
        $string = [];
        $strings['Name'] = $this->getName();
        $strings['status'] = $this->getName();
        $strings['speed'] = self::$speed;

        foreach ($strings as $name => $value)  $string[] = "$name: $value";

        return implode(', ', $string);
    }

    public function addParking(Parking $parking):void
    {
        $this->$parking = $parking;
    }
}
