<?php 
	include_once '../../../config/myconfig.php';
	/**
	 * 
	 */
	class ProductAdmin extends Connect
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function ProAdmin()
		{
			$result =array();
			$sql="SELECT id, name,categories_id,avatar,price,quantity,description,status,created_at,updated_at FROM product";
			//$sql = "select * from product";
			//$sql = "SELECT *FROM product ORDER BY created_at DESC";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);

			
		}/*
		public function DeleteProduct($id)
		{
			$sql="DELETE FROM product WHERE id = :id";
			$pre =$this->pdo->prepare($sql);
			$pre->bindParam(':id',$id);
			$pre->execute();
		}*/
		function showlist($id)
    {
        $sql = "SELECT * FROM product WHERE id = $id";

        $pre = $this->pdo->prepare($sql);
		$pre->execute();
		return $pre->fetchAll(PDO::FETCH_ASSOC);
    }

		public function DeleteProduct($id){
			echo $id;
			$sql = "DELETE FROM product WHERE id = $id";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre ->fetchAll(PDO::FETCH_ASSOC);
		}
		public function UpdateProduct($id,$name,$categories_id,$avatar,$price,$quantity,$description,$status,$created_at,$updated_at){
			$sql = "UPDATE product SET name = :name, categories_id = :categories_id, avatar = :avatar, price = :price, quantity = :quantity,description = :description,status = :status,created_at = :created_at,updated_at = :updated_at where id=$id";
			
			$pre = $this->pdo->prepare($sql);
			
			$pre->bindParam(":name", $name);
			$pre->bindParam(":categories_id", $categories_id); 
			$pre->bindParam(":avatar", $avatar); 
			$pre->bindParam(":price", $price); 
			$pre->bindParam(":quantity", $quantity); 
			$pre->bindParam(":description", $description); 
			$pre->bindParam(":status", $status); 
			$pre->bindParam(":created_at", $created_at); 
			$pre->bindParam(":updated_at", $updated_at); 

			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		public function InsertProduct($id,$name,$categories_id,$brand_id,$avatar,$price,$quantity,$admin_id,$description,$status,$created_at,$updated_at){
			$sql = "insert into product(id,name,categories_id,brand_id,avatar,price,quantity,admin_id,description,status,created_at,updated_at) values (:id, :name, :categories_id, :brand_id, :avatar, :price, :quantity, :admin_id, :description, :status, :created_at,:updated_at)";
			
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(":id", $id);
			$pre->bindParam(":name", $name);
			$pre->bindParam(":categories_id", $categories_id); 
			$pre->bindParam(":brand_id", $brand_id); 
			$pre->bindParam(":avatar", $avatar); 
			$pre->bindParam(":price", $price); 
			$pre->bindParam(":quantity", $quantity); 
			$pre->bindParam(":admin_id", $admin_id); 
			$pre->bindParam(":description", $description); 
			$pre->bindParam(":status", $status); 
			$pre->bindParam(":created_at", $created_at); 
			$pre->bindParam(":updated_at", $updated_at); 

			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}


		
	}
?>