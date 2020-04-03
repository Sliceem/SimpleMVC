<?php

require_once('autoloader.php');

class Book extends Products
{
    protected $weight;

    public function __construct($data = [])
    {
        parent::__construct($data);
        $this->weight = $data['weight'];
        $this->insertProduct();
    }

    public function getProductInfo()
    {
        return $this->weight;
    }
}
