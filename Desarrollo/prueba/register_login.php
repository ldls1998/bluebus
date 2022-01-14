<?php
include_once("../src/conexion.php");
include_once("../src/clases/Usuario.php");

$newUsuario = new Usuario($con);

/*SOLO CREA USUARIO*/
if(isset($_POST['Registro'])) {
  $usuario = $_POST['usuario'];
  $contraseña = $_POST['contraseña'];

  $listo = $newUsuario->registrar($usuario,$contraseña);


  if ($listo){
  echo 'salio bien';
  }
  else{
    echo':c';
  }
}

if(isset($_POST['Iniciarsesion'])) {
  $usuario = $_POST['usuario'];
  $contraseña = $_POST['contraseña'];

  $listo = $newUsuario->iniciar($usuario,$contraseña);


  if ($listo){
  echo 'accede';
  }
  else{
    echo'no accede';
  }
}




?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Viajeseguro | Acceder</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="register_login.php" method="POST" class="sign-in-form">
            <h2 class="title">Iniciar sesión</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="usuario" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="contraseña"/>
            </div>
            <input type="submit" value="Acceder" class="btn solid" name="Iniciarsesion" />
           
           
          </form>

          <form action="register_login.php" method="POST" class="sign-up-form">
            <h2 class="title">Registrarse</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Usuario" name="usuario"/>
            </div>
           
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Contraseña" name="contraseña"/>
            </div>
           
            <input type="submit" class="btn" value="Regitrarse" name="Registro" />
           
          
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/login.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/signup.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
