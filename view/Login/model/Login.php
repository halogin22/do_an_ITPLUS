<?php 
		

		    include_once '../../config/myconfig.php';
		    
		    class Login extends Connect
		    {
		        
		        function __construct()
		        {
		            parent::__construct();
		        }

		        //lấy thông tin admin theo email
		        public function getAdmin($email,$password)
		        {
		            $sql="SELECT * FROM admin WHERE email= :email AND password = :password";
		            $pre = $this->pdo->prepare($sql);
		            $pre->bindParam(':email',$email);
		            $pre->bindParam(':password',$password);
		            $pre->execute();
		            $count = $pre->rowCount();
		            if ($count==1) {
		            	header('location:admin/index.php');
		            }

		        }


		    }


	 ?>