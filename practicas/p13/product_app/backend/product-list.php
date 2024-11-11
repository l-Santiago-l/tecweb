<?php
    #namespace myapi;
    #use Products\Products;
    #include_once __DIR__.'/myapi/Products.php';
    #namespace TECWEB;
    #use TECWEB\READ\Read;
    #include_once __DIR__.'/Read/Read.php';
    namespace TECWEB;
    use TECWEB\READ\Read;
    include_once __DIR__ . '/READ/Read.php';
    $products = new Read('marketzone');
    $products->list();
    echo $products->getData();
?>