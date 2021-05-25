<?php  
    session_start();
    ob_start();
    //session_destroy();
    include_once './view/layouts/head.php';
    include_once './view/layouts/header.php';
?>
<?php 
if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }else{
        $page = 'home';
    }

    switch ($page) {
        case 'home':
            include_once './controller/ProductController.php';
            $products = new ProductController();
            $products->index();
            break;

        case 'shop':
           include_once './controller/ProductController.php';
           $product = new ProductController();
           $product->indexProduct();

           include_once 'view/pages/shop.php';

            break;

        case 'blog-details':
            include_once 'view/pages/blog-details.php';
                break;

        case 'blog':
            include_once 'view/pages/blog.php';
                break;

        case 'contact':
            include_once 'view/pages/contact.php';
                break;

        case 'checkout':
            include_once 'controller/orderController.php';
            $order =new OrderController();
            $order->index();
                break;
                
        case 'shop-cart':
            include_once 'view/pages/shop-cart.php';
          
                break;

        case 'product-details': 
            include_once 'view/pages/product-details.php';
                break;

        
        
        default:
            echo "<h2 style='color: red;'>ERROR 404, trang không tồn tại</h2><a href='index.php'>Quay lại</a>";
            break;
    }

?>

<?php 
include_once './view/layouts/footer.php';
include_once './view/layouts/script.php'; ?>