<?php
    namespace TECWEB;
    use TECWEB\CREATE\Create;
    include_once __DIR__.'/../vendor/autoload.php';
    $products = new Create('marketzone');
    if(isset($_POST['nombre'])){
        $products->add($_POST);
        echo $products->getData();
    }
?>