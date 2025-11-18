<?php
require_once 'database.php';

class ContactMessage
{
  private $db;

  public function __construct()
  {
    $this->db = Database::getInstance()->getConnection();
  }

  public function save($name, $email, $message)
  {
    $stmt = $this->db->prepare("INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");
    return $stmt->execute([$name, $email, $message]);
  }
}
