<?php 
include_once 'model/product_ad.php';
	/**
	 * 
	 */
	class productAdminController extends ProductAdmin
	{	
		private $productadmin;
		
		function __construct()
		{
			$this->productadmin = new ProductAdmin();
		}

		public function index()
		{
			if(isset($_GET['page'])){
				$page = $_GET['page'];
			}else{
				$page = 'product_admin';
			}
			switch ($page) {
				case 'product_admin':
					$result = $this->productadmin->ProAdmin();
					include_once 'view/pages/product_admin.php';
				break;

				case 'update_product':
					
					$id= $_GET['id'];
					$result = $this->productadmin->showlist($id);
					if(isset($_POST['update_product'])){
						$name = $_POST['name'];
						$categories_id = $_POST['categories_id'];
						$avatar = $_POST['avatar'];
						$price = $_POST['price'];
						$quantity = $_POST['quantity'];
						$description = $_POST['description'];
						$status = $_POST['status'];
						$created_at = $_POST['created_at'];
						$updated_at = $_POST['updated_at'];
						$update = $this->productadmin->UpdateProduct($id,$name,$categories_id,$avatar,$price,$quantity,$description,$status,$created_at,$updated_at);
						header('Location: index.php?page=product_admin');
					}
					include_once 'view/pages/update_product.php';
				break;
			
            }

			if (isset($_GET['action'])) {
				$action=$_GET['action'];
			}else{
				$action ='product_admin';
			}

			switch ($action) {
				case 'product_admin':
					if(isset($_POST['insert_product'])){
                        $id = $_POST['id'];
                        $name = $_POST['name'];
						$categories_id = $_POST['categories_id'];
						$brand_id = $_POST['brand_id'];
						$avatar = $_POST['avatar'];
						$price = $_POST['price'];
						$quantity = $_POST['quantity'];
						$admin_id = $_POST['admin_id'];
						$description = $_POST['description'];
						$status = $_POST['status'];
						$created_at = $_POST['created_at'];
						$updated_at = $_POST['updated_at'];

                        $insert = $this->productadmin->InsertProduct($id,$name,$categories_id,$brand_id,$avatar,$price,$quantity,$admin_id,$description,$status,$created_at,$updated_at);
                        header('Location: index.php?page=product_admin');
                        }
					//include_once 'view/pages/insert_product.php';
				break;

							
			}
        }
    }
?>
				