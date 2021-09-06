<?php

class Circle
{
    private Color $color;

    public function getColor(): Color
    {

        return $this->color;
    }

    public function setColor(Color $color)
    {

        return $this->color = $color;
    }
}