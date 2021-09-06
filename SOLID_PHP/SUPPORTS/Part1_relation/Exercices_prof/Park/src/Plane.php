<?php

namespace Park;

final class Plane extends Vehicule
{
    protected string $category;

    public static function setSpeed(float $speed):void
    {
        self::$speed = $speed;
    }

    public static function speed(): float
    {
        return self::$speed;
    }

    public function setCategory(string $category):void{
        $this->category = $category;
    }

    public function __toString()
    {
        $strings = [];
        $string = [];
        $strings['Name'] = $this->getName();
        $strings['status'] = $this->getName();
        $strings['category'] = $this->category;
        $strings['speed'] = self::$speed;

        foreach ($strings as $name => $value)  $string[] = "$name: $value";

        return implode(', ', $string);
    }
}