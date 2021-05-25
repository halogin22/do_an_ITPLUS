<?php 
include_once '../../../config/myconfig.php';

class supplierAdmin extends Connect
{
    function __construct(){
       parent::__construct();  
    }

    public function SupAdmin()
    {
        $result = array();
        $sql="select * from brand";
        $pre = $this -> pdo-> prepare($sql);
        $pre -> execute();
        return $pre -> fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
