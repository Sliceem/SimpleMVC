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


    public function addProduct()
    {
        $data = [
            'sku'   => $_POST['sku'],
            'name'  => $_POST['name'],
            'price' => $_POST['price'],
            'info'  => $_POST['info'],
            'image' => $_POST['image']
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
        $model->deleteProduct($data);
        return $this->listAllProducts();
    }

    public function Error()
    {
        echo "Error accured";
    }
}
