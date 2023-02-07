<?php
require_once "vendor/autoload.php";

use Assigment\models\m_product;
use Assigment\controllers\c_dashboard;
use Assigment\controllers\c_product;
use Assigment\models\db;


$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {
    case "/":
        $a = new c_dashboard();
        $a->index();
        break;
    case "show_products":
        $a = new c_product();
        $a->index();
        break;
    
    
}
