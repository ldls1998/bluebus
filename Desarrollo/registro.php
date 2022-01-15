<!DOCTYPE html>
<html>

<head>
<!-- Basic Page Info -->
<meta charset="utf-8">
<title>Viajeseguro | Inicia sesión </title>

<!-- Site favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/apple-touch-icon.png">

<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/jquery-steps/jquery.steps.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>

<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.html">
					<img src="vendors/images/logo.png" alt="">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="login.html">Acceder</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="vendors/images/register-pagr-img.svg" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="register-box bg-white box-shadow border-radius-10">
						<div class="wizard-content">
							<form class="tab-wizard2 wizard-circle wizard">
								<h5>Información Básica</h5>
								<section>
									<div class="form-wrap max-width-600 mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Correo Electrónico*</label>
											<div class="col-sm-8">
												<input type="email" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Usuario*</label>
											<div class="col-sm-8">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Contraseña*</label>
											<div class="col-sm-8">
												<input type="password" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Confirmar contraseña*</label>
											<div class="col-sm-8">
												<input type="password" class="form-control">
											</div>
										</div>
									</div>
								</section>
								<!-- Step 2 -->
								<h5>Información Personal</h5>
								<section>
									<div class="form-wrap max-width-600 mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Nombres*</label>
											<div class="col-sm-8">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Apellidos*</label>
											<div class="col-sm-8">
												<input type="text" class="form-control">
											</div>
										</div>
										
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">DNI*</label>
											<div class="col-sm-8">
												<input type="text" class="form-control">
											</div>
										</div>
									
									</div>
								</section>
								<!-- Step 3 -->
								<h5>Información sobre su tarjeta</h5>
								<section>
									<div class="form-wrap max-width-600 mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Banco</label>
											<div class="col-sm-8">
												<select class="form-control selectpicker" title="Seleccione ...">
													<option value="1">BCP</option>
													<option value="2">Mastercard</option>
													<option value="3">Scotiabank</option>
												</select>
											</div>
										</div>
										<div class="form-group row align-items-center">
											<label class="col-sm-4 col-form-label">N° de tarjeta</label>
											<div class="col-sm-8">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">CVC</label>
											<div class="col-sm-3">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Fecha de Expiración</label>
											<div class="col-sm-8">
												<div class="row">
													<div class="col-6">
														<select class="form-control selectpicker" title="Mes" data-size="5">
															<option value='01'>Enero</option>
															<option value='02'>Febrero</option>
															<option value='03'>Marzo</option>
															<option value='04'>Abril</option>
															<option value='05'>Mayo</option>
															<option value='06'>Junio</option>
															<option value='07'>Julio</option>
															<option value='08'>Agosto</option>
															<option value='09'>Setiembre</option>
															<option value='10'>Octubre</option>
															<option value='11'>Noviembre</option>
															<option value='12'>Diciembre</option>
														</select>
													</div>
													<div class="col-6">
														<select class="form-control selectpicker" title="Año" data-size="5">
															<option>2029</option>
															<option>2028</option>
															<option>2027</option>
															<option>2026</option>
															<option>2025</option>
															<option>2024</option>
															<option>2023</option>
															<option>2022</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
								<!-- Step 4 -->
								<h5>Verificar información</h5>
								<section>
									<div class="form-wrap max-width-600 mx-auto">
										<ul class="register-info">
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">Correo Electrónico</div>
													<div class="col-sm-8">example@abc.com</div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">Usuario</div>
													<div class="col-sm-8">Example</div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">Contraseña</div>
													<div class="col-sm-8">.....000</div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">Nombres</div>
													<div class="col-sm-8">john</div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">Apellidos</div>
													<div class="col-sm-8">Smith</div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">DNI</div>
													<div class="col-sm-8">12345678</div>
												</div>
											</li>
										</ul>
										<div class="custom-control custom-checkbox mt-4">
											<input type="checkbox" class="custom-control-input" id="customCheck1">
											<label class="custom-control-label" for="customCheck1">He leído y acepto los términos y condiciones de la plataforma</label>
										</div>
									</div>
								</section>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- success Popup html Start -->
	<button type="button" id="success-modal-btn" hidden data-toggle="modal" data-target="#success-modal" data-backdrop="static">Launch modal</button>
	<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered max-width-400" role="document">
			<div class="modal-content">
				<div class="modal-body text-center font-18">
					<h3 class="mb-20">Registro exitoso!</h3>
					<div class="mb-30 text-center"><img src="vendors/images/success.png"></div>
					Puedes iniciar sesión mediante tu usuario y contraseña
				</div>
				<div class="modal-footer justify-content-center">
					<a href="login.html" class="btn btn-primary">Acceder</a>
				</div>
			</div>
		</div>
	</div>
	<!-- success Popup html End -->
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/jquery-steps/jquery.steps.js"></script>
	<script src="vendors/scripts/steps-setting.js"></script>
</body>

</html>