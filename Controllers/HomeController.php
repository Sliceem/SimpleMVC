<?php

require_once ('./Core/autoloader.php');

class Home
{
    public function listAllProducts()
    {
        View::render('ProductList');
    }


    public function AddProduct()
    {
        View::render('AddProduct');
    }

    public function Error()
    {
        echo "Error accured";
    }
}
