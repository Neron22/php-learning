<?php

namespace Class;

abstract class Vehicule
{
  public function __construct(protected string $marque)
  {}

  public function rouler(): string
  {
    return 'je roule';
  }

  abstract public function marque(): string;
}
