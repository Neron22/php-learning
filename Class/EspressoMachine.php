<?php

namespace Class;

class EspressoMachine extends CoffeeMaker
{
  public function makeEspresso(): string
  {
    return static::class . ' fait un espresso.';
  }
}
