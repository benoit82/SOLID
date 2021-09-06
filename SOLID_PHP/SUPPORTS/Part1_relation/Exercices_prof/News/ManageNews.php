<?php

class ManageNews
{
    private string $title;

    public function __construct(Log $log, string $title)
    {
        Log::addLog((new DateTime('now'))->format('d/m/y h:m:s'));
    }
}
