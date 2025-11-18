<?php
require_once 'BaseController.php';
require_once 'app/models/ContactMessage.php';

class ContactController extends BaseController
{
  public function index()
  {
    $data = [];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $name = trim($_POST['name'] ?? '');
      $email = trim($_POST['email'] ?? '');
      $message = trim($_POST['message'] ?? '');

      if ($name && $email && $message) {
        $contactModel = new ContactMessage();
        if ($contactModel->save($name, $email, $message)) {
          $data['success'] = 'Thank you for your message! We will get back to you soon.';
        } else {
          $data['error'] = 'Sorry, there was an error sending your message. Please try again.';
        }
      } else {
        $data['error'] = 'Please fill in all fields.';
      }
    }

    $this->render('contact', $data);
  }
}
