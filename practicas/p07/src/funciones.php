<?php
   function numero57(){
    if(isset($_GET['numero']) && is_numeric($_GET['numero'])){
        $num = $_GET['numero'];
        if ($num%5==0 && $num%7==0){
            return '<h3>R= El número '.$num.' SÍ es múltiplo de 5 y 7.</h3>';
        }
        else{
            return '<h3>R= El número '.$num.' NO es múltiplo de 5 y 7.</h3>';
        }
    }
}

?>