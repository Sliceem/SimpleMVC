<?php

require_once('autoloader.php');

class Furniture extends Products
{
    protected $dimensions;

    public function __construct($data = [])
    {
        parent::__construct($data);
        $this->dimensions = $data['dimensions'];
        $this->insertProduct();
    }

    public function getProductInfo()
    {
        return $this->dimensions;
    }
}
