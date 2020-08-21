<!DOCTYPE html>
<html>
	<head>
		<title>Promociones - Villas Teques Splash</title>
		<?php
				require('head.php');
		?>
	</head>
	<body>
		<!-- BEGIN: NAVIGATION -->
		<?php
			require('nav.php');
		?>
		<!-- END: NAVIGATION -->
		<!-- BEGIN: HEADER -->
		<section>
			<div class="container-full">
				<div class="row">
					<div class="col s12 header-promos">
						<h2 class="white-text text-shadow text900 text-uppercase center-align">Promociones</h2>
					</div>
				</div>
			</div>
		</section>
		<!-- END: HEADER -->
		<!-- BEGIN: TARJETAS DE PROMOS -->
		<section>
			<div class="container">
				<div class="row">
					<div class="col s12">
						<h3 class="text600 align-center pink-text text-lighten-4 ">Mantente al pendiente para aprovechar nuestras increíbles promociones</h3>

					</div>
				</div>
				<div class="row">
					<div class="col s12 m7">
						<div class="card">
							<div class="card-image">
								<img src="img/promos/referidos.jpg">
								<span class="card-title text900">Referidos</span>
							</div>
							<div class="card-content">
								<p>Eres cliente de Grupo Hodaya, refiere a un conocido y GANA DINERO</p>
							</div>
							<div class="card-action">
								<a class="waves-effect waves-light btn modal-trigger" href="#referidos">Mecánica y restricciones</a>
							</div>
						</div>
						<div class="contenedor-chevron">
							<div id="chevron1"></div>
							<div id="chevron2"></div>
						</div>
					</div>
					<!-- BEGIN: Modal REFERIDOS -->
					<div id="referidos" class="modal">
						<div class="modal-content">
							<h4 class="text900 text-uppercase">Mecánica y Restricciones</h4>
							<p class="text900">MECÁNICA:</p>
							<p>Refiere a un conocido que quiera comprar una casa en Villas Teques Aqua y gana $10,000. Proporciona la información de tus referidos a uno de nuestros asesores inmobiliarios. Cuando tus referidos visiten Villas Teques Aqua deberán dar tu nombre. El asesor que atienda a tus referidos te dará un vale, el cual podrás canjear cuando tus referidos escrituren su casa. Entre más referidos mandes más podrás ganar. Siendo exclusiva para los clientes que integren su expediente completo en un lapso no mayor a 14 días naturales a partir de la fecha del cierre de la venta y que realicen el pago de la reservación al 100%. No aplica con otras promociones o descuentos.</p>
							<p class="text900">RESTRICCIONES:</p>
							<p><ul>
								<li>Válida únicamente para clientes que ya hayan comprado algún inmueble con Grupo Hodaya.</li>
								<li>Exclusivamente para los clientes referidos que integren su expediente en un lapso no mayor a 14 días naturales a partir del cierre de la venta.</li>
								<li>No aplica con otras promociones</li>
							la promoción se explicará durante la compra /venta, el asesor deberá hacer entrega de un vale con la descripción y firmas de autorización correspondientes.</li>
							<li>La promoción está sujeta a cambios sin previo aviso.</li>
							<li>Los costos de los inmuebles pueden variar dependiendo del modelo, ubicación y condiciones.</li>
							<li>El cliente autoriza a comunicar la entrega de la promoción, en los medios que a la empresa mejor convenga.</li>
							<li>En caso de cancelar la operación de compra, la promoción no tendrá validez alguna.</li>
							<li>El diseño superficie, decoración imágenes y mobiliario, son sólo ilustrativo y podrán tener modificaciones sin previo aviso. Por tanto, no constituye un compromiso, obligación y oferta comercial o legal de la empresa vendedora.</li></p>
						</div>
						<div class="modal-footer">
							<a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
						</div>
					</div>
					<!-- END: Modal Referidos -->
				</div>
			</div>
		</section>
		
		
		<!-- END: TARJETAS DE PROMOS -->
		<!-- FOOTER -->
		<?php
				require('footer.php');
		?>
		<!-- END: FOOTER -->
	</body>
</html>