<section class="pt-5 pt-md-8">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class=" bg-primary position-relative overflow-hidden rounded-3 p-4 p-md-0">
					<div class="row position-relative">
						<div class="col-md-9 text-center mx-auto py-md-5">
							<h2 class="mb-4 text-white">SÉ EL PRIMERO EN ENTERARTE ! ÚNETE A NUESTRA LISTA DE MAIL </h2>
							<form class="bg-body d-flex rounded-2 p-2" action="{{ route('subscribeNewsletter') }}" method="post">
								@csrf
								<input class="form-control border-0 me-1" type="email" name="email" placeholder="Por favor introduce tu email, prometemos no mandarte spam">
								<button type="submit" class="btn btn-success rounded-5 d-flex mb-0">Suscribirse <i class="bi bi-arrow-right fa-fw"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>