<?php
class Cart
{
  public function __construct()
  {
    if (!isset($_SESSION['cart'])) {
      $_SESSION['cart'] = [];
    }
  }

  public function addItem($productId, $quantity = 1)
  {
    if (isset($_SESSION['cart'][$productId])) {
      $_SESSION['cart'][$productId] += $quantity;
    } else {
      $_SESSION['cart'][$productId] = $quantity;
    }
  }

  public function getItems()
  {
    return $_SESSION['cart'];
  }

  public function getTotalItems()
  {
    return array_sum($_SESSION['cart']);
  }

  public function removeItem($productId)
  {
    if (isset($_SESSION['cart'][$productId])) {
      unset($_SESSION['cart'][$productId]);
    }
  }

  public function clear()
  {
    $_SESSION['cart'] = [];
  }
}
