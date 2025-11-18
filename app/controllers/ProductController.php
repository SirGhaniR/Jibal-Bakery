<?php
require_once 'BaseController.php';
require_once 'app/models/Product.php';
require_once 'app/models/Cart.php';

class ProductController extends BaseController
{
  public function index()
  {
    $productModel = new Product();
    $cart = new Cart();

    $filter = isset($_GET['filter']) ? $_GET['filter'] : 'all';
    $sort = isset($_GET['sort']) ? $_GET['sort'] : 'name';
    $page = isset($_GET['page_num']) ? max(1, (int)$_GET['page_num']) : 1;

    $products = $productModel->getAll($filter, $sort, $page);
    $totalCount = $productModel->getTotalCount($filter);
    $totalPages = ceil($totalCount / 6);

    $data = [
      'products' => $products,
      'filter' => $filter,
      'sort' => $sort,
      'currentPage' => $page,
      'totalPages' => $totalPages,
      'totalItems' => $totalCount,
      'cartCount' => $cart->getTotalItems()
    ];

    $this->render('product', $data);
  }

  public function addToCart()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $productId = isset($_POST['product_id']) ? (int)$_POST['product_id'] : 0;
      $quantity = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 1;

      if ($productId > 0) {
        $cart = new Cart();
        $cart->addItem($productId, $quantity);
      }
    }

    // Redirect back to product page
    header('Location: ?page=product');
    exit;
  }
}
