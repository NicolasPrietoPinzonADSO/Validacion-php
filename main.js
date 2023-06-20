function validar(){
    let nombre = document.getElementById("nombre");
    let apellido = document.getElementById("apellido");
    let telefono = document.getElementById("telefono");
    let email = document.getElementById("email");
    let edad = document.getElementById("edad");
    
    if(nombre.lenght==0){
        alert("El campo de nombre esta vacio")
    }
    if(apellido.lenght==0){
        alert("El campo de apellido esta vacio")
    }
    if(telefono.lenght==0){
        alert("El campo de telefono esta vacio")
    }else if(!isNaN(telefono)){
        alert("Esta ingresando algo que no es un numero en el campo de telefono")
    }
    if(email.lenght==0){
        alert("El campo de email esta vacio")
    }
    if(edad.lenght==0){
        alert("El campo de edad esta vacio")
    }else if(!isNaN(edad)){
        alert("Esta ingresando algo que no es un numero en el campo de edad")
    }


}