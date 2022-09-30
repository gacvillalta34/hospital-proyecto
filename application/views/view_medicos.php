<!DOCTYPE html>
<html lang="en">
	<title>Inicio</title>
	<head>
		<?php
			include 'view_estilos.php'
		?>
		<!-- Fin de styles -->
		<?php
			include 'view_menu.php';
			include 'view_session.php';
		?>
		<!-- =======================================================
			Theme Name: Scaffold
			Theme URL: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/
			Author: BootstrapMade.com
			Author URL: https://bootstrapmade.com
		======================================================= -->
	</head>
	<body>
		<!-- Topbar Start -->
		<div class="container-fluid bg-dark">
			<div class="row py-2 px-lg-5">
				<div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
					<div class="d-inline-flex align-items-center text-white">
						<small><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</small>
						<small class="px-3">|</small>
						<small><i class="fa fa-envelope mr-2"></i>info@example.com</small>
					</div>
				</div>
				<div class="col-lg-6 text-center text-lg-right">
					<div class="d-inline-flex align-items-center">
						<a class="text-white px-2" href="">
							<i class="fab fa-facebook-f"></i>
						</a>
						<a class="text-white px-2" href="">
							<i class="fab fa-twitter"></i>
						</a>
						<a class="text-white px-2" href="">
							<i class="fab fa-linkedin-in"></i>
						</a>
						<a class="text-white px-2" href="">
							<i class="fab fa-instagram"></i>
						</a>
						<a class="text-white pl-2" href="">
							<i class="fab fa-youtube"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Topbar End -->
		<!-- Blog Start -->
		<div class="container py-5">
			<div class="row">
				<div class="col-lg-4">
					<!-- Blog Detail Start -->
					<!-- Formulario de búsqueda -->
					<div class="mb-5">
						<form action="#" method="">
							<h4>¡Busca a tú médico!</h4>
                            <input type="text" class="form-control border-4 p-4" placeholder="Búsqueda">
							<br>
							<div align="center">
								<button type="submit" class="form-control border-0 p-8 bg-danger border-info
								text-white border-0 p-1"><i
									class="fa fa-search"></i>
								</div>
							</form>
						</div>
						<!-- Fin de formulario de búsqueda -->
						<div class="pb-3">
							<div class="position-relative">
								<img class="img-fluid w-100" src="plantilla/images/medicos.jpg" alt="">
								<!-- Fecha 
									<div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle"
									style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
									<h4 class="font-weight-bold mb-n1">01</h4>
									<small class="text-white text-uppercase">Jan</small>
									</div>
								-->
							</div>
						</div>
						<!-- Blog Detail End -->
					</div>
					<!-- Sidebar Start -->
					<div class="col-lg-8 mt-5 mt-lg-0">
						<!-- Category Start -->
						<div class="mb-5">
							<h3 class="mb-2">Especialidades</h3>
							<div class="bg-success" style="padding: 30px;">
								<ul class="list-inline m-0">
									<li class="mb-1 py-2 px-3 bg-light d-flex justify-content-between align-items-center">
										<a class="text-dark" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Pedriatría</a>
										<span class="text-white mb-2 badge badge-primary badge-pill" data-toggle="counter-up">2</span>
									</li>
									<li class="mb-1 py-2 px-3 bg-light d-flex justify-content-between align-items-center">
										<a class="text-dark" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Cirugía general</a>
										<span class="text-white mb-2 badge badge-primary badge-pill" data-toggle="counter-up">15</span>
									</li>
									<li class="mb-1 py-2 px-3 bg-light d-flex justify-content-between align-items-center">
										<a class="text-dark" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Cardiología</a>
										<span class="text-white mb-2 badge badge-primary badge-pill" data-toggle="counter-up">12</span>
									</li>
									<li class="mb-1 py-2 px-3 bg-light d-flex justify-content-between align-items-center">
										<a class="text-dark" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Anestesiología</a>
										<span class="text-white mb-2 badge badge-primary badge-pill" data-toggle="counter-up">16</span>
									</li>
								</ul>
							</div>
						</div>
						<!-- Category End -->
						<!-- Image Start -->
						<div class="mb-5">
							<img src="img/blog-1.jpg" alt="" class="img-fluid">
						</div>
						<!-- Image End -->
						<!-- Image Start -->
						<div class="mb-5">
							<img src="img/blog-2.jpg" alt="" class="img-fluid">
						</div>
						<!-- Image End -->
					</div>
					<!-- Sidebar End -->
				</div>
			</div>
			<!-- Blog End -->
			<!-- Footer -->
			<?php
				include 'view_footer.php';
			?>
			<!--
				<a id="app-messenger" target="_blanck" href="https://www.facebook.com/messages/t/212407508805693">
				<i class="fab fa-facebook-messenger"></i>
				</a>
				<a id="app-whatsapp" target="_blanck" href="https://api.whatsapp.com/send?phone=50378529527&amp;text=Hola!&nbsp;me&nbsp;pueden&nbsp;apoyar?">                   
				<img src="/static/images/icons/whatsappv2.svg" alt="Whatsapp">          
				</a>
			-->
			<!-- Fin del Footer -->
			<!-- Scripts -->
			<?php
				include 'view_scripts.php';
			?>
			<!-- Fin de scripts -->
		</body>
	</html>	