<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="#">
		<img src="/img/icono.png">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<?php
	$myfile = fopen("config.txt", "r+") or die("Unable to open file to read!");
	$var = fgets($myfile);

	$petado = $var == 1;

	?>
	<div class="collapse navbar-collapse" id="navbar">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="/">Inicio</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/menu">Menú</a>
			</li>
			<li class="nav-item">
				<?php if (!$petado) : ?>
					<span class="nav-link" data-glf-cuid="c8dd7e3b-97ca-4af9-88a1-d14c3320ff05" data-glf-ruid="319d0165-d65d-41d9-92b6-63a802c6397b">Delivery</span>
				<?php endif; ?>
				<?php if ($petado) : ?>
					<!-- Button trigger modal -->
					<a type="button" class="nav-link" data-toggle="modal" data-target="#exampleModal">
						Delivery
					</a>
				<?php endif; ?>
			</li>
			<li class="nav-item rs">
				<a class="nav-link" href="https://www.instagram.com/umbrellaburger_es/" target="_blank">
					<i class="fab fa-instagram"></i>
				</a>
			</li>
		</ul>
	</div>
</nav>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Saturación</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				En estes momentos tenemos una alta demanda de pedidos. Es por ello que nos hemos visto a pausar los pedidos nuevos durante un tiempo para poder garantizar la calidad de nuestro servicio y producto. Vuelve a probar en un par de minutos.

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>