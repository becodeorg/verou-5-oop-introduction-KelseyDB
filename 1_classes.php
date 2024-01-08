<?php

declare(strict_types=1);

class Beverage {

  //properties
  public $color;
  public $price;
  public $temperature;

  //construct
  public function __construct(string $color, float $price, string $temp = "cold"){

    $this->color = $color;
    $this->temp = $temp;
    $this->price = $price;

  }

  //method
  public function getInfo () {
    echo "This beverage is $this->temp and $this->color";
  }

}

$cola = new Beverage("black", 2.0);

$cola->getInfo();
echo "<br> price is: $cola->price euro";
//I printed the price instead of the temp because the temp is alrdy printed above
