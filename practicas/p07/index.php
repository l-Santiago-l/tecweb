<?php include 'src/funciones.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title> Métodos GET y POST</title>
    </head>
    <body>
        <div style="align-items: center; width: 800px; margin-left: 15%;">
            <h1>Ejercios $GET Y $POST</h1>
            
            <!-- Ejercicio 1 -->
            <form method="get">
                <fieldset>
                    <legend><h2>Ejercicio 1</h2></legend>
                    <p>Escribe un programa para coprobar si un número es múltiplo de 5 y 7</p>
                    <ul>
                        <li>Número: <input type="number" name="numero"><?php echo numero57()?></li>
                        
                    </ul>
                    <p><input type="submit" value="Comprobar"></p>
                </fieldset>
            </form>

            <!-- Ejercicio 2 -->
            <form method="get">
                <fieldset>
                    <legend><h2>Ejercicio 2</h2></legend>
                    <p>Crea un programa para la generación repetitiva de 3 números aleatorios hasta obtener una
                    secuencia compuesta por:</p>
                    <code> impar par impar</code>
                    <ul>
                        <li><textarea name="a1" rows="4" cols="60" placeholder="Aquí se moestraran los números aleatorios"><?php echo generarNumsA()?></textarea></li>
                    </ul>
                </fieldset>
            </form>

            <!-- Ejercicio 3 -->
            <form method="get">
                <fieldset>
                    <legend><h2>Ejercicio 3</h2></legend>
                    <p>Utiliza un ciclo while para encontrar el primer número entero obtenido aleatoriamente,
                    pero que además sea múltiplo de un número dado.</p>
                    <ul>
                        <li>Número: <input type="number" name="multiplo" placeholder="Num. 0 - 1000"> </li>
                    </ul>
                    <fieldset>
                        <legend>Con While</legend>    
                        <?php echo encontrarNumAW()?>
                    </fieldset>
                    <fieldset>
                        <legend>Con While</legend>
                        <?php echo encontrarNumADW()?>
                    </fieldset>
                    <p><input type="submit" value="Comprobar">
                </fieldset>
            </form>

            <!-- Ejercicio 4 -->
            <form method="get">
                <fieldset>
                    <legend><h2>Ejercicio 4</h2></legend>
                    <p>Crear un arreglo cuyos índices van de 97 a 122 y cuyos valores son las letras de la 'a'
                        a la 'z'. Usa la función chr(n) que devuelve el caracter cuyo código ASCII es n para poner
                        el valor en cada índice. Es decir:</p>
                    <?php echo tablaAscii()?>
                </fieldset>
            </form>

            <!-- Ejercicio 5 -->
            <form method="post">
                <fieldset>
                    <legend><h2>Ejercicio 5</h2></legend>
                    <p>Usar las variables $edad y $sexo en una instrucción if para identificar una persona de
                        sexo “femenino”, cuya edad oscile entre los 18 y 35 años y mostrar un mensaje de
                        bienvenida apropiado.</p>
                    <input type="radio" name="S" value="F">Femenino <br>
                    <input type="radio" name="S" value="M">Masculino <br>
                    Edad: <input type="number" name="edad">
                    <br>
                    <?php echo valEdad()?>
                    <br>
                    <input type="submit" value="Comprobar">
                </fieldset>
            </form>

            <!-- Ejercicio 6 -->
            <form method="post">
                <fieldset>
                    <legend><h2>Ejercicio 6</h2></legend>
                    <p>Crea en código duro un arreglo asociativo que sirva para registrar el parque vehicular de
                    una ciudad. Cada vehículo debe ser identificado por:</p>
                    <ul>
                        <li>Matricula</li>
                        <li>Auto</li>
                            <ul>
                                <li>Marca</li>
                                <li>Modelo (año)</li>
                                <li>Tipo (seda | hachback | camioneta)</li>
                            </ul>
                        <li>Propietario</li>
                            <ul>
                                <li>Nombre</li>
                                <li>Ciudad</li>
                                <li>Dirección</li>
                            </ul>
                    </ul>
                    <?php carros() ?>
                    <br><br>
                    <fieldset>
                        <legend>Consulta los datos</legend>
                        Ingresa la Matricula: <input type="text" name="matricula">
                        <input type="submit" name="b1" value="Buscar"> <input type="submit" name="bT" value="Todos">
                        <li><textarea name="a2" rows="4" cols="60" placeholder="Aquí se moestrará la ocnsulta de vehiculos"><?php echo consultaC()?></textarea></li>
                    </fieldset>
                </fieldset>
            </form>
        </div>
    </body>
</html>