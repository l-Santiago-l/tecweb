<?php
    namespace TECWEB;
    use TECWEB\READ\Read;
    #include_once __DIR__.'/Read/Read.php';
    include_once __DIR__.'/../vendor/autoload.php';
    $products = new Read('marketzone');
    if(isset($_GET['search'])){
        $products->search($_GET['search']);
        echo $products->getData();
    }
    else if(isset($_GET['name'])){
        $products->singleByName($_GET['name']);
        echo $products->getData();
    }
?>