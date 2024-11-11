<?php
    namespace TECWEB;
    use TECWEB\READ\Read;
    include_once __DIR__.'/Read/Read.php';
    $products = new Read('marketzone');
    if(isset($_POST['id'])){
        $products->single($_POST['id']);
    }
    echo $products->getData();
?>