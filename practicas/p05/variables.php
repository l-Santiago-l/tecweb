<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.1//EN” “http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd”>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title> Variables PHP </title>
    </head>
    <body>
        <?php
            echo '<center><h1> Práctica 5 - Manejo de variables en PHP </h1></center>';
            echo '<ol>';
            #Pregunta 1
            echo '<b><li>  Determina cuúl de las siguientes variables son validas y explica ¿por qué?</li></b>';
            echo '<br> <code> $_myvar | $_7var | $myvar | $var7 | $_element1 </code>';
            echo '<p> Justificación: Las variables en PHP deben de se indican con el símbolo $, seguido de una letra (mayúscula o minúscula) o guión bajo FORZOSAMENTE, depúes de estos se pueden 
                    colocar letras, números y caracteres con valores en el rango 127-255 correspondientes en ASCII.</p><br>';
            
            #Pregunta 2
            echo '<b><li> Proporcionar los valores de $a, $b, $c como sigue: </li> <code> &nbsp $a = ManejadorSQL; <br> &nbsp $b = MySQL; <br> &nbsp $c = &$a; </code></b><br>';
            # Aquí se hace la asignación
            $a = "ManejadorSQL";
            $b = 'MySQL';
            $c = &$a;
            echo "<br><ol type = 'a'>";
            echo '<li> Ahora muestra el contenido de cada variable </li>';
            echo '"$a => ' . $a . '"<br>' . '"$b => ' . $b . '"<br>' . '"$c => ' . $c . '"';

            echo '<br><br><li> Agrega al código actual las siguientes asignaciones: </li> <code> &nbsp $a = PHP server; <br> &nbsp $b = &$a; </code>';
            # Aquí se hace la asignación
            $a = "PHP server";
            $b = &$a;

            echo '<br><br><li> Vuelve a mostrar el contenido de cada uno </li>';
            echo '"$a => ' . $a . '"<br>' . '"$b => ' . $b . '"<br>' . '"$c => ' . $c . '"';

            echo '<br><br><li> Describe y muestra en la página obtenida qué ocurrió en el segundo bloque de
                asignaciones </li>';
            echo '</ol>';
            echo '<p> Lo que ocurre muy probablemente se deba al uso de los PUNTEROS, en primer lugar "$c" se declara como un puntero "al contenido" de a (por lo que al mostrar 
                    su contenido en realidad muestra lo que almacena "$a"), por eso en el inciso "a" podemos ver que "$a" y "$c" tienen el mismo valor. Ahora, para el inciso "b" la variable "$b"
                    se asigna a un puntero hacia "$a", tomando la logica comentada anteriormente, las tres variables muestran el mismo valor (que es lo que observamos). </p><br>';
            

            #Pregunta 3
            echo '<b><li> Muestra el contenido de cada variable inmediatamente después de cada asignación,
                    verificar la evolución del tipo de estas variables (imprime todos los componentes de los
                    arreglo): </li></b>';
            echo '<code> &nbsp $a = "PHP5"; <br>
                &nbsp $z[] = &$a; <br>
                &nbsp $b = "5ta versión de PHP"; <br>
                &nbsp $c = $b * 10; <br>
                &nbsp $a .= $b; <br>
                &nbsp $b *= $c; <br>
                &nbsp $z = "MySQL"; <br>
                </code><br>';
            echo ' Salidas: <br>';
                $a = "PHP5";
            echo '"$a => ' . $a . '" <br>';
            $z[] = &$a;
            echo '"$z[] => [';
            foreach($z as $val){
                echo ' ' . $z[0];
            }
            echo ' ]" <br>';
            $b = '5ta versión de PHP';
            echo '"$b => ' . $b . '" <br>';
            $c = $b*10;
            echo '"$c => ' . $c . '" <br>';
            $a .= $b;
            echo '"$a => ' . $a . '" <br>';
            $b *= $c;
            echo '"$b => ' . $b . '" <br>';
            $z = "MySQL";
            echo '"$z => ' . $z . '" <br><br>';
            
            #Pregunta 4
            echo '<b><li> Lee y muestra los valores de las variables del ejercicio anterior, pero ahora con la ayuda de
                    la matriz $GLOBALS o del modificador global de PHP. </li></b>';
            echo 'Valor de $a = ' . $GLOBALS['a'] . '<br>'; 
            echo 'Valor de $b = ' . $GLOBALS['a'] . '<br>'; 
            echo 'Valor de $c = ' . $GLOBALS['a'] . '<br>'; 
            echo 'Valor de $z[0] = ' . $GLOBALS['z']. '<br><br>';

            #Pregunta 5
            echo '<b><li> Dar el valor de las variables $a, $b, $c al final del siguiente script: </li></b>';
            echo '<code> &nbsp $a = "7 personas"; <br>
            &nbsp $b = (integer) $a; <br>
            &nbsp $a = "9E3"; <br>
            &nbsp $c = (double) $a; <br>
            </code><br>';
            $a = "7 personas";
            $b = (integer) $a;
            $a = "9E3";
            $c = (double) $a; 

            #Pregunta 6
            echo '<b><li> Dar y comprobar el valor booleano de las variables $a, $b, $c, $d, $e y $f y muéstralas
                    usando la función var_dump(<datos>). </li></b>';
            echo '<code> &nbsp $a = "0"; <br>
            &nbsp $b = "TRUE"; <br>
            &nbsp $c = FALSE; <br>
            &nbsp $d = ($a OR $b); <br>
            &nbsp $e = ($a AND $c); <br>
            &nbsp $f = ($a XOR $b); <br>
            </code><br>';
            $a = "0";
            $b = "TRUE";
            $c = FALSE;
            $d = ($a OR $b);
            $e = ($a AND $c);
            $f = ($a XOR $b);
            echo ' Resultados: <br>';
            echo var_dump($a) . '<br>';
            echo var_dump($b) . '<br>';
            echo var_dump($c) . '<br>';
            echo var_dump($d) . '<br>';
            echo var_dump($e) . '<br>';
            echo var_dump($f) . '<br>';
            echo '<br> Cambios de valor usando "var_export()": <br>';
            echo "Valor de \$c: " . var_export($c, true) . "<br>"; // FALSE
            echo "Valor de \$e: " . var_export($e, true) . "<br><br>"; // FALSE

            #Pregunta 7
            echo '<b><li> Usando la variable predefinida $_SERVER, determina lo siguiente: </li></b>';
            echo '<ol>';
            echo '<li> La versión de Apache y PHP</li>';
            echo $_SERVER['SERVER_SIGNATURE'];
            echo '<li> El nombre del Sistema Operativo (servidor)</li>';
            echo $_SERVER['SERVER_SOFTWARE'];
            echo '<li> El idioma del navegador (cliente)</li>';
            echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];
            echo '</ol>';
        ?>
        
    </body>
</html>