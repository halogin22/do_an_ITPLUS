<?php

include_once 'model/supplier_admin.php';


class SupplierAdminController extends SupplierAdmin
{
    private $supplieradmin;

    function __construct()
    {
        $this->supplieradmin = new SupplierAdmin();
    }

    public function index()
    {
        if(isset($_get['page'])){
            $page = $_get['page'];
        }else{
            $page = 'supplier_admin';
        }

        switch($page){
            case 'supplier_admin':
                $result = $this->supplieradmin->SupAdmin();
                include_once 'view/pages/supplier_admin.php';
                break;
        }
        /*
        if(isset($_GET['action'])){
            $action = $_GET['action'];
        }else{
            $action = 'supplier_admin';
        }

        switch($action){
            case ''
        }
        */
    }

}



?>
