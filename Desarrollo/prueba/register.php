<?php
include_once("../src/conexion.php");
include_once("../src/clases/Empresa.php");

$newEmpresa = new Empresa($con);


/*SOLO CREA USUARIO EMPRESA*/
if(isset($_POST['Registroempresa'])) {
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
    <link rel="stylesheet" href="css/style.css" />
    <title>Viajeseguro | Acceder</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="register.php" method="POST" class="sign-in-form">
            <h2 class="title">Registrar usuario viajero</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Usuario" name="usuario" id="usuario"/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nombres" name="nombre" id="nombre"/>
            </div>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Apellidos" name="apellido" id="apellido"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Contraseña" name="contraseña" id="contraseña"/>
            </div>
            <div class="input-field">
              <i class="far fa-id-card"></i>
              <input type="text" placeholder="dni" name="dni" id="dni"/>
            </div>
            
            <input type="submit" value="Acceder" class="btn solid" name="Iniciarsesion" id="Iniciarsesion"/>
           
          
          </form>

          <form action="register.php" method="POST" class="sign-up-form formulario">
            <h2 class="title">Registrar usuario empresa</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Usuario" name="usuario" id="usuario"/>
            </div>
           
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Contraseña" name="contraseña" id="contraseña"/>
            </div>
            <div class="input-field">
              <i class="fas fa-briefcase"></i>
              <input type="text" placeholder="Nombre" name="nombre" id="nombre"/>
            </div>

            <div class="input-field">
              <i class="fas fa-building"></i>
              <input type="text" placeholder="RUC" name="ruc" id="ruc"/>
            </div>

            <input type="submit" class="btn" value="Regitrarse" name="Registroempresa" id="Registroempresa"/>
           
            
          </form>
        </div>
      </div>
      
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Crea una cuenta como usuario agencia</h3>
            <p>
            Y ofrece tus servicios a través de nuestra plataforma
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Registrarse
            </button>
            <button class="btn transparent" href="">
              Iniciar sesión
            </button>
          </div>
          <img src="images/login.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Crea una cuenta como usuario viajero</h3>
            <p>Y inicia una nueva aventura junto a nosotros
            
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Registrarse
            </button>
            <button class="btn transparent" href="">
              Iniciar sesión
            </button>
          </div>
          <img src="images/signup.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="js/app_register.js"></script>


        <!--Fotter-->
         <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js?v=<?php echo time(); ?>" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <!-- FontAwesome para iconos -->
        <script src="https://kit.fontawesome.com/57888ec9eb.js?v=<?php echo time(); ?>" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11?v=<?php echo time(); ?>"></script>
   
  </body>
</html>
