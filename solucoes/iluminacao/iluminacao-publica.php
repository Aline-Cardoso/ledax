<?php
$pastaEPagina = ($_SERVER['HTTP_HOST'] == "localhost") || ($_SERVER['HTTP_HOST'] == "www.tipotemporario.com.br") || ($_SERVER['HTTP_HOST'] == "tipotemporario.com.br") ? explode("/", $_SERVER['PHP_SELF'])[1] . "/" : "/";

$title = 'Iluminação Pública';
$description = "$title. Soluções customizadas energética através de iluminação LED, sistemas de geração fotovoltaica, monitoramento e gestão de consumo de energia";
$keywords     = "Comércio de " . $title . ", Produtos de " . $title . ", Serviços de " . $title . ", " . $title . " de qualidade, " . $title . " com melhor preço, " . $title . " com menor preço";
include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . 'includes/head-palavras.php';
?>

<!-- Header -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . 'includes/header.php'; ?>
<!-- end: Header -->

<div role="main" class="main">

	<!-- BREADCRUMB START-->
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . "includes/breadcrumb.php"; ?>
	<!-- BREADCRUMB START END-->





	<!--PRODUTOS START-->
	<section class="pb-4">
		<div class="row justify-content-center">
			<div class="col-lg-9 col-xl-8 text-center">
				<div class="overflow-hidden mb-3">
					<h4 class="font-weight-bold text-transform-none text-7 line-height-2 mb-0"  style="color: #008191; padding-top: 50px;">PRODUTOS</h4>
				</div>
			</div>
		</div>


		<div class="container mb-5">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-3">
					<div class="py-3">
						<span class="thumb-personalizada thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info thumb-info-no-zoom thumb-info-slide-info-hover">
							<span class="thumb-info-wrapper">
								<img src="<?=$urlcompleta;?>img/solucoes/produtos/tate.jpg" class="img-fluid" alt="Tate">
								<span class="thumb-info-title">
									<span class="thumb-info-slide-info-hover-1">
										<span class="thumb-info-inner text-3-5 text-uppercase">Tate</span>
									</span>
									<span class="thumb-info-slide-info-hover-2">
										<span class="thumb-info-show-more-content"><p class="mb-3 text-3-5 line-height-5">Tate</p>
										</span>
										<span class="thumb-info-inner text-2">
											<a href="<?=$urlcompleta;?>solucoes/iluminacao/tate" class="btn btn-primary btn-modern text-1">Saiba mais</a>
										</span>
									</span>
								</span>
							</span>
						</span>
					</div>
				</div>

				<div class="col-lg-3">
					<div class="py-3">
						<span class="thumb-personalizada thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info thumb-info-no-zoom thumb-info-slide-info-hover">
							<span class="thumb-info-wrapper">
								<img src="<?=$urlcompleta;?>img/solucoes/produtos/atmosfera.jpg" class="img-fluid" alt="Atmosfera">
								<span class="thumb-info-title">
									<span class="thumb-info-slide-info-hover-1">
										<span class="thumb-info-inner text-3-5 text-uppercase">Atmosfera</span>
									</span>
									<span class="thumb-info-slide-info-hover-2">
										<span class="thumb-info-show-more-content"><p class="mb-3 text-3-5 line-height-5">Atmosfera</p>
										</span>
										<span class="thumb-info-inner text-2">
											<a href="<?=$urlcompleta;?>solucoes/iluminacao/atmosfera" class="btn btn-primary btn-modern text-1">Saiba mais</a>
										</span>
									</span>
								</span>
							</span>
						</span>
					</div>
				</div>

				<div class="col-lg-3">
					<div class="py-3">
						<span class="thumb-personalizada thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info thumb-info-no-zoom thumb-info-slide-info-hover">
							<span class="thumb-info-wrapper">
								<img src="<?=$urlcompleta;?>img/solucoes/produtos/street-centauris.jpg" class="img-fluid" alt="Street Centauris">
								<span class="thumb-info-title">
									<span class="thumb-info-slide-info-hover-1">
										<span class="thumb-info-inner text-3-5 text-uppercase">Street Centauris</span>
									</span>
									<span class="thumb-info-slide-info-hover-2">
										<span class="thumb-info-show-more-content"><p class="mb-3 text-3-5 line-height-5">Street Centauris</p>
										</span>
										<span class="thumb-info-inner text-2">
											<a href="<?=$urlcompleta;?>solucoes/iluminacao/street-centauris" class="btn btn-primary btn-modern text-1">Saiba mais</a>
										</span>
									</span>
								</span>
							</span>
						</span>
					</div>
				</div>

				<div class="col-lg-3">
					<div class="py-3">
						<span class="thumb-personalizada thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info thumb-info-no-zoom thumb-info-slide-info-hover">
							<span class="thumb-info-wrapper">
								<img src="<?=$urlcompleta;?>img/solucoes/produtos/island.jpg" class="img-fluid" alt="Island">
								<span class="thumb-info-title">
									<span class="thumb-info-slide-info-hover-1">
										<span class="thumb-info-inner text-3-5 text-uppercase">Island</span>
									</span>
									<span class="thumb-info-slide-info-hover-2">
										<span class="thumb-info-show-more-content"><p class="mb-3 text-3-5 line-height-5">Island</p>
										</span>
										<span class="thumb-info-inner text-2">
											<a href="<?=$urlcompleta;?>solucoes/iluminacao/island" class="btn btn-primary btn-modern text-1">Saiba mais</a>
										</span>
									</span>
								</span>
							</span>
						</span>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="py-3">
						<span class="thumb-personalizada thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info thumb-info-no-zoom thumb-info-slide-info-hover">
							<span class="thumb-info-wrapper">
								<img src="<?=$urlcompleta;?>img/solucoes/produtos/shoebox.jpg" class="img-fluid" alt="Shoebox">
								<span class="thumb-info-title">
									<span class="thumb-info-slide-info-hover-1">
										<span class="thumb-info-inner text-3-5 text-uppercase">Shoebox</span>
									</span>
									<span class="thumb-info-slide-info-hover-2">
										<span class="thumb-info-show-more-content"><p class="mb-3 text-3-5 line-height-5">Shoebox</p>
										</span>
										<span class="thumb-info-inner text-2">
											<a href="<?=$urlcompleta;?>solucoes/iluminacao/shoebox" class="btn btn-primary btn-modern text-1">Saiba mais</a>
										</span>
									</span>
								</span>
							</span>
						</span>
					</div>
				</div>

				<div class="col-lg-3">
					<div class="py-3">
						<span class="thumb-personalizada thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info thumb-info-no-zoom thumb-info-slide-info-hover">
							<span class="thumb-info-wrapper">
								<img src="<?=$urlcompleta;?>img/solucoes/produtos/street-polaris.jpg" class="img-fluid" alt="Street Polaris">
								<span class="thumb-info-title">
									<span class="thumb-info-slide-info-hover-1">
										<span class="thumb-info-inner text-3-5 text-uppercase">Street Polaris</span>
									</span>
									<span class="thumb-info-slide-info-hover-2">
										<span class="thumb-info-show-more-content"><p class="mb-3 text-3-5 line-height-5">Street Polaris</p>
										</span>
										<span class="thumb-info-inner text-2">
											<a href="<?=$urlcompleta;?>solucoes/iluminacao/street-polaris" class="btn btn-primary btn-modern text-1">Saiba mais</a>
										</span>
									</span>
								</span>
							</span>
						</span>
					</div>
				</div>

			</div>
		</div>

	</section>
	<!--PRODUTOS END-->


	<!--NOSSAS CASES START-->
	<section class="section border-0 mb-0 py-5 mt-0" style="background: #034154;">
		<div class="row justify-content-center">
			<div class="col-lg-9 col-xl-8 text-center">
				<div class="overflow-hidden mb-3">
					<h4 class="font-weight-bold text-transform-none text-7 line-height-2 mb-0 appear-animation text-light animated appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="400">VEJA NOSSAS CASES</h4>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row justify-content-center pt-2">
				<div class="col-lg-9 col-xl-8 text-center">
					<div class="overflow-hidden mb-3">
						<p class="text-3-5 mb-4-5 text-justify text-light text-center">Atendendo com qualidade e alta eficiência os projetos personalizados de acordo com a real necessidade do cliente! </p>
						<a href="<?= $urlcompleta; ?>cases" class="btn btn-light-2 btn-outline font-weight-semibold px-4 btn-py-2 text-3">SAIBA MAIS</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--NOSSAS CASES END-->





</div>

<!-- Footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/" . $pastaEPagina . 'includes/footer.php'; ?>
<!--end: Footer -->