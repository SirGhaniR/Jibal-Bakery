<?php
require_once 'database.php';

class Product
{
  private $db;

  public function __construct()
  {
    $this->db = Database::getInstance()->getConnection();
  }

  public function getAll($filter = 'all', $sort = 'name', $page = 1, $perPage = 6)
  {
    $offset = ($page - 1) * $perPage;
    $where = $filter !== 'all' ? "WHERE category = ?" : "";
    $orderBy = $this->getOrderBy($sort);

    $sql = "SELECT * FROM products $where ORDER BY $orderBy LIMIT ? OFFSET ?";
    $stmt = $this->db->prepare($sql);

    if ($filter !== 'all') {
      $stmt->execute([$filter, $perPage, $offset]);
    } else {
      $stmt->execute([$perPage, $offset]);
    }

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getTotalCount($filter = 'all')
  {
    $where = $filter !== 'all' ? "WHERE category = ?" : "";
    $sql = "SELECT COUNT(*) FROM products $where";
    $stmt = $this->db->prepare($sql);

    if ($filter !== 'all') {
      $stmt->execute([$filter]);
    } else {
      $stmt->execute();
    }

    return $stmt->fetchColumn();
  }

  private function getOrderBy($sort)
  {
    switch ($sort) {
      case 'price-low':
        return 'price ASC';
      case 'price-high':
        return 'price DESC';
      case 'popular':
        return 'created_at DESC'; // Assuming newer is more popular
      default:
        return 'name ASC';
    }
  }

  public function getById($id)
  {
    $stmt = $this->db->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
}
