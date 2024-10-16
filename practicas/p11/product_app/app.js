// JSON BASE A MOSTRAR EN FORMULARIO
var baseJSON = {
    "precio": 0.0,
    "unidades": 1,
    "modelo": "XX-000",
    "marca": "NA",
    "detalles": "NA",
    "imagen": "img/default.png"
  };

// Funión para el like
function llenarLista(e){
    e.preventDefault();
    var carac = document.getElementById('search').value;
    console.log(carac)
    var lista = document.getElementById('opciones');
    var client = getXMLHttpRequest();
    client.open('POST', './backend/read.php', true);
    client.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    client.onreadystatechange = function () {
        // SE VERIFICA SI LA RESPUESTA ESTÁ LISTA Y FUE SATISFACTORIA
        if (client.readyState == 4 && client.status == 200) {
            //console.log('[CLIENTE]\n'+client.responseText);
            lista.innerHTML = "";
            // SE OBTIENE EL OBJETO DE DATOS A PARTIR DE UN STRING JSON
            //let productos = JSON.parse(client.responseText);    // similar a eval('('+client.responseText+')');
            try {
                let productos = JSON.parse(client.responseText); // Parsear JSON
                console.log(productos); // Verificar el contenido
                // SE VERIFICA SI EL OBJETO JSON TIENE DATOS
                productos.forEach(element => {
                    lista.append(element['id'] + " - " + element['nombre']);
                });
                if(productos.length > 0) {
                    console.log(productos.length);
                    
                }
            } catch (e) {
                console.error("No se pudo parsear el JSON:", e, client.responseText); // Mostrar el error y la respuesta
            }
        }
    };
client.send("carac="+carac);
}

// FUNCIÓN CALLBACK DE BOTÓN "Buscar"
function buscarID(e) {
    /**
     * Revisar la siguiente información para entender porqué usar event.preventDefault();
     * http://qbit.com.mx/blog/2013/01/07/la-diferencia-entre-return-false-preventdefault-y-stoppropagation-en-jquery/#:~:text=PreventDefault()%20se%20utiliza%20para,escuche%20a%20trav%C3%A9s%20del%20DOM
     * https://www.geeksforgeeks.org/when-to-use-preventdefault-vs-return-false-in-javascript/
     */
    e.preventDefault();

    // SE OBTIENE EL ID A BUSCAR
    var id = document.getElementById('search').value;

    // SE CREA EL OBJETO DE CONEXIÓN ASÍNCRONA AL SERVIDOR
    var client = getXMLHttpRequest();
    client.open('POST', './backend/read.php', true);
    client.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    client.onreadystatechange = function () {
        // SE VERIFICA SI LA RESPUESTA ESTÁ LISTA Y FUE SATISFACTORIA
        if (client.readyState == 4 && client.status == 200) {
            console.log('[CLIENTE]\n'+client.responseText);
            
            // SE OBTIENE EL OBJETO DE DATOS A PARTIR DE UN STRING JSON
            let productos = JSON.parse(client.responseText);    // similar a eval('('+client.responseText+')');
            
            // SE VERIFICA SI EL OBJETO JSON TIENE DATOS
            if(Object.keys(productos).length > 0) {
                // SE CREA UNA LISTA HTML CON LA DESCRIPCIÓN DEL PRODUCTO
                let descripcion = '';
                    descripcion += '<li>precio: '+productos.precio+'</li>';
                    descripcion += '<li>unidades: '+productos.unidades+'</li>';
                    descripcion += '<li>modelo: '+productos.modelo+'</li>';
                    descripcion += '<li>marca: '+productos.marca+'</li>';
                    descripcion += '<li>detalles: '+productos.detalles+'</li>';
                
                // SE CREA UNA PLANTILLA PARA CREAR LA(S) FILA(S) A INSERTAR EN EL DOCUMENTO HTML
                let template = '';
                    template += `
                        <tr>
                            <td>${productos.id}</td>
                            <td>${productos.nombre}</td>
                            <td><ul>${descripcion}</ul></td>
                        </tr>
                    `;

                // SE INSERTA LA PLANTILLA EN EL ELEMENTO CON ID "productos"
                document.getElementById("productos").innerHTML = template;
            }
        }
    };
    client.send("id="+id);
}

