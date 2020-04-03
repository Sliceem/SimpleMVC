<?php

require_once('autoloader.php');

class Dvd extends Products
{
    protected $size;

    public function __construct($data = [])
    {
        parent::__construct($data);
        $this->size = $data['size'];
        $this->insertProduct();
    }

    public function getProductInfo()
    {
        return $this->size;
    }
}
