<?php

namespace Class;

use Class\Traits\EspressoTrait;
use Class\Traits\IrishCoffeeTrait;

class MultiCoffeeMachine extends CoffeeMaker
{
  use IrishCoffeeTrait;

  use EspressoTrait;
}
