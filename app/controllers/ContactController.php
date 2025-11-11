<?php
require_once 'BaseController.php';

class ContactController extends BaseController
{
  public function index()
  {
    $this->render('contact');
  }
}
