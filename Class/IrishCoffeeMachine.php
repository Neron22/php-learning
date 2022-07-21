<?php

namespace Class;

class IrishCoffeeMachine extends CoffeeMaker
{
  public function makeIrishCoffee(): string
  {
    return static::class . ' fait un Irish coffee.';
  }
}
