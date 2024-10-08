<!DOCTYPE html >
<html>
    <head>
        <meta charset="utf-8" >
        <title>Registro al Concurso</title>
        <style type="text/css">
            body{
                background-color: #8EACCD;
            }
            div{
                align-items: center;
                width: 65%; 
                margin-left: 10%;
                background-color: white;
            }
            h1{
                text-align: center;
            }
            .formI{
                width: 95%;
            }
            .lblsCa{
                color: gray;
                margin-left: 90%;
                font-size: 10px;
            }
            .lblsAdv{
                color: red;
                font-size: 12px;
                display: none;
            }
            legend{
                font-weight: bold;
            }
        </style>
        <script src="js/validaciones.js"></script>
    </head>
    <body>
        <div>
            <?php 
                session_start();
                $_SESSION['id'] = (!empty($_POST['id'])?$_POST['id']:$_GET['id']);
            ?>
            <fieldset>
                <h1>Formulario para ingresar Productos</h1>
                <br/>
                <form id="formProductos" action="update_producto.php" method="post">    
                    <fieldset>
                        <legend>Información del producto</legend>
                        <fieldset>
                            <legend> Nombre </legend> <!-- Requerido y tener 100 caracteres o menos" -->
                            <label id="lblNombre" class="lblsCa">100</label>
                            <input type="text" value="<?= !empty($_POST['nombre'])?$_POST['nombre']:$_GET['nombre'] ?>" name="nombre" id="inNom" class="formI" oninput="validarTam(event, this, 'lblNombre', 100);" onblur="validarObligatoriosL(this, 'lblNombreA');"><br/>
                            <label id="lblNombreA" class="lblsAdv"><strong> Este campo es obligatorio</strong></label>
                        </fieldset>
                        <br/>
                        <fieldset>
                            <legend> Marca </legend> <!-- Requerido y seleccionarse de una lista de opciones -->
                            <select name="marca" class="formI" size="1" id="inMarca">
                                <option value="M1">Modelo 1</option>
                                <option value="M2">Modelo 2</option>
                                <option value="M3">Modelo 3</option>
                                <option value="M4">Modelo 4</option>
                            </select>
                            <!-- Considero que esta lista se tiene que llenar dinamicamente, por lo cual realizar todo los cambios para que se muestre la marca enviada por GET/POST aún no aplicarían-->
                            <!--<input type="text" name="marca" class="formI" onblur="validarObligatorios(this, 'lblMarcaA');"> -->
                            <label id="lblMarcaA" class="lblsAdv"><strong> Este campo es obligatorio</strong></label>
                        </fieldset>
                        <br/>
                        <fieldset>
                            <legend> Modelo </legend> <!-- Requerido texto alfanumerico y tener 25 caracteres o menos -->
                            <label id="lblModelo" class="lblsCa">25</label>
                            <input type="text" value="<?= !empty($_POST['modelo'])?$_POST['modelo']:$_GET['modelo'] ?>" name="modelo" id="inModelo" class="formI" oninput="validarTam(event, this, 'lblModelo', 25);" onblur="validarObligatoriosL(this, 'lblModeloA');">
                            <label id="lblModeloA" class="lblsAdv"><strong> Este campo es obligatorio</strong></label>
                        </fieldset>
                        <br/>
                        <fieldset>
                            <legend> Precio </legend> <!-- Requerido mayor a 99.99-->
                            <input type="text" value="<?= !empty($_POST['precio'])?$_POST['precio']:$_GET['precio'] ?>" name="precio" id="inPrecio" class="formI" onblur="validarObligatoriosN(this, 'lblPrecioA', 100);" onkeypress="return valNumRa(event)">
                            <label id="lblPrecioA" class="lblsAdv"><strong> Este campo es obligatorio</strong></label>
                        </fieldset>
                        <br/>
                        <fieldset>
                            <legend> Unidades </legend>  <!-- Requerido mayor o igual a 0 -->
                            <input type="number" value="<?= !empty($_POST['unidades'])? (int)$_POST['unidades'] : (int)$_GET['unidades'] ?>" name="unidades" id="inUni" class="formI" onblur="validarObligatoriosN(this, 'lblUnidadesA', 0);" onkeypress="return valNumNa(event)">
                            <label id="lblUnidadesA" class="lblsAdv"><strong> Este campo es obligatorio</strong></label>
                        </fieldset>
                        <br/> 
                        <fieldset>
                            <legend> Imagen </legend> <!-- Opcional, en caso de no usarse poner una por defecto -->
                            <input type="text" name="img" class="formI" id="inImg" value="<?= !empty($_POST['img'])?$_POST['img']:$_GET['img'] ?>">
                        </fieldset>
                        <br/>
                        <fieldset>
                            <legend> Detalles del producto </legend>  <!-- Opcionales debe tener 250 o menos -->
                            <label id="lblDatelles" class="lblsCa">250</label>
                            <textarea name="detalles" id="inDet" rows="4" cols="60" class="formI" placeholder="No más de 250 caracteres de longitud" oninput="validarTam(event, this, 'lblDatelles', 250);" onblur="validarObligatorios(this, 'lblDatellesA');"><?php echo!empty($_POST['detalles']) ? $_POST['detalles'] : $_GET['detalles']; ?></textarea>
                            <label id="lblDatellesA" class="lblsAdv"  ><strong> Este campo es obligatorio</strong></label>
                        </fieldset>
                        
                        <p>
                            <input type="submit" value="Editar" id="btn" onclick="return comprobarVal()">
                            <input type="reset" id="btn">
                        </p>
                    </fieldset>
                </form>
            </fieldset>
        </div>
    </body>
</html>