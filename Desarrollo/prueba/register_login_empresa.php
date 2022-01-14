<?php
include_once("../src/conexion.php");
include_once("../src/clases/Empresa.php");

$newEmpresa = new Empresa($con);

/*SOLO CREA USUARIO EMPRESA*/
if(isset($_POST['Registro'])) {
  $usuario = $_POST['usuario'];
  $contraseña = $_POST['contraseña'];
  $nombre = $_POST['nombre'];
  $ruc = $_POST['ruc'];
 
  
  $listo = $newEmpresa->registrarempresa($usuario,$contraseña,$nombre,$ruc);
  
  if ($listo){
    echo 'registro';
    }
    else{
      echo 'fallo';
    }
}

if(isset($_POST['Iniciarsesion'])) {
  $usuario = $_POST['usuario'];
  $contraseña = $_POST['contraseña'];

  $listo = $newUsuario->iniciar($usuario,$contraseña);

  if ($listo){
    header('Location: ../indexv3.php');
  }
  else{
   echo 'no accede';
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
              <input type="text" placeholder="Username" name="usuario" id="usuario"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="contraseña" id="contraseña"/>
            </div>
            <input type="submit" value="Acceder" class="btn solid" name="Iniciarsesion" id="Iniciar" />
           
          
          </form>

          <form action="register_login.php" method="POST" class="sign-up-form formulario">
            <h2 class="title">Registrarse</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Usuario" name="usuario" id="usuario"/>
            </div>
           
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Contraseña" name="contraseña"/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nombre" name="nombre"/>
            </div>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="RUC" name="ruc"/>
            </div>

            <input type="submit" class="btn" value="Regitrarse" name="Registro"/>
           
            
          </form>
        </div>
      </div>
      
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>No tienes una cuenta?</h3>
            <p>
              Crea una y .....
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Registrarse
            </button>
          </div>
          <img src="img/login.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Ya tienes una cuenta ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Inicia sesión
            </button>
          </div>
          <img src="img/signup.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>


        <!--Fotter-->
         <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js?v=<?php echo time(); ?>" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- FontAwesome para iconos -->
        <script src="https://kit.fontawesome.com/57888ec9eb.js?v=<?php echo time(); ?>" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11?v=<?php echo time(); ?>"></script>
   
  </body>
</html>
