<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-Type: application/json");
    function autoload($class){
        require 'entidad/'.$class.'.php';
    }
    spl_autoload_register('autoload');

    $res = new users("pepito","123", "../db.json");
    echo json_encode($res->getUser());
?>