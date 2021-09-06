<?php

namespace Park;

use Park\Parkable;

class Parking
{
    private \SplObjectStorage $storage;

    public function __construct()
    {
        $this->storage = new \SplObjectStorage();
    }

    public function addPark(Parkable $p): void
    {
        if ($this->storage->contains($p)) {
            throw new \Error("Mobile already parked");
        }

        $this->storage->attach($p);
    }

    public function removePark(Parkable $p): void
    {
        if ($this->storage->contains($p)) {
            $this->storage->detach($p);
        }
    }

    public function __toString()
    {
        return (string)  $this->storage->count();
    }

    public function getAll():string
    {
        $strings = [];
        $this->storage->rewind();
        while ($this->storage->valid()) {
            $strings[] = $this->storage->current()->getName(); // similaire à current($s)
            $this->storage->next();
        }

        return join(' ', $strings);
    }
}
