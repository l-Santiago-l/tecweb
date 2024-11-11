<?php
    namespace TECWEB;
    use TECWEB\READ\Read;
    #include_once __DIR__ . '/READ/Read.php';
    include_once __DIR__.'/../vendor/autoload.php';
    $products = new Read('marketzone');
    $products->list();
    echo $products->getData();
?>