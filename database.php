<?php
class Database
{
  private static $instance = null;
  private $pdo;

  private function __construct()
  {
    $this->pdo = new PDO('mysql:host=localhost;dbname=jibal_bakery;charset=utf8;unix_socket=/run/mysqld/mysqld.sock', 'root', 'SirGhani_090903');
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $this->createTables();
  }

  public static function getInstance()
  {
    if (self::$instance == null) {
      self::$instance = new Database();
    }
    return self::$instance;
  }

  public function getConnection()
  {
    return $this->pdo;
  }

  private function createTables()
  {
    // Tables are created via jibal_bakery.sql
    // This method can be used for any additional setup if needed
  }
}