function validaciones(datProductos){
    var nombre = datProductos['nombre'];
    var precio = datProductos['precio'];
    var unidades = datProductos['unidades'];
    var modelo = datProductos['modelo'];
    var marca = datProductos['marca'];
    var detalles = datProductos['detalles'];
    var imagen = datProductos['imagen'];
    var vali = 1;
    console.log(nombre + " " + precio + " " + unidades + " " + modelo + " " + marca + " " + detalles + " " + imagen )

    if(nombre.length > 0 && nombre.length <= 100)
        vali++; console.log("sí1")
    if(marca.length > 0)
        vali++; console.log("sí2")
    if(modelo.length > 0 && modelo.length <= 25)
        vali++; console.log("sí3")
    if(precio.length > 0 && parseFloat(precio) > 99.9)
        vali++; console.log("sí4")
    if(detalles.length <= 255)
        vali++; console.log("sí5")
    if(unidades.length > 0 && parseInt(unidades) >= 0)
        vali++; console.log("sí16" + vali)
    if(imagen.length == 0)
        imagen = "img/default.jpg"
    if(vali == 7)
        return true;
    else
        return false;
}

// FUNCIÓN CALLBACK DE BOTÓN "Agregar Producto"
function agregarProducto(e) {
    e.preventDefault();

    // SE OBTIENE DESDE EL FORMULARIO EL JSON A ENVIAR
    var productoJsonString = document.getElementById('description').value;
    console.log("aquí"+productoJsonString);
    // SE CONVIERTE EL JSON DE STRING A OBJETO
    var finalJSON = JSON.parse(productoJsonString);
    // SE AGREGA AL JSON EL NOMBRE DEL PRODUCTO
    finalJSON['nombre'] = document.getElementById('name').value;
    // SE OBTIENE EL STRING DEL JSON FINAL
    productoJsonString = JSON.stringify(finalJSON,null,2);
    if(validaciones(finalJSON)){
        // SE CREA EL OBJETO DE CONEXIÓN ASÍNCRONA AL SERVIDOR
        var client = getXMLHttpRequest();
        client.open('POST', './backend/create.php', true);
        client.setRequestHeader('Content-Type', "application/json;charset=UTF-8");
        client.onreadystatechange = function () {
            // SE VERIFICA SI LA RESPUESTA ESTÁ LISTA Y FUE SATISFACTORIA
            if (client.readyState == 4 && client.status == 200) {
                //console.log(client.responseText);
                window.alert(client.responseText)
            }
        };
        //client.send(productoJsonString);
        window.alert("Si se puede :P");
    }
    else
        window.alert("Los datos dados son invalidos, intentelo de nuevo");
}

// SE CREA EL OBJETO DE CONEXIÓN COMPATIBLE CON EL NAVEGADOR
function getXMLHttpRequest() {
    var objetoAjax;

    try{
        objetoAjax = new XMLHttpRequest();
    }catch(err1){
        /**
         * NOTA: Las siguientes formas de crear el objeto ya son obsoletas
         *       pero se comparten por motivos historico-académicos.
         */
        try{
            // IE7 y IE8
            objetoAjax = new ActiveXObject("Msxml2.XMLHTTP");
        }catch(err2){
            try{
                // IE5 y IE6
                objetoAjax = new ActiveXObject("Microsoft.XMLHTTP");
            }catch(err3){
                objetoAjax = false;
            }
        }
    }
    return objetoAjax;
}

function init() {
    /**
     * Convierte el JSON a string para poder mostrarlo
     * ver: https://developer.mozilla.org/es/docs/Web/JavaScript/Reference/Global_Objects/JSON
     */
    var JsonString = JSON.stringify(baseJSON,null,2);
    document.getElementById("description").value = JsonString;
}