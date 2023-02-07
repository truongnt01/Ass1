<?php 
namespace Assigment\controllers;

class c_dashboard{
    public function index(){
       $view ="admin/views/Dashboard/v_dashboard.php";
       include("admin/templates/layout.php");
    }
}

?>