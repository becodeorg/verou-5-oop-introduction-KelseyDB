<?php

declare(strict_types=1);

/* EXERCISE 4

Copy the code of exercise 2 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.

USE TYPEHINTING EVERYWHERE!
*/


class Beverage {

  protected $color;
  protected $price;
  protected $temp;

  public function __construct(string $color, float $price, string $temp = "cold"){

    $this->color = $color;
    $this->temp = $temp;
    $this->price = $price;

  }

  public function getInfo () {
    echo "<br> This beverage is $this->temp and $this->color";
  }
}

class Beer extends Beverage {

  protected $name;
  protected $alcoholPercentage;

  public function __construct(string $color, float $price, string $name, float $alcoholPercentage, string $temp = "cold") {

    //call parent construct
    parent::__construct($color, $price, $temp);

    $this->name = $name;
    $this->alcoholPercentage = $alcoholPercentage;
  }

  public function getAlcoholPercentage () {
    return $this->alcoholPercentage;
  }
  public function getColor(){
    return $this->color;
  }

}

$duvel = new Beer("blond", 3.5, "Duvel", 8.5);

$duvel->getInfo();

// echo "<br> The alcohol% = $duvel->alcoholPercentage.";
echo "<br> The alcohol% is " . $duvel->getAlcoholPercentage();
echo "<br> The color is " . $duvel->getColor();
