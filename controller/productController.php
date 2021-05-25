<?php 
include_once './model/Product.php';

class ProductController extends Product
{	
	private $product;

	function __construct()
	{
		$this->product = new Product();
	}

	function index()
	{	
		if(isset($_GET['page'])){
            $page = $_GET['page'];
          }else{
            $page = 'home';
          }
        switch ($page) {
			case 'home':
				$produc = $this->product->indexProduct();
				$categori = $this->product->indexCategories();
				$status = $this->product->indexStatus();
				$new = $this->product->indexNew();
				$sale = $this->product->indexSale();
				$oos = $this->product->indexOos();
				include_once './view/pages/home.php';
				break; 
            default:
                # code...
                break;
        }
		if (isset($_GET['method'])) {
			$method = $_GET['method'];
		}else{
			$method = 'home';
		}
		switch ($method) {
			case 'home':
				$result = $this->product->getProduct();
				include_once 'view/pages/home.php';
				break;

			case 'order':

				if (isset($_GET['id'])) {
					$id = (int)$_GET['id'];
					$result = $this->product->getProductID($id);

					if (!isset($_SESSION['carts']) && empty($_SESSION['carts'])){
						$_SESSION['carts'][$id] = $result;
						$_SESSION['carts'][$id]['qty'] = 1;
					}else{
						if (array_key_exists($id, $_SESSION['carts'])) {
							$_SESSION['carts'][$id]['qty'] += 1;
						}else{
							$_SESSION['carts'][$id] = $result;
							$_SESSION['carts'][$id]['qty'] = 1;
						}
					}

					
					header('location:index.php');
				}else{
					header('location:index.php');
				}
				break;

			default:
					# code...
			break;
		}



	}
	function indexProduct()
	{
		if(isset($_GET['page'])){
            $page = $_GET['page'];
          }else{
            $page = 'home';
          }
        switch ($page) {
            case 'shop':
                $produc = $this->product->indexProduct();
				$categori = $this->product->indexCategories();
                include_once './view/pages/shop.php';
                break; 
			case 'home':
				$produc = $this->product->indexProduct();
				$categori = $this->product->indexCategories();
				include_once './view/pages/home.php';
				break; 
            default:
                # code...
                break;
        }
	}
}

?>