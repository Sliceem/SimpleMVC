<?php

class View
{
    //Get data from model, and generates template
    public static function render($file, $data = []){
        $path = './Views/'.$file.'.php';
        if(file_exists($path)){
            include($path);
        }
    }
}