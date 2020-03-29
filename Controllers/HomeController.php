<?php

require_once ('./Core/autoloader.php');
require_once ('./Models/Model.php');

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
    public function deleteProduct(){
        $data = [
            'checkbox' => $_POST['checkbox']
        ];
        $model = new Model();
        $model->deleteProduct($data);
        return $this->listAllProducts();
    }
    //Add new Product
    public function insertProducts(){
        $data = [
            'sku'   => trim($_POST['sku']),
            'name'  => trim($_POST['name']),
            'price' => trim($_POST['price']),
            'year'  => trim($_POST['year']),
            'type'  => trim($_POST['type']),
            'dimensions'  => trim($_POST['dimensions']),
            'image' => trim($_POST['image'])
        ];
        $model = new Model();
        $model->addProduct($data);
        header('Location: http://press/home/addProduct');
    }

    public function Error()
    {
        echo "Error accured";
    }
}
