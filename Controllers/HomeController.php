<?php

require_once ('./Core/autoloader.php');
require_once ('./Models/Model.php');

class Home
{
    public function listAllProducts()
    {
        $model = new Model();
        $data = $model->displayAll();
        View::render('ProductList', $data);

    }


    public function AddProduct()
    {
        $data = [
            'sku' => $_POST['sku'],
            'name' => $_POST['name'],
            'price' => $_POST['price']
        ];
        $model = new Model();
        $model->addProduct($data);
        View::render('AddProduct');
    }

    public function deleteProduct(){
        $data = [
            'checkbox' => $_POST['checkbox']
        ];
        $model = new Model();
        View::render('test', $data);
    }

    public function Error()
    {
        echo "Error accured";
    }
}
