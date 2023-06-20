<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  <title>Resultados del Formulario</title>
</head>

<body>
  <div class="container">
    <h1 class="text-center mt-5">Resultados del Formulario</h1>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $nombre = $_POST['nombre'];
          $apellido = $_POST['apellido'];
          $telefono = $_POST['telefono'];
          $correo = $_POST['email'];
          $edad = $_POST['edad'];
          $sexo = $_POST['sexo'];
        }

        if (empty($nombre)) {
          $nombre = "Campo vacío";
        }
        if (empty($apellido)) {
          $apellido = "Campo vacío";
        }
        if (empty($telefono)) {
          $telefono = "Campo vacío";
        }
        if (empty($correo)) {
          $correo = "Campo vacío";
        }
        if (empty($edad)) {
          $edad = "Campo vacío";
        }
        ?>

        <h2 class="mb-3">Datos recibidos:</h2>
        <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
        <p><strong>Apellido:</strong> <?php echo $apellido; ?></p>
        <p><strong>Teléfono:</strong> <?php echo $telefono; ?></p>
        <p><strong>Correo:</strong> <?php echo $correo; ?></p>
        <p><strong>Edad:</strong> <?php echo $edad; ?></p>
        <p><strong>Sexo:</strong> <?php echo $sexo; ?></p>
      </div>
    </div>
  </div>


</body>

</html>