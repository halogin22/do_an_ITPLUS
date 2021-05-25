<?php 
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'view/includes/head.php'; ?>
</head>

<body>

   <!--  <div class="loader-wrapper">
        <img src="http://php0320e2-2.itpsoft.com.vn/assets/images/vagitable-loader.gif" alt="loader" class="">
    </div> -->

    <div id="wrapper">

     <?php include_once 'view/includes/header.php'; ?>

     <div id="page-wrapper">

        <div class="container-fluid">
            <?php 
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            }else{
                $page = 'dashboard'; 
            }

            switch ($page) {
                case 'dashboard':
                include_once 'view/pages/dashboard.php';
                break;

                case 'order_admin':
                    include 'controller/order_adminController.php';
                    $orderad = new OrderAdminController();
                    $orderad->index();
                break;

                case 'detail':
                    include 'controller/order_adminController.php';
                    $orderad = new OrderAdminController();
                    $orderad->index();
                    break;


                case 'product_admin':
                   //include_once 'view/pages/product_admin.php';
                    
                   include 'controller/product_adminController.php';
                    $orderad = new productAdminController();
                    $orderad->index();
                    break;

                case 'update_product':
                    include 'controller/product_adminController.php';
                        $orderad = new productAdminController();
                        $orderad->index();
                        break;

                case 'supplier_admin':
                    //include_once 'view/pages/product_admin.php';
                        include 'controller/supplier_adminController.php';
                        $orderad = new supplierAdminController();
                        $orderad->index();
                        break;
                default:
                echo "<h2 style='color: red;'>ERROR 404, trang không tồn tại</h2><a href='index.php'>Quay lại</a>";
                break;
            }

            ?>

            <!-- Content pages -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<?php include 'view/includes/scripts.php'; ?>

</body>

</html>
