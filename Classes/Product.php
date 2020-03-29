<?php

abstract class Product{

    //Function must show all products added to Database
    abstract function displayAll();

    //Function show form, take data from user, and insert it to Database
    abstract function addProduct();

    //Function Delete all marked items, from Database
    abstract function deleteProduct();

}