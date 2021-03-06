<?php

include_once("src/conexion.php");
include_once("src/clases/Empresa.php");


    if(!isset($_SESSION['usuario']) || !$_SESSION['rol']=='empresa') {
        header("Location: login.php");
    }
    $newEmpresa = new Empresa($con);
    $usuario = $_SESSION['usuario'];
    $datos_empresa = $newEmpresa->verdatosempresa($usuario);
    
    $newBus = new Bus($con);
    
    if(isset($_POST['registrardestino'])) {
      $origen = $_POST['origen'];
      $destino = $_POST['destino'];
      $costo = $_POST['costo'];
      $horario_partida = $_POST['horario_partida'];
      $horario_llegada = $_POST['horario_llegada'];
      $lugar_partida = $_POST['partida'];
      $listo = $newBus->añadirbus($placa,$asientos,$usuario);
      
      if ($listo){
        echo 'registro';
        }
        else{
          echo 'fallo';
        }
    }
?>


<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Añadir Destinos</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/fancybox/dist/jquery.fancybox.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
	<!-- fancybox Popup css -->
</head>

  <body>
  <body class="sidebar-light header-dark" >
    <div class="header">
      <div class="header-left">
        <div class="menu-icon dw dw-menu"></div>
        <div
          class="search-toggle-icon dw dw-search2"
          data-toggle="header_search"
        ></div>
        <div class="header-search">
          <form>
            <div class="form-group mb-0">
              <i class="dw dw-search2 search-icon"></i>
              <input
                type="text"
                class="form-control search-input"
                placeholder="Buscar"
              />
              <div class="dropdown">
                <a
                  class="dropdown-toggle no-arrow"
                  href="#"
                  role="button"
                  data-toggle="dropdown"
                >
                  <i class="ion-arrow-down-c"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label"
                      >Desde</label
                    >
                    <div class="col-sm-12 col-md-10">
                      <input
                        class="form-control form-control-sm form-control-line"
                        type="text"
                      />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label"
                      >Hasta</label
                    >
                    <div class="col-sm-12 col-md-10">
                      <input
                        class="form-control form-control-sm form-control-line"
                        type="text"
                      />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label"
                      >Sujeto</label
                    >
                    <div class="col-sm-12 col-md-10">
                      <input
                        class="form-control form-control-sm form-control-line"
                        type="text"
                      />
                    </div>
                  </div>
                  <div class="text-right">
                    <button class="btn btn-primary">Buscar</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="header-right">
        <div class="dashboard-setting user-notification">

        </div>
        <div class="user-notification">
          <div class="dropdown">
            <a
              class="dropdown-toggle no-arrow"
              href="#"
              role="button"
              data-toggle="dropdown"
            >
              <i class="icon-copy dw dw-notification"></i>
              <span class="badge notification-active"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="notification-list mx-h-350 customscroll">
                <ul>
                  <li>
                    <a href="#">
                      <img src="vendors/images/img.jpg" alt="" />
                      <h3>Juan Perez</h3>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed...
                      </p>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="user-info-dropdown">
          <div class="dropdown">
            <a
              class="dropdown-toggle"
              href="#"
              role="button"
              data-toggle="dropdown"
            >
              <span class="user-icon">
                <img src="vendors/images/photo1.jpg" alt="" />
              </span>
              <span class="user-name">John Stamos</span>
            </a>
            <div
              class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
            >
              <a class="dropdown-item" href="profile.html"
                ><i class="dw dw-user1"></i> Perfil</a
              >
              <a class="dropdown-item" href="profile.html"
                ><i class="dw dw-settings2"></i> Configuración</a
              >
              <a class="dropdown-item" href="faq.html"
                ><i class="dw dw-help"></i> Ayuda</a
              >
              <a class="dropdown-item" href="login.html"
                ><i class="dw dw-logout"></i> Salir</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="left-side-bar">
      <div class="brand-logo">
        <a href="inicio_empresa.php">
          <img src="logo/logo.png" style="width: 97%;" class="dark-logo" />
          
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
          <i class="ion-close-round"></i>
        </div>
      </div>
      <div class="menu-block customscroll">
        <div class="sidebar-menu">
          <ul id="accordion-menu">
            <li>
              <a href="inicio_empresa.php" class="dropdown-toggle no-arrow">
                <span class="micon dw dw-house-1"></span
                ><span class="mtext">Inicio</span>
              </a>
            </li>
            <li class="dropdown">
              <a href="javascript:;" class="dropdown-toggle">
                <span class="micon dw dw-right-arrow1"></span
                ><span class="mtext">Destino</span>
              </a>
              <ul class="submenu">
                <li><a href="verdestinos.php">Ver destino</a></li>
                <li><a href="añadirdestino.php">Añadir destino</a></li>
                <li><a href="eliminardestino.php">Eliminar destino</a></li>
              </ul>
            </li>

            <li></li>
            <li class="dropdown">
              <a href="javascript:;" class="dropdown-toggle">
                <span class="micon dw dw-apartment"></span
                ><span class="mtext"> Personal </span>
              </a>
              <ul class="submenu">
                <li><a href="verpersonal.php">Ver personal</a></li>
                <li><a href="añadirpersonal.php">Añadir personal</a></li>
                <li><a href="modificarpersonal.php">Modificar personal</a></li>
                <li>
                  <a href="ui-cards-hover.html"
                    >Eliminar registro de personal</a
                  >
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="javascript:;" class="dropdown-toggle">
                <span class="micon dw dw-paint-brush"></span
                ><span class="mtext">Buses</span>
              </a>
              <ul class="submenu">
                <li><a href="listadodebuses.php">Ver bus</a></li>
                <li><a href="añadirbus.php">Añadir bus</a></li>
                <li><a href="eliminarbus.php">Eliminar bus</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="javascript:;" class="dropdown-toggle">
                <span class="micon dw dw-invoice"></span
                ><span class="mtext">Boletos</span>
              </a>
              <ul class="submenu">
                <li><a href="verboletos.php">Ver boletos</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Añadir Destino</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="empresa.html">Inicio</a></li>
									<li class="breadcrumb-item"><a href="destinos.html">Destino</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Añadir Destino</li>
								</ol>
							</nav>
						</div>

					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Datos del Destino</h4>
						</div>

					</div>

					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Nombre: </label>
						<div class="col-sm-12 col-md-10">
							<input id="nombre" class="form-control" value="Viaje #1" readonly>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Hora de Salida: </label>
						<div class="col-sm-12 col-md-10">
							<input id="horaSalida" class="form-control" type="date" value="2021-05-17" readonly>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Hora de Llegada: </label>
						<div class="col-sm-12 col-md-10">
							<input id="horaLlegada" class="form-control" type="date" value="2021-05-18" readonly>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Precio: </label>
						<div class="col-sm-12 col-md-10">
							<input id="precio" class="form-control" value="S/350" readonly>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Destino: </label>
						<div class="col-sm-12 col-md-10">
							<input id="destino" class="form-control" value="Mancora" readonly>
						</div>
					</div>
          <div>
            <input class="btn btn-primary" type="submit" value="Añadir">
        </div>
        
		</div>
    <div class="footer-wrap pd-20 mb-20 card-box">
      ViajeSeguro - Todos los derechos Reservados
    </div>
  </div>
<!-- js -->
<script src="vendors/scripts/core.js"></script>
<script src="vendors/scripts/script.min.js"></script>
<script src="vendors/scripts/process.js"></script>
<script src="vendors/scripts/layout-settings.js"></script>
<!-- fancybox Popup Js -->
<script src="src/plugins/fancybox/dist/jquery.fancybox.js"></script>
</body>
</html>