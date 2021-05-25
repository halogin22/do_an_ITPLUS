<?php  
	include_once './config/myconfig.php';

	class blog extends Connect
	{
		function __construct()
		{
			parent::__construct();

		}

		function indexBlogL()
		{
			$sql = "SELECT articles.id, articles.name, admin.name AS 'nameadmin', articles.created_at, product.avatar FROM product, articles, admin WHERE articles.admin_id = admin.id AND articles.name = product.name AND articles.menu_id = 1";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		function indexBlogC()
		{
			$sql = "SELECT articles.id, articles.name, admin.name AS 'nameadmin', articles.created_at, product.avatar FROM product, articles, admin WHERE articles.admin_id = admin.id AND articles.name = product.name AND articles.menu_id = 2";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		function indexBlogR()
		{
			$sql = "SELECT articles.id, articles.name, admin.name AS 'nameadmin', articles.created_at, product.avatar FROM product, articles, admin WHERE articles.admin_id = admin.id AND articles.name = product.name AND articles.menu_id = 3";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		function indexBlogID($id)
		{
			$sql = "SELECT articles.id, articles.name, admin.name AS 'nameadmin', articles.created_at, product.avatar FROM menu, product, articles, admin WHERE articles.admin_id = admin.id AND articles.name = product.name AND menu.id = articles.menu_id AND menu.id = $id";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		function indexBlogName($id)
		{
			$sql = "SELECT name FROM menu WHERE menu.id = $id";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
        function indexBlogDetail($id)
		{
			$sql = "SELECT articles.*, admin.name AS 'nameadmin', product.avatar, product.status FROM product, articles, admin WHERE articles.admin_id = admin.id AND articles.name = product.name AND articles.id = $id";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		function indexBlogSumMenu()
		{
			$sql = "SELECT COUNT(articles.id) as 'sum' FROM articles";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		function indexBlogMenu()
		{
			$sql = "SELECT menu.id, menu.name, COUNT(articles.menu_id) as 'num' FROM menu, articles WHERE menu.id = articles.menu_id GROUP BY articles.menu_id";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
		function featurepost()
		{
			$sql = "SELECT articles.id, articles.name, admin.name AS 'nameadmin', articles.created_at, product.avatar FROM product, articles, admin WHERE articles.admin_id = admin.id AND articles.name = product.name AND articles.id BETWEEN ( SELECT MAX(id)-2 FROM articles ) AND ( SELECT MAX(id) FROM articles )";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}
	}
	