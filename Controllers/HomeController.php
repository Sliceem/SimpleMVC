<?php

require_once('./Core/init.php');
require_once('./Models/Model.php');

class Home
{
    //Show all product from DB
    public function listAllProducts()
    {
        $model = new Model();
        $data = $model->displayAll();
        View::render('ProductList', $data);
    }
    //Generats VIEWs form
    public function addProduct()
    {
        View::render('AddProduct');
    }
    //Delets item or items from Database
    public function deleteProduct()
    {
        $data = [
            'checkbox' => $_POST['checkbox']
        ];
        $model = new Model();
        $model->deleteProduct($data);
        return $this->listAllProducts();
    }
    //Call Model class to Work with Product
    public function insertProducts()
    {
        $data = [
            'sku'   => trim($_POST['sku']),
            'name'  => trim($_POST['name']),
            'price' => trim($_POST['price']),
            'weight'  => trim($_POST['weight']),
            'size'  => trim($_POST['size']),
            'dimensions'  => trim($_POST['dimensions']),
            'selector' => trim($_POST['selector'])
        ];
        $model = new Model();
        $model->addProduct($data);
        header('Location: ' . URL . '/home/addProduct');
    }

    public function Error()
    {
        echo "Error accured";
    }
}
