<?php 
	include_once './config/myconfig.php';
	class Product extends Connect
	{
		function __construct()
		{
			parent::__construct();

		}
		// hàm lấy thông tin sản phẩm từ database
		public function getProduct(){
			$result =array();
			$sql = "SELECT *FROM product WHERE status = 1 ORDER BY created_at DESC";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);

		}
		// lấy thông tin sản phẩm theo id
		public function getProductID($id)
		{	$result =array();
			$sql = "SELECT * FROM product WHERE id = :id";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':id',$id);
			$pre->execute();
			return $pre->fetch(PDO::FETCH_ASSOC);
		}
		function indexProduct()
		{
			$sql = "SELECT * FROM product";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		function indexCategories()
		{
			$sql = "SELECT * FROM categories";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		function indexStatus()
		{
			$sql = "SELECT DISTINCT status FROM product HAVING status > 0 ";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		function indexNew()
		{
			$sql = "SELECT * FROM product WHERE status = 1 ";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		function indexSale()
		{
			$sql = "SELECT * FROM product WHERE status = 2 ";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		function indexOos()
		{
			$sql = "SELECT * FROM product WHERE status = 3 ";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
	}
?>