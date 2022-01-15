<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>Inicio</title>

    <!-- Site favicon -->
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="vendors/images/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="vendors/images/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="vendors/images/favicon-16x16.png"
    />

    <!-- Mobile Specific Metas -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="vendors/styles/icon-font.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="src/plugins/datatables/css/dataTables.bootstrap4.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="src/plugins/datatables/css/responsive.bootstrap4.min.css"
    />
    <link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "UA-119386393-1");
    </script>
  </head>

  <body>
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
        <a href="empresa.html">
          <img src="logo/logo.png" alt="" class="dark-logo" />
          <img src="logo/logo.png" alt="" class="light-logo" />
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
          <i class="ion-close-round"></i>
        </div>
      </div>
      <div class="menu-block customscroll">
        <div class="sidebar-menu">
          <ul id="accordion-menu">
            <li>
              <a href="empresa.html" class="dropdown-toggle no-arrow">
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
                <li><a href="destinos.html">Ver destino</a></li>
                <li><a href="advanced-components.html">Añadir destino</a></li>
                <li><a href="form-wizard.html">Eliminar destino</a></li>
              </ul>
            </li>

            <li></li>
            <li class="dropdown">
              <a href="javascript:;" class="dropdown-toggle">
                <span class="micon dw dw-apartment"></span
                ><span class="mtext"> Personal </span>
              </a>
              <ul class="submenu">
                <li><a href="ui-buttons.html">Ver personal</a></li>
                <li><a href="ui-cards.html">Añadir persona</a></li>
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
                <li><a href="font-awesome.html">Ver bus</a></li>
                <li><a href="foundation.html">Añadir bus</a></li>
                <li><a href="ionicons.html">Eliminar bus</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="javascript:;" class="dropdown-toggle">
                <span class="micon dw dw-invoice"></span
                ><span class="mtext">Boletos</span>
              </a>
              <ul class="submenu">
                <li><a href="highchart.html">Ver boletos</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="mobile-menu-overlay"></div>

    <div class="main-container">
      <div class="pd-ltr-20">
        <div class="card-box pd-20 height-100-p mb-30">
          <div class="row align-items-center">
            <div class="col-md-4">
              <img src="vendors/images/banner-img.png" alt="" />
            </div>
            <div class="col-md-8">
              <h4 class="font-20 weight-500 mb-10 text-capitalize">
                <div class="weight-600 font-30 text-blue">
                  Bienvenido a ViajeSeguro
                </div>
              </h4>
              <p class="font-18 max-width-600">
                ViajeSeguro es la plataforma virtual más grande de venta de
                pasajes de bus online que te permite comparar precios, horarios
                de salidas, lugares de embarque, y tipos de servicios de
                diferentes empresas de transporte. Nuestro sistema te permite
                comprar tus pasajes con cualquier empresa de transporte afiliada
                a ViajeSeguro. 130 empresas ya han gestionado sus pasajes con
                nosotros.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-3 mb-30">
            <div class="card-box height-100-p widget-style1">
              <div class="d-flex flex-wrap align-items-center">
                <div class="progress-data">
                  <div id="chart"></div>
                </div>
                <div class="widget-data">
                  <div class="h4 mb-0">2022</div>
                  <div class="weight-600 font-14">Usuarios nuevos</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 mb-30">
            <div class="card-box height-100-p widget-style1">
              <div class="d-flex flex-wrap align-items-center">
                <div class="progress-data">
                  <div id="chart2"></div>
                </div>
                <div class="widget-data">
                  <div class="h4 mb-0">400</div>
                  <div class="weight-600 font-14">Clientes satisfechos</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 mb-30">
            <div class="card-box height-100-p widget-style1">
              <div class="d-flex flex-wrap align-items-center">
                <div class="progress-data">
                  <div id="chart3"></div>
                </div>
                <div class="widget-data">
                  <div class="h4 mb-0">130</div>
                  <div class="weight-600 font-14">Empresas satisfechas</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 mb-30">
            <div class="card-box height-100-p widget-style1">
              <div class="d-flex flex-wrap align-items-center">
                <div class="progress-data">
                  <div id="chart4"></div>
                </div>
                <div class="widget-data">
                  <div class="h4 mb-0">$6060</div>
                  <div class="weight-600 font-14">Calificación</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-8 mb-30">
            <div class="card-box height-100-p pd-20">
              <h2 class="h4 mb-20">Actividad</h2>
              <div id="chart5"></div>
            </div>
          </div>
          <div class="col-xl-4 mb-30">
            <div class="card-box height-100-p pd-20">
              <h2 class="h4 mb-20">Objetivos</h2>
              <div id="chart6"></div>
            </div>
          </div>
        </div>
        <div class="card-box mb-30">
          <h2 class="h4 pd-20">Viajes ofertados</h2>
          <table class="data-table table nowrap">
            <thead>
              <tr>
                <th class="table-plus datatable-nosort">Viaje</th>
                <th>Nombre</th>
                <th>Hora de Salida</th>
                <th>Hora de Llegada</th>
                <th>Precio</th>
                <th>Destino</th>
                <th class="datatable-nosort"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="table-plus">
                  <img
                    src="vendors/images/mancora.jpg"
                    width="70"
                    height="70"
                    alt=""
                  />
                </td>
                <td>
                  <h5 class="font-16">Viaje #1</h5>
                </td>
                <td>08:00 - 12/01/2022</td>
                <td>12:00 - 12/01/2022</td>
                <td>S/ 80</td>
                <td>Mancora</td>
                <td>
                  <div class="dropdown">
                    <a
                      class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                      href="#"
                      role="button"
                      data-toggle="dropdown"
                    >
                      <i class="dw dw-more"></i>
                    </a>
                    <div
                      class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                    >
                      <a class="dropdown-item" href="#"
                        ><i class="dw dw-eye"></i> Ver</a
                      >
                      <a class="dropdown-item" href="#"
                        ><i class="dw dw-edit2"></i> Editar</a
                      >
                      <a class="dropdown-item" href="#"
                        ><i class="dw dw-delete-3"></i> Eliminar</a
                      >
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
          ViajeSeguro - Todos los derechos Reservados
        </div>
      </div>
    </div>
    <!-- js -->
    <script src="vendors/scripts/core.js"></script>
    <script src="vendors/scripts/script.min.js"></script>
    <script src="vendors/scripts/process.js"></script>
    <script src="vendors/scripts/layout-settings.js"></script>
    <script src="src/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
    <script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
    <script src="vendors/scripts/dashboard.js"></script>
  </body>
</html>
