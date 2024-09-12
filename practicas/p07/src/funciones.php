<?php
    $carro;
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

    function tablaAscii(){
        $arr = array();
        for($i = 97; $i <= 122; $i++){
            $arr[$i] = chr($i);
        }
        $tabla = '<table> <tr><td>Código ASCII</td><td>Valor</td></tr>';
        foreach ($arr as $key => $value){
            $tabla .= '<tr> <td>'. $key.'</td><td>'. $value . '</td></tr>';
        }
        $tabla .= '</table>';
        return $tabla;
    }

    function valEdad(){
        if(isset($_POST["edad"]) && isset($_POST["S"]))
        {   
            $edad = $_POST["edad"];
            if($_POST["S"] == "F" && ($edad <= 35 && $edad >= 18)){
                    return "Bienvenida, esta en el rango de edad permitido";
            }
            else 
                return "Lo sentimos, los datos que proprcionaste NO cumplen las condiciones";
            }
    }

    function carros(){
        global $carro;
        $carro = [
            "UBN6338" => [
                "Auto" => [
                    "marca" => "HONDA",
                    "modelo" => "2020",
                    "tipo" => "camioneta"
                ],
                "Propietario" => [
                    "nombre" => "Alfonzo Esparza",
                    "ciudad" => "Puebla, Pue.",
                    "direccion" => "C.U., Jardines de San Manuel",
                ]
            ],
        "UBN6339" => [
                "Auto" => [
                    "marca" => "MAZDA",
                    "modelo" => "2019",
                    "tipo" => "sedan"
                ],
                "Propietario" => [
                    "nombre" => "Ma. del Consuelo Molina",
                    "ciudad" => "Puebla, Pue.",
                    "direccion" => "97 oriente",
                ]
            ]
        ];

        print_r($carro);
    }

    function consultaC(){
        global $carro;
        $txt = "Seleccione una opción";
        if(isset($_POST["b1"])){
            if(isset($_POST["matricula"]) && $_POST["matricula"] != ""){
                $ma = $_POST["matricula"];
                $txt = "Información de $ma: \n";
                $txt .= "\t Auto:\n";
                $txt .= "\t\tMarca: " . $carro["$ma"]['Auto']['marca'] . "\n";
                $txt .= "\t\tModelo: " . $carro["$ma"]['Auto']['modelo'] . "\n";
            
                $txt .= "\tPropietario:\n";
                $txt .= "\t\tNombre: " . $carro[$ma]['Propietario']["nombre"] . "\n";
                $txt .= "\t\tCiudad: " . $carro[$ma]['Propietario']["ciudad"] . "\n";
                $txt .= "\t\tDirección: " . $carro[$ma]['Propietario']["direccion"];
            }
            
        }
        elseif(isset($_POST["bT"])){
            $txt = "Información del automoviles: \n\n";
            foreach ($carro as $matricula => $datos) {
                $txt .=  "Matrícula: $matricula\n";
            
                $txt .= "\tAuto:\n";
                $txt .= "\t\tMarca: " . $datos['Auto']['marca'] . "\n";
                $txt .= "\t\tModelo: " . $datos['Auto']['modelo'] . "\n";
                $txt .= "\t\tTipo: " . $datos['Auto']['tipo'] . "\n\n";
            
                $txt .= "\tPropietario:\n";
                $txt .= "\t\tNombre: " . $datos['Propietario']['nombre'] . "\n";
                $txt .= "\t\tCiudad: " . $datos['Propietario']['ciudad'] . "\n";
                $txt .= "\t\tDirección: " . $datos['Propietario']['direccion'] . "\n\n";
            }
        }
        return $txt;
    }

?>