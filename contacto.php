<!DOCTYPE html>
<html>
	<head>
		<title>Contacto - Villas Teques Splash</title>
		<?php
		require('head.php');
		?>
	</head>
	<body>
		<!-- BEGIN: NAV -->
		<?php
		require('nav.php');
		?>
		<!-- END:NAV -->
		<!-- BEGIN: CONTACTO -->
		<section>
			<div class="container-full contacto">
				<div class="row">
					<div class="col s12 m6 l6 form-contacto">
						<h2 class="text900 text-uppercase pink-text text-darken-4 center-align">Contáctanos</h2>
						<h4 class="pink-text text-darken-1 text600 center-align">¿Dudas o comentarios?</h4>
						<form class="col s12 pink-text text-lighten-4">
							<div class="row">
								<div class="input-field col s12 m6 l6 pink-text text-lighten-4">
									<input placeholder="Tu nombre aquí" id="name_contact" type="text" class="validate">
									<label for="name">Nombre y apellido</label>
								</div>
								<div class="input-field col s12 m6 l6 pink-text text-lighten-4">
									<input id="phone_contact" type="text" class="validate">
									<label for="phone">Teléfono</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12 m6 l6 pink-text text-lighten-4">
									<input id="email_contact" type="email" class="validate">
									<label for="email">Email</label>
								</div>
								<div class="input-field col s12 m6 l6">
									<textarea id="textarea1" class="materialize-textarea"></textarea>
									<label for="textarea1">Mensaje</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input type="submit" name="submit_brochure" value="Enviar"class="btn">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- END: CONTACTO -->
		<!-- BEGIN: MAPA -->
		<section data-aos="flip-left">
			<div class="container visitanos">
				<div class="row">
					<div class="col s12 m6 l6">
						<div class="contenedor-circulos">
							<div id="circulo1"></div>
							<div id="circulo2"></div>
						</div>
						<h3 class="pink-text text-lighten-4 text900 text-uppercase align-center">Visítanos</h3>
						<p class="pink-text text-lighten-4">Carretera Tequesquitengo Tlatenchi s/n, Col. Santa María Tlatenchi, Mpio. de Jojutla, Morelos. C.P. 62907</p>
						<a href="https://goo.gl/maps/eV3vBgczsyuBz5rs8" class="waves-effect waves-light btn white-text" target="_blank">Ir a la ubicación</a>
						<div class="diamond-contenedor">
							<div id="diamond-narrow"></div>
							<div id="diamond-narrow2"></div>
						</div>
					</div>
					<div class="col s12 m6 l6">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4496.962714861442!2d-99.21265063709046!3d18.597475812440738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf706903f34990f1c!2sAqua%20Splash!5e0!3m2!1ses-419!2smx!4v1598048007551!5m2!1ses-419!2smx" style="width: 100%; height: 350px;" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
			</div>
		</section>
		<!-- END: MAPA -->
		<!-- BEGIN: TELEFONO Y CORREO -->
		<section data-aos="flip-up" id="medios">
			<div class="container">
				<div class="row">
					<div class="col s12">
						<h3 class="pink-text text-lighten-4 text900 text-uppercase align-center">Otros medios de contacto</h3>
					</div>
				</div>
				<div class="row">
					<div class="col s12 m6 l6 btn-large">
						<a href="tel:7774540172">
							<i class="large material-icons">call</i>
						Teléfono: 77 7454 0172
					</a>
					</div>
					<div class="col s12 m6 l6 btn-large">
						<a href="mailto:ventas@villastequesplash.com">
							<i class="large material-icons">email</i>
						Email: ventas@villastequesplash.com
					</a>
					</div>
				</div>
			</div>
		</section>
		<!-- END: TELEFONO Y CORREO -->
		<!-- BEGIN: FOOTER -->
		<?php
		require('footer.php');
		?>
		<!-- END: FOOTER -->
	</body>
</html>