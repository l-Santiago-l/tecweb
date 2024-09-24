<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Busca tus productos</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
        <?php
            #if(isset($_GET['nombre']) && isset($_GET['marca']) && isset($_GET['modelo']) && isset($_GET['precio']) && isset($_GET['unidades']) && isset($_GET['detalles']) && isset($_GET['img'])){
            if(isset($_POST['precio']) && isset($_POST['unidades'])){
                $nombre = $_POST['nombre'];
                $marca  = $_POST['marca'];
                $modelo = $_POST['modelo'];
                $precio = $_POST['precio'];
                $detalles = $_POST['detalles'];
                $unidades = $_POST['unidades'];
                $imagen   = $_POST['img'];

                
                /** SE CREA EL OBJETO DE CONEXION */
                @$link = new mysqli('localhost', 'root', '1234', 'marketzone');	

                /** comprobar la conexión */
                if ($link->connect_errno) 
                {
                    die('Falló la conexión: '.$link->connect_error.'<br/>');
                    
                    /** NOTA: con @ se suprime el Warning para gestionar el error por medio de código */
                }

                /** Crear una tabla que no devuelve un conjunto de resultados */
                # $sql = "INSERT INTO productos VALUES (null, '{$nombre}', '{$marca}', '{$modelo}', {$precio}, '{$detalles}', {$unidades}, '{$imagen}')";
                $sql = "SELECT * FROM productos WHERE nombre = '$nombre' AND modelo = '$modelo' AND marca = '$marca'";
                if ( $link->query($sql) ){
                    echo 'Hay';
                }
                else{
                    echo 'No hay';
                }

                $link->close();
            }
            else{
                die('Pamaetros no detectados..');
                header("formulario_productos.html");
            }
        ?>        
	</body>
</html>
