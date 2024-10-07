<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
	<?php
        $data = array();
        /** SE CREA EL OBJETO DE CONEXION */
        @$link = new mysqli('localhost', 'root', '1234', 'marketzone');	

        /** comprobar la conexión */
        if ($link->connect_errno) 
        {
            die('Falló la conexión: '.$link->connect_error.'<br/>');
                /** NOTA: con @ se suprime el Warning para gestionar el error por medio de código */
        }

        if ( $result = $link->query("SELECT * FROM productos WHERE eliminado = '0'") ) 
        {
            /** Se extraen las tuplas obtenidas de la consulta */
            $row = $result->fetch_all(MYSQLI_ASSOC);

            /** Se crea un arreglo con la estructura deseada */
            foreach($row as $num => $registro) {            // Se recorren tuplas
                foreach($registro as $key => $value) {      // Se recorren campos
                    $data[$num][$key] = $value;
                }
            }

            /** útil para liberar memoria asociada a un resultado con demasiada información */
            $result->free();
        }

        $link->close();
	?>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Busca tus productos</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <script>
            function enviarD() {
                // se obtiene el id de la fila donde está el botón presinado
                var rowId = event.target.parentNode.parentNode.id;

                // se obtienen los datos de la fila en forma de arreglo
                var data = document.getElementById(rowId).querySelectorAll(".row-data");

                // Separamos cada dato
                var nombre = data[0].innerHTML;
                var marca = data[1].innerHTML;
                var modelo = data[2].innerHTML;
                var precio = data[3].innerHTML;
                var unidades = data[4].innerHTML;
                var detalles = data[5].innerHTML;
                var img = (data[6].querySelector("img")).getAttribute('src');

                var urlForm = "formulario_productos_v2.php";
                var get = "?nombre="+ nombre +"&marca="+ marca +"&modelo="+ modelo +"&precio="+ precio +"&unidades="+ unidades +"&detalles="+ detalles +"&img="+ img;
                window.open(urlForm+get);
                /*var urlForm = "formulario.php";
                var propName = "nombre="+name;
                var propAge = "edad="+age;
                window.open(urlForm+"?"+propName+"&"+propAge); */
            }
        </script>
	</head>
	<body>
        <div style="align-items: center; width: 89%; margin-left: 5%;">
        <br/>
        <h3 style = "text-align: center">PRODUCTOS</h3>
        <br/>
        <?php if( isset($data) ) : ?>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Unidades</th>
                        <th scope="col">Detalles</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($data as $num => $registro):            // Se recorren tuplas
                    ?>
                    <tr id=<? echo '"'.$registro['id'].'"' ?>>
                        <th scope='row'> <? echo $registro['id'] ?></th>
                        <td class="row-data"> <? echo $registro['nombre'] ?> </td>
                        <td class="row-data"> <? echo $registro['marca'] ?> </td>
                        <td class="row-data"> <? echo $registro['modelo'] ?> </td>
                        <td class="row-data"> <? echo $registro['precio'] ?> </td>
                        <td class="row-data"> <? echo $registro['unidades'] ?> </td>
                        <td class="row-data"> <? echo $registro['detalles'] ?> </td>
                        <td class="row-data"><img src = <? echo "'".$registro['imagen']."'"?> width = 50% height = 30%  ></td>
                        <td><input type="image" src="img/editar.svg" onclick="enviarD()"></td>
                    </tr>

                    <?php
                        endforeach
                    ?>
                </tbody>
            </table>

        <?php elseif(!empty($id)) : ?>

            <script>
                alert('El ID del producto no existe');
            </script>

        <?php endif; ?>
        </div>
	</body>
</html>