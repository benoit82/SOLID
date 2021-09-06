<?php

namespace Park;

final class Car extends Vehicule
{
    private string $park = '';

    public function park(string $address, string $place)
    {
        $this->park = "address: $address, place: $place";
    }

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
        $strings['park'] = $this->park;
        $strings['speed'] = self::$speed;

        foreach ($strings as $name => $value)  $string[] = "$name: $value";

        return implode(', ', $string);
    }
}
