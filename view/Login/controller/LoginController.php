<?php 
	include_once 'model/Login.php';
	/**
	 * 
	 */
	class LoginController extends Login
	{
		private $admin;
		function __construct()
		{
			$this->admin = new Login();
		}

		public function index()
		{
			if (isset($_GET['method'])) {
				$method = $_GET['method'];
			}else{
				$method = 'home';
			}

			switch ($method) {
				case 'admin':
					if (isset($_POST['loginB'])) {
						$email = $_POST['email'];
						$password = $_POST['pass'];
						if($this->admin->getAdmin($email,$password)){
							header('http://localhost/IT_Plus/do_an_ITPLUS/view/Login/admin/index.php');
						}
						else{
							echo 1111;
						}
						
						
						
					}
					break;
				
				default:
					# code...
					break;
			}
			
			include_once 'View/home_L.php';
		}
	}
 ?>