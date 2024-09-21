<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title> Variables PHP </title>
    </head>
    <body>
        <?php error_reporting(E_ERROR | E_PARSE); ?>
        <h1> Práctica 5 - Manejo de variables en PHP </h1>
        
        <!-- Pregunta 1 -->
        <p><strong> 1. Determina cuúl de las siguientes variables son validas y explica ¿por qué?</strong><br/>
            <code> $_myvar | $_7var | $myvar | $var7 | $_element1 </code>
        </p>
        <p> Justificación: Las variables en PHP deben de se indican con el símbolo $, seguido de una letra (mayúscula o minúscula) o guión bajo FORZOSAMENTE, depúes de estos se pueden 
            colocar letras, números y caracteres con valores en el rango 127-255 correspondientes en ASCII.<br/>
        </p>

        <!-- Pregunta 2 -->
        <p><strong> 2. Proporcionar los valores de $a, $b, $c como sigue:  <br/>
            <code> 
                &nbsp; $a = ManejadorSQL; <br/>
                &nbsp; $b = MySQL; <br/> 
                &nbsp; $c = &amp;$a; 
            </code>
        </strong></p>
        <ol>
            <li> Ahora muestra el contenido de cada variable <br/>
                <?php            
                    # Aquí se hace la asignación
                    $a = "ManejadorSQL";
                    $b = 'MySQL';
                    $c = &$a;
                    echo '&quot;$a => ' . $a . '&quot; <br/>' . '&quot;$b => ' . $b . '&quot;<br/>' . '&quot;$c => ' . $c . '&quot; <br/><br/> ';
                ?>
            </li>
            <li> Agrega al código actual las siguientes asignaciones: <br/>
                <code> 
                        &nbsp; $a = PHP server; <br/>
                        &nbsp; $b = &amp;$a; 
                </code><br/><br/>
            </li>

            <li> Vuelve a mostrar el contenido de cada uno
                <?php
                    # Aquí se hace la asignación
                    $a = "PHP server";
                    $b = &$a;
                    echo '&quot;$a => ' . $a . '&quot; <br/>' . '&quot;$b => ' . $b . '&quot;<br/>' . '&quot;$c => ' . $c . '&quot; <br/><br/>';
                ?>
            </li>

            <li> Describe y muestra en la página obtenida qué ocurrió en el segundo bloque de asignaciones 
            <p> Lo que ocurre muy probablemente se deba al uso de los PUNTEROS, en primer lugar "$c" se declara como un puntero "al contenido" de a (por lo que al mostrar 
                su contenido en realidad muestra lo que almacena "$a"), por eso en el inciso "a" podemos ver que "$a" y "$c" tienen el mismo valor. Ahora, para el inciso "b" la variable "$b"
                se asigna a un puntero hacia "$a", tomando la logica comentada anteriormente, las tres variables muestran el mismo valor (que es lo que observamos). <br/>
            </p></li>
        </ol>

        <!-- Pregunta 3 --> 
        <p><strong> 3. Muestra el contenido de cada variable inmediatamente después de cada asignación,
                    verificar la evolución del tipo de estas variables (imprime todos los componentes de los
                    arreglo): 
            </strong>
            <code><br/> &nbsp; $a = "PHP5"; <br/>
                &nbsp; $z[] = &amp;$a; <br/>
                &nbsp; $b = "5ta versión de PHP"; <br/>
                &nbsp; $c = $b * 10; <br/>
                &nbsp; $a .= $b; <br/>
                &nbsp; $b *= $c; <br/>
                &nbsp; $z = "MySQL"; <br/>
            </code><br/>
            Salidas: <br/>
            <?php
                $a = "PHP5";
                echo '&quot;$a => ' . $a . '&quot; <br/>';

                $z[0] = &$a;
                echo '&quot;$z[] => [';
                foreach($z as $val){
                    echo ' ' . $val;
                }
                echo ' ] <br/>';

                $b = "5ta versión de PHP";
                echo '&quot;$b => ' . $b . '&quot; <br/>';

                $c = $b*10;
                echo '&quot;$c => ' . $c . '&quot; <br/>';

                $a .= $b;
                echo '&quot;$a => ' . $a . '&quot; <br/>';
                $b *= $c;
                echo '&quot;$b => ' . $b . '&quot; <br/>';
                $z[0] = "MySQL";
                echo '&quot;$z[0] => [';
                foreach($z as $val){
                    echo ' ' . $val;
                }
                echo ' ] <br/><br/>';

            ?>
        </p>

        <!-- Pregunta 4 -->
        <p><strong> 4. Lee y muestra los valores de las variables del ejercicio anterior, pero ahora con la ayuda de
            la matriz $GLOBALS o del modificador global de PHP. <br/></strong>
            <?php
                echo 'Valor de $a = ' . $GLOBALS['a'] . '<br/>'; 
                echo 'Valor de $b = ' . $GLOBALS['b'] . '<br/>'; 
                echo 'Valor de $c = ' . $GLOBALS['c'] . '<br/>'; 
                echo 'Valor de $z[0] = ' . $GLOBALS['z'][0]. '<br/><br/>';
            ?>
        </p>

        <!-- Pregunta 5 -->
        <p><strong> 5. Dar el valor de las variables $a, $b, $c al final del siguiente script: </strong>
            <code><br/> &nbsp; $a = "7 personas"; <br/>
                    &nbsp; $b = (integer) $a; <br/>
                    &nbsp; $a = "9E3"; <br/>
                    &nbsp; $c = (double) $a; <br/>
            </code><br/>
            <?php
                $a = "7 personas";
                $b = (integer)$a;
                $a = "9E3";
                $c = (double)$a; 
                echo "Salidas: <br/>";
                echo '$a = "' . $a . '&quot;<br/>';
                echo '$b = "' . $b . '&quot;<br/>';
                echo '$c = "' . $c . '&quot;<br/>';
            ?>
        </p>

        <!-- Pregunta 6 -->
        <p><strong> 6.  Dar y comprobar el valor booleano de las variables $a, $b, $c, $d, $e y $f y muéstralas
            usando la función var_dump(&lt;datos&gt;). </strong>
            <code><br/> &nbsp; $a = "0"; <br/>
                    &nbsp; $b = "TRUE"; <br/>
                    &nbsp; $c = FALSE; <br/>
                    &nbsp; $d = ($a OR $b); <br/>
                    &nbsp; $e = ($a AND $c); <br/>
                    &nbsp; $f = ($a XOR $b); <br/>
            </code><br/>
            <?php
                $a = "0";
                $b = "TRUE";
                $c = FALSE;
                $d = ($a OR $b);
                $e = ($a AND $c);
                $f = ($a XOR $b);
                echo ' Resultados: <br/>';
                echo var_dump($a) . '<br/>';
                echo var_dump($b) . '<br/>';
                echo var_dump($c) . '<br/>';
                echo var_dump($d) . '<br/>';
                echo var_dump($e) . '<br/>';
                echo var_dump($f) . '<br/>';
                echo '<br/> Cambios de valor usando "var_export()": <br/>';
                echo "Valor de \$c: " . var_export($c, true) . "<br/>";
                echo "Valor de \$e: " . var_export($e, true) . "<br/><br/>";
            ?>
        </p>

        <!-- Pregunta 7 -->
        <p><strong> 7. Usando la variable predefinida $_SERVER, determina lo siguiente: </strong></p>
        <ol>
            <?php
                echo '<li>La versión de Apache y PHP<br/>';
                echo $_SERVER['SERVER_SIGNATURE'] .'<br/> </li>';
                echo '<li> El nombre del Sistema Operativo (servidor)<br/>';
                echo $_SERVER['SERVER_SOFTWARE'] .'<br/><br/> </li>';
                echo '<li> El idioma del navegador (cliente) <br/>';
                echo $_SERVER['HTTP_ACCEPT_LANGUAGE'] . '</li>';
            ?>
        </ol>
        <p>
            <a href="https://validator.w3.org/markup/check?uri=referer"><img
            src="https://www.w3.org/Icons/valid-xhtml11" alt="Valid XHTML 1.1" height="31" width="88" /></a>
        </p>
    </body>
</html>