<?php

declare(strict_types=1);

class Beverage {

  //properties
  public $color;
  public $price;
  public $temp;

  //construct
  public function __construct(string $color, float $price, string $temp = "cold"){

    $this->color = $color;
    $this->temp = $temp;
    $this->price = $price;

  }

  //method
  public function getInfo () {
    echo "<br> This beverage is $this->temp and $this->color";
  }

}
