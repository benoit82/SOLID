<?php

namespace Park;

use TypeError;

abstract class Vehicule
{
    protected string $status;
    protected string $name;
    protected string $engine;
    protected static float $speed;

    abstract static public function speed(): float;
    abstract static public function setSpeed(float $speed): void;
    abstract public function __toString();

    public function __construct(string $name)
    {
        $this->setName($name);
    }

    /**
     * Get the value of status
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */
    public function setStatus(string $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of engine
     */
    public function getEngine(): string
    {
        return $this->engine;
    }

    /**
     * Set the value of engine
     *
     * @return  self
     */
    public function setEngine(string $engine): self
    {
        if (!in_array($engine, ['petrol', 'electric']))
            throw new TypeError("engine value must be electric or petrol");

        $this->engine = $engine;

        return $this;
    }
}
