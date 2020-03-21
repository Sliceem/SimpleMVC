<?php

class View
{
    public static function render($file, $data = []){
        $path = './Views/'.$file.'.php';
        if(file_exists($path)){
            include($path);
        }
    }
}