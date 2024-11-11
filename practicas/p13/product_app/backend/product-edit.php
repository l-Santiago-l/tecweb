<?php
    namespace TECWEB;
    use TECWEB\UPDATE\Update;
    #include_once __DIR__.'/Update/Update.php';
    include_once __DIR__.'/../vendor/autoload.php';
    $products = new Update('marketzone');
    #echo json_encode($_POST);
    if(isset($_POST['id'])){
        $products->edit($_POST);
        echo $products->getData();
    }
?>