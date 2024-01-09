<?php

declare(strict_types=1);

/* EXERCISE 5

Copy the class of exercise 1.

TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/


class Beverage {

  //properties
  private $color;
  private $price;
  private $temp;

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
  public function giveMeThePrice(){
    return $this->price;
  }
  public function thePriceChanges(float $newPrice){
    $this->price = $newPrice;
  }
  public function theTemp(){
    return $this->temp;
  }
}

$cola = new Beverage("black", 2.0);

$cola->getInfo();

echo "<br> The price is: " . $cola->giveMeThePrice() . " euro";

$cola->thePriceChanges(3.5);

echo "<br> The new price is: " . $cola->giveMeThePrice() . " euro";

echo "<br> Temperature is: " . $cola->theTemp() . ".";
