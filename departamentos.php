<!DOCTYPE html>
<html>
	<head>
		<title>Departamentos - Villas Teques Splash</title>
		<?php
		require('head.php');
		?>
	</head>
	<body>
		<!-- NAVIGATION -->
		<?php
		require('nav.php');
		?>
		<!-- BEGIN: SLIDER -->
		<section data-aos="fade-up" data-aos-anchor-placement="top-center" >
			<div class="container-full">
				<div class="row">
					<div class="col s12 no-side-margins">
						<div class="carousel carousel-slider">
							<a class="carousel-item" href="#one!">
								<picture>
									<source srcset="img/slider/slider-departamentos/cocina" type="img/jpg" class="responsive-img">
									<source srcset="img/slider/slider-departamentos/cocina" type="img/webp" class="responsive-img">
									<img src="img/slider/slider-departamentos/cocina.jpg" class="responsive-img">
								</picture>
							</a>
							<a class="carousel-item" href="#two!">
								<picture>
									<source srcset="img/slider/slider-departamentos/frontal" type="img/jpg" class="responsive-img">
									<source srcset="img/slider/slider-departamentos/frontal" type="img/webp" class="responsive-img">
									<img src="img/slider/slider-departamentos/frontal.jpg" class="responsive-img">
								</picture>
							</a>
							<a class="carousel-item" href="#three!">
								<picture>
									<source srcset="img/slider/slider-departamentos/departamentos-posterior.jpg" type="img/jpg" class="responsive-img">
									<source srcset="img/slider/slider-departamentos/departamentos-posterior" type="img/webp" class="responsive-img">
									<img src="img/slider/slider-departamentos/departamentos-posterior.jpg" class="responsive-img">
								</picture>
							</a>
							<a class="carousel-item" href="#four!">
								<picture>
									<source srcset="img/slider/slider-departamentos/aquazona-chica" type="img/jpg" class="responsive-img">
									<source srcset="img/slider/slider-departamentos/aquazona-chica" type="img/webp" class="responsive-img">
									<img src="img/slider/slider-departamentos/aquazona-chica.jpg" class="responsive-img">
								</picture>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END:SLIDER -->
		<!-- BEGIN: DEPARTAMENTOS -->
		<section>
			<div class="container">
				<div class="row">
					<div class="col s12">
						<ul class="tabs">
							<li class="tab col s3"><a href="#garden" class="active">Departamento con 2 Recámaras Garden</a></li>
							<li class="tab col s3"><a  href="#roof">Departamento con 2 Recámaras Roof</a></li>
						</ul>
					</div>
					<!-- BEGIN: DEPARTAMENTO DE 2 RECs -->
					<div id="garden" class="col s12">
						<picture>
							<source srcset="img/prototipos/2rec" type="img/png" class="responsive-img">
							<source srcset="img/prototipos/2rec" type="img/webp" class="responsive-img">
							<img src="img/prototipos/2rec.png" class="reponsive-img">
						</picture>
					</div>
					<!-- END: DEPARTAMENTO DE 2 RECs -->
					<!-- BEGIN: DEPARTAMENTO DE 3 RECs -->
					<div id="roof" class="col s12">Test 2</div>
					<!-- END: DEPARTAMENTO DE 3 RECs -->
				</div>
			</div>
		</section>
		<!-- END: DEPARTAMENTOS -->
		<!-- BEGIN:OPCION A 3a RECAMARA -->
		<section>
			
		</section>
		<!-- END: OPCION A 3a RECAMARA -->
		<!-- FOOTER -->
		<?php
		require('footer.php');
		?>
	</body>
</html>