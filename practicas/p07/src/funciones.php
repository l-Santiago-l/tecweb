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

    function generarNumsA(){
        $col = [1, 2, 3];
        $filas = array();
        $i = 0;
        $cadFin = "";
        do{
            $col[0] = rand(0, 1000);
            $col[1] = rand(0, 1000);
            $col[2] = rand(0, 1000);
            $filas[$i] = $col;
            $cadFin .= "[ $col[0] | $col[1] | $col[2] ]\n";
            $i ++;
        } while (($col[0]%2 == 0) || ($col[1]%2 != 0) || ($col[2]%2 == 0));
        $totNum = $i * 3;
        $cadFin .= "\n> $totNum números generados después de $i iteraciones\n";
        return $cadFin;
    }

    function encontrarNumAW(){
        if(isset($_GET['multiplo']) && is_numeric($_GET['multiplo']) ){
            $num = $_GET['multiplo'];
            $resp = "";
            if($num <= 1000){
                $numA = rand(1, 1000);
                while($num%$numA != 0)
                    $numA = rand(1, 1000);
                $resp = "> $numA es un multiplo de $num";
            }
            else
                $resp = "Ingrese un valor entre 0 - 1000";
            return $resp;
        }
    }

    function encontrarNumADW(){
        if(isset($_GET['multiplo']) && is_numeric($_GET['multiplo']) ){
            $num = $_GET['multiplo'];
            $resp = "";
            if($num <= 1000){
                do{
                    $numA = rand(1, 1000);
                }while($num%$numA != 0);
                $resp = "> $numA es un multiplo de $num";
            }
            else
                $resp = "Ingrese un valor entre 0 - 1000";
            return $resp;
        }
    }

?>