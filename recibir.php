<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['email'];
    $edad = $_POST['edad'];
}
  if(empty($nombre)){
    $nombre = "Campo vacio";
}
if(empty($apellido)){
    $apellido = "Campo vacio";
}
if(empty($telefono)){
    $telefono = "Campo vacio";
}
if(empty($correo)){
    $correo = "Campo vacio";
}
if(empty($edad)){
    $edad = "Campo vacio";
}
    
echo "El nombre que ha ingresado es: $nombre <br>";
echo "El apellido que ha ingresado es: $apellido <br>";
echo "El telefono que ha ingresado es: $telefono <br>";
echo "El correo que ha ingresado es: $correo <br>";
echo "La edad que ha ingresado es: $edad <br>";

?>