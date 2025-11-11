<?php
require_once 'BaseController.php';

class ProductController extends BaseController
{
  public function index()
  {
    $this->render('product');
  }
}
