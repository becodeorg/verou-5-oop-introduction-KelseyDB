<?php

declare(strict_types=1);

require "Beverage.php" ;

$cola = new Beverage("black", 2.0);

$cola->getInfo();
echo "<br> price is: $cola->price euro";
echo "<br> Temp is: $cola->temp.";
