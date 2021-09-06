<?php

class Color{

    private string $name;
    
    public function __construct(string $name)
    {
        $this->setName($name);
    }

    public function getName(): string
    {

        return $this->name;
    }

    public function setName(string $name)
    {

        return $this->name = $name;
    }

}