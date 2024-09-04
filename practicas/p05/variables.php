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
            echo '<li> <b> Determina cuúl de las siguientes variables son validas y explica ¿por qué? </b></li>';
            echo '<br> <code> $_myvar | $_7var | $myvar | $var7 | $_element1 </code>';
            echo '<p> Justificación: Las variables en PHP deben de se indican con el símbolo $, seguido de una letra (mayúscula o minúscula) o guión bajo FORZOSAMENTE, depúes de estos se pueden 
                    colocar letras, números y caracteres con valores en el rango 127-255 correspondientes en ASCII.</p>';
            
            #Pregunta 2
            echo '<li> <b> Proporcionar los valores de $a, $b, $c como sigue: </li> <code> &nbsp $a = ManejadorSQL; <br> &nbsp $b = MySQL; <br> &nbsp $c = &$a; </code></b><br>';
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
                    se asigna a un puntero hacia "$a", tomando la logica comentada anteriormente, las tres variables muestran el mismo valor (que es lo que observamos). </p>';
            

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
                </code></b><br>';
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
            echo '"$z => ' . $z . '" <br>';

        ?>
        
    </body>
</html>