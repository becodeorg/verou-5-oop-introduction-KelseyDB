<?php

declare(strict_types=1);

/* EXERCISE 3

TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

TODO: Print this method on the screen on a new line.

USE TYPEHINTING EVERYWHERE!
*/

class Beverage {

  private $color;
  private $price;
  private $temp;

  public function __construct(string $color, float $price, string $temp = "cold"){

    $this->color = $color;
    $this->temp = $temp;
    $this->price = $price;

  }

  public function getInfo () {
    echo "<br> This beverage is $this->temp and $this->color";
  }
  public function getColor(){
    return $this->color;
  }
  public function changeColor(string $newColor){
    $this->color = $newColor;
  }

}

class Beer extends Beverage {

  private $name;
  private $alcoholPercentage;

  public function __construct(string $color, float $price, string $name, float $alcoholPercentage, string $temp = "cold") {

    //call parent construct
    parent::__construct($color, $price, $temp);

    $this->name = $name;
    $this->alcoholPercentage = $alcoholPercentage;
  }

  public function getAlcoholPercentage () {
    return $this->alcoholPercentage;
  }


  private function beerInfo() {
    return "Hi I'm $this->name and have an alcohol percentage of $this->alcoholPercentage and I have a " . $this->getColor() . " color.";
  }
  public function getBeerInfo() {
    return $this->beerInfo();
  }

}

$duvel = new Beer("blond", 3.5, "Duvel", 8.5);

$duvel->getInfo();
$duvel->getColor();


// echo "<br> The alcohol% = $duvel->alcoholPercentage.";
echo "<br> The alcohol% is " . $duvel->getAlcoholPercentage();
echo "<br> The color is " . $duvel->getColor();

$duvel->changeColor("light");
echo "<br> The new color is " . $duvel->getColor();

echo "<br>" . $duvel->getBeerInfo();