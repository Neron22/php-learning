<?php

class Cart
{
  public function __construct(
    int $quantity,
    float $totalPrice
  ){
  }

  public function getTotalPrice(): float
  {
    return $this->totalPrice;
  }

  public function setTotalPrice(float $price): void
  {
    $this->totalPrice = $price;
  }

  public function discount(float $discount): void
  {
    $this->totalPrice -= $this->totalPrice * $discount / 100;
  }
}
