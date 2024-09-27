function getDatos(){ // Esta es la función de prueba
    var nombre = window.prompt("Nombre: ", "");
    var edad = window.prompt("Edad: ", "");

    var div1 = document.getElementById('nombre');
    div1.innerHTML = '<h3> Nombre ' + nombre + '</h3>';

    var div2 = document.getElementById('edad')
    div2.innerHTML = '<h3> Edad ' + edad + '</h3>';

}

function ejemplo1(){
    var div = document.getElementById('e1');
    div.innerHTML = 'Hola mundo';
    //document.write('Hola Mundo');
}

function ejemplo2(){
    var nombre = 'Juan';
    var edad = 10;
    var altura = 1.92;
    var casado = false;
    var div = document.getElementById('e2');
    div.innerHTML = nombre + '<br>' + edad + '<br>' + altura + '<br>' + casado;
}

function ejemplo3(){
    var nombre;
    var edad;
    nombre = prompt('Ingresa tu nombre:', '');
    edad = prompt('Ingresa tu edad:', '');
    var div = document.getElementById('e3');
    div.innerHTML = 'Hola ' + nombre + ' así que tienes ' + edad + ' años';
}

function ejemplo4(){
    var valor1;
    var valor2;
    valor1 = prompt('Introducir primer número:', '');
    valor2 = prompt('Introducir segundo número', '');
    var suma = parseInt(valor1)+parseInt(valor2);
    var producto = parseInt(valor1)*parseInt(valor2);
    var div = document.getElementById('e4');
    div.innerHTML = 'La suma es ' + suma + '<br> El producto es ' + producto;
} 

function ejemplo5(){
    var nombre;
    var nota;
    nombre = prompt('Ingresa tu nombre:', '');
    nota = prompt('Ingresa tu nota:', '');
    if (nota>=4) {
        var div = document.getElementById('e5');
        div.innerHTML = nombre+' esta aprobado con un ' + nota;
    }
}

function ejemplo6(){
    var num1,num2;
    num1 = prompt('Ingresa el primer número:', '');
    num2 = prompt('Ingresa el segundo número:', '');
    num1 = parseInt(num1);
    num2 = parseInt(num2);
    var div = document.getElementById('e6');
    if (num1>num2) {
        div.innerHTML = 'el mayor es '+num1;
    }
    else {
        div.innerHTML = 'el mayor es '+num2;
    }    
}

function ejemplo7(){
    var nota1,nota2,nota3;
    nota1 = prompt('Ingresa 1ra. nota:', '');
    nota2 = prompt('Ingresa 2da. nota:', '');
    nota3 = prompt('Ingresa 3ra. nota:', '');
    //Convertimos los 3 string en enteros
    nota1 = parseInt(nota1);
    nota2 = parseInt(nota2);
    nota3 = parseInt(nota3);
    var pro;
    pro = (nota1+nota2+nota3)/3;
    var div = document.getElementById('e7')
    if (pro>=7) {
        div.innerHTML = 'aprobado';
        }
        else {
            if (pro>=4) {
                div.innerHTML = 'regular';
            }
            else {
                div.innerHTML = 'reprobado';
            }
        }
}

function ejemplo8(){
    var valor;
    valor = prompt('Ingresar un valor comprendido entre 1 y 5:', '' );
    //Convertimos a entero
    valor = parseInt(valor);
    var div = document.getElementById('e8');
    switch (valor) {
        case 1: div.innerHTML = 'uno';
            break;
        case 2: div.innerHTML = 'dos';
            break;
        case 3: div.innerHTML = 'tres';
            break;
        case 4: div.innerHTML = 'cuatro';
            break;
        case 5: div.innerHTML = 'cinco';
            break;
        default: div.innerHTML = 'debe ingresar un valor comprendido entre 1 y 5.';
    }
}

function ejemplo9(){
    // Para este caso se realzó una modificación para que pintase el div correspondiente, además document.bgcolor ya esta "despreciado"
    var col;
    var div = document.getElementById('e9');
    col = prompt('Ingresa el color con que quierar pintar el fondo de la ventana (rojo, verde, azul)' , '');
    switch (col) {
        case 'rojo': div.style.background = '#ff0000';
        break;
        case 'verde': div.style.background = '#00ff00';
        break;
        case 'azul': div.style.background = '#0000ff';
        break;
    }
    
}

function ejemplo10(){
    var x;
    x=1;
    var div = document.getElementById('e10');
    var cad = '';
    while (x<=100) {
        cad += x + '<br>';
        x=x+1;
    }
    div.innerHTML = cad;
}

function ejemplo11(){
    var x=1;
    var suma=0;
    var valor;
    while (x<=5){
    valor = prompt('Ingresa el valor:', '');
    valor = parseInt(valor);
    suma = suma+valor;
    x = x+1;
    }
    var div = document.getElementById('e11');
    div.innerHTML = 'La suma de los valores es '+suma+'<br>';
}

function ejemplo12(){
    var valor;
    var cad = '';
    do{
        valor = prompt('Ingresa un valor entre 0 y 999:', '');
        valor = parseInt(valor);
        cad += 'El valor '+valor+' tiene ';
        if (valor<10)
            cad += 'Tiene 1 dígitos';
        else
            if (valor<100) {
                cad += 'Tiene 2 dígitos';
            }
            else {
                cad += 'Tiene 3 dígitos';
            }
        cad += '<br>';
    }while(valor!=0);
    var div = document.getElementById('e12');
    div.innerHTML = cad;
}

function ejemplo13(){
    var f;
    var cad = '';
    for(f=1; f<=10; f++)
    {
        cad += f + ' ';
    }
    var div = document.getElementById('e13');
    div.innerHTML = cad;
}

function ejemplo14(){
    var cad = '';
    cad += 'Cuidado<br>';
    cad += 'Ingresa tu documento correctamente<br>';
    cad += 'Cuidado<br>';
    cad += 'Ingresa tu documento correctamente<br>';
    cad += 'Cuidado<br>';
    cad += 'Ingresa tu documento correctamente<br>';
    var div = document.getElementById('e14');
    div.innerHTML = cad;
}

function ejemplo15(){
    function mostrarMensaje() {
            var div = document.getElementById('e15');
            cad = div.textContent;
            cad += 'Cuidado<br>';
            cad += 'Ingresa tu documento correctamente<br>';
            div.innerHTML = cad;
        }
        mostrarMensaje();
        mostrarMensaje();
        mostrarMensaje();
    
}

function ejemplo16(){
    function mostrarRango(x1,x2) {
        var inicio;
        var cad = '';
        for(inicio=x1; inicio<=x2; inicio++) {
            cad += inicio + ' ';
        }
        var div = document.getElementById('e16');
        div.innerHTML = cad;
    }
    var valor1,valor2;
    valor1 = prompt('Ingresa el valor inferior:', '');
    valor1 = parseInt(valor1);
    valor2 = prompt('Ingresa el valor superior:', '');
    valor2 = parseInt(valor2);
    mostrarRango(valor1,valor2);
}

function ejemplo17(){
    function convertirCastellano(x) {
        if(x==1)
            return 'uno';
        else
            if(x==2)
                return 'dos';
            else
                if(x==3)
                    return 'tres';
                else
                    if(x==4)
                        return 'cuatro';
                    else
                        if(x==5)
                            return 'cinco';
                        else
                            return 'valor incorrecto';
    }
    var valor = prompt('Ingresa un valor entre 1 y 5', '');
    valor = parseInt(valor);
    var r = convertirCastellano(valor);
    var div = document.getElementById('e17');
    div.innerHTML = r;
}

function ejemplo18(){
    function convertirCastellano(x) {
        switch (x) {
            case 1: return "uno";
            case 2: return "dos";
            case 3: return "tres";
            case 4: return "cuatro";
            case 5: return "cinco";
            default: return "valor incorrecto";
        }
    }
    var valor = prompt('Ingresa un valor entre 1 y 5', '');
    valor = parseInt(valor);
    var r = convertirCastellano(valor);
    var div = document.getElementById('e18');
    div.innerHTML = r;
}