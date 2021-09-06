<?php

spl_autoload_register(function ($class) {
    include __DIR__ .'/'.$class.'.php';
});

$circle = new Circle();

$circle->setColor($red);

echo $circle->getColor()->getName() . "\n"; 

$circle->setColor($blue);

echo $circle->getColor()->getName() . "\n"; 
