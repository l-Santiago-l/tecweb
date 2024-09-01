<!DOCTYPEhtmlPUBLIC"-//W3C//DTDXHTML1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
    <?php
        $variable1="PHP5";
    ?>
<html xmlns="http://www.w3.org/1999/xhtml"xml:lang=“es">
    <head>
        <metahttp-equiv="Content-Type"content="text/html;charset=UTF-8"/>
            <?php
                echo"<title>Una pagina llena de scripts PHP</title>";
            ?>
        </head>
    <body>
    <?php
        echo "<h1> BUENOS DIAS A TODOS</h1>";
    ?>
    <?php
        echo"<h2>Titulo escrito por PHP</h2>";
        $variable2="MySQL";
    ?>
    <p>Vas adescubrir <?= $variable1 ?></p>
        <?php
            echo "<h2>Buenos días de $variable1 :D </h2>";
        ?>
        <p>Utilización de variables PHP<br/>Vas a descubrir igualmente MySQL
        <?php
            echo $variable2;
        ?>
    </p>
    <?= "<div><big>Buenos días de $variable2 </big> </div>"?>
    </body>
</html>