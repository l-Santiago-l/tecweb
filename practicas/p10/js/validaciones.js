function validarObligatoriosL(control, lbl){
    if(control.value == '' ){
        document.getElementById(lbl).style.display = "block";
    }
    else{
        document.getElementById(lbl).style.display = "none";
    }
}

function validarObligatoriosN(control, lbl, min){
    l = document.getElementById(lbl);
    if(control.value == '' ){
        l.style.display = "block";
        l.innerHTML = "<strong> Este campo es obligatorio</strong>";
    }
    else{
        if(parseInt(control.value) < min){
            l.style.display = "block";
            l.innerHTML = "<strong>  Debe ser un valor <= " + min + "</strong>";
        }
        else
            l.style.display = "none";
    }
}

function validarTam(e, control, lbl, lim){
    //var type =  e.inputType
    var lbl = document.getElementById(lbl);
    //var valRest = parseInt(lbl.innerHTML);
    var cad = control.value;
    if(cad.length > lim){
        cad = cad.slice(0, lim);
        control.value = cad;
        lbl.innerHTML = "0";
        alert("Ha excedido el número máximo de caracteres")
    }
    else{
        var aux = lim - parseInt(cad.length);
        lbl.innerHTML = "" + aux;
    }
    /*
    // deleteContentForward , deleteContentBackward, insertText
    if(valRest == 0 && (type == 'insertText' || type == "insertFromPaste")){
        alert('Ha llegado al límite de caracteres permitidos');
        //cad = cad.slice(0, -1);
        //control.value = cad;
        return false;
    }
    else if((type == 'insertText' || type == "insertFromPaste") && valRest > 0){
        valRest = cad.length - valRest;
        lbl.innerHTML = "" + valRest;
    }
    else if(type != 'deleteContentBackward' || type != 'deleteContentForward'){
        valRest++;
        lbl.innerHTML = "" + valRest;
    }*/
}

/*function vacio(control, lbl, lim){
    var lbl = document.getElementById(lbl);
    var cad = control.value;
    if(cad.length == 0){
        lbl.innerHTML = lim;
    }
}*/

function valNumRa(e){
    var code = e.which;
    if(code>=48 && code<=57)
        return true;
    else if(code == 46)
        return true;
    else
        return false;
}

function valNumNa(e){
    var code = e.which;
    if(code>=48 && code<=57)
        return true;
    else
        return false;
}

function comprobarVal(){
    var aux = 0;
    if (document.getElementById("inNom").value != '')
        aux++;
    if (document.getElementById("inMarca").value != '')
        aux++;
    if (document.getElementById("inModelo").value != '')
        aux++;
    if (document.getElementById("inPrecio").value != '')
        aux++;
    if (document.getElementById("inUni").value != '')
        aux++;
    if (document.getElementById("inImg").value == ''){
        aux++;
        document.getElementById("inImg").value = 'img/default.jpg'
    }
    if (document.getElementById("inDet").value != '')
        aux++;
    if(aux == 7){
        return true;
    }
    else{
        alert("Faltan campos por llenar");
        return false;
    }
}

