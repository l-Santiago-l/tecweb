<?php
    namespace TECWEB;
    use TECWEB\DELETE\Delete;
    include_once __DIR__.'/Delete/Delete.php';
    $products = new Delete('marketzone');
    if(isset($_POST['id'])){
        $products->delete($_POST['id']);
        echo $products->getData();
    }
?>