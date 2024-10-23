<?php
    include_once __DIR__.'/database.php';

    $data = array(
        'status'  => 'error',
        'message' => 'Ya existe un producto con ese nombre'
    );
    // SE OBTIENE LA INFORMACIÓN DEL PRODUCTO ENVIADA POR EL CLIENTE
    if(isset($_POST['obj'])){

        // Como se mando un obj tipo Json
        $jsonOBJ = json_decode($_POST['obj']);
        $sql = "SELECT * FROM productos WHERE nombre = '{$jsonOBJ->nombre}' AND eliminado = 0";
	    $result = $conexion->query($sql);
        
        if ($result->num_rows == 0) {
            #$conexion->set_charset("utf8");
            $sql = "INSERT INTO productos VALUES (null, '{$jsonOBJ->nombre}', '{$jsonOBJ->marca}', '{$jsonOBJ->modelo}', {$jsonOBJ->precio}, '{$jsonOBJ->detalles}', {$jsonOBJ->unidades}, '{$jsonOBJ->imagen}', 0)";
            if($conexion->query($sql)){
                $data['status'] =  "success";
                $data['message'] =  "Producto agregado";
            } else {
                $data['message'] = "ERROR: No se ejecuto $sql. " . mysqli_error($conexion);
            }
        }
        $result->free();
        // Cierra la conexion
        $conexion->close();
    }   
    else{
        $data['status'] =  "ERROR";
        $data['message'] =  "ocurrió un error con el POST";    
    }
    echo json_encode($data, JSON_PRETTY_PRINT);
?>