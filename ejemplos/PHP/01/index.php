<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 1</title>

</head>
<body>
    <?php 
        require_once __DIR__.'/persona.php';
        $per1 = new Persona;
        $per1->incializar('Fullano');
        $per1->mostrar();

        $per2 = new Persona;
        $per2->incializar('Megano');
        $per2->mostrar();
    ?>
</body>
</html>