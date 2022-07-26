<?php

namespace Class\Traits;

trait EspressoTrait
{
  public function makeEspresso(): string
  {
    return static::class . ' fait un espresso.';
  }
}
