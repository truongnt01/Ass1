<?php

namespace Assigment\controllers;


class c_product
{
    function index()
    {
        $product = new m_product();
        $product->getAllProduct();
        $view = "admin/views/Products/v_products.php";
        include("admin/templates/layout.php");
    }
}
