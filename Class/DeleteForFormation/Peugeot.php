<?php

namespace Class;

class Peugeot extends Vehicule
{
  public function marque(): string
  {
    return 'Je suis un véhicule français et je roule en ' . $this->marque . '.';
  }
}
