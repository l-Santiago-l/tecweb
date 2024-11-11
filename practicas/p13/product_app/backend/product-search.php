<?php
    namespace TECWEB;
    use TECWEB\READ\Read;
    include_once __DIR__.'/Read/Read.php';
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