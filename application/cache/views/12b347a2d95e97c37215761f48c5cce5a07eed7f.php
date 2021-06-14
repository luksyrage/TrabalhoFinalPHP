<?php if($imovel->nome_exibicao != ''): ?>
	<?php $__env->startSection('title', $imovel->nome_exibicao.' - '.NOME_SITE); ?>
<?php else: ?>
	<?php $__env->startSection('title', NOME_SITE); ?>
<?php endif; ?>




<?php $__env->startSection('content'); ?>
	<section class="detalhes-imovel">
		<div class="container">
			<?php if(!$nenhum_imovel): ?>
				<?php if($imovel->nome_exibicao != ''): ?>
					<div class="row">
						<div class="col-lg-12">
							<h1 class="titulo"><?php echo e($imovel->nome_exibicao); ?></h1>
						</div>
					</div>
				<?php endif; ?>
				<div class="row">
					<div class="col-lg-8">
						<?php $aux = 0;?>
						<?php if(is_array($fotos)): ?>
							<div id="carouselFotosImovel" class="carousel slide shadow" data-ride="carousel">
								<div class="carousel-inner">
									<?php $__currentLoopData = $fotos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $foto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<div class="carousel-item <?php if($aux == 0) echo 'active'; $aux++;?>">
									    	<img src="<?php echo e($foto->arquivo); ?>" class="img-fluid"/>
										</div>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</div>
								<a class="carousel-control-prev" href="#carouselFotosImovel" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Anterior</span>
								</a>
								<a class="carousel-control-next" href="#carouselFotosImovel" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Próximo</span>
								</a>
							</div>
						<?php else: ?>
							<div class="imovel-foto shadow"><img src="<?php echo e($fotos); ?>" class="img-fluid"/></div>
						<?php endif; ?>

						
						<div class="box">
							<div class="row">
								<div class="col-lg-8">
									<span class="num_ref">ref.: <?php echo $imovel->num_referencia; ?></span>
									<h6><?php echo e($imovel->tipo); ?></h6>
									<h5><?php echo e($imovel->bairro); ?>, <?php echo e($imovel->cidade); ?></h5>
								</div>

								<div class="col-lg-4 text-right valores-imovel">

									<?php if($imovel->valor_venda != '0.00' && $imovel->valor_venda != ''): ?>
										<h6>Valor para venda</h6>
										<h4><?php echo e($imovel->valor_venda); ?></h4>
									<?php elseif($imovel->valor_locacao != '0.00' && $imovel->valor_locacao != '0.00'): ?>
										<h6>Valor para locação</h6>
										<h4><?php echo e($imovel->valor_locacao); ?></h4>
									<?php endif; ?>
								</div>
							</div>
						</div>

						<div class="box">
							<div class="row">
								<div class="col-lg-8">
									<div class="values"><?php echo $imovel->icons; ?></div>
								</div>

								<div class="col-lg-4 text-right valores-imovel">
									<?php if($imovel->valor_condominio != ''): ?>
										<h6>Valor condomínio</h6>
										<h5><?php echo e($imovel->valor_condominio); ?></h5>
									<?php endif; ?>
								</div>
							</div>
						</div>
				

						<?php if($imovel->texto_complementar_site != ''): ?>
							<div class="box">							
								<h4>Descrição</h4>
								<?php echo e(strip_tags($imovel->texto_complementar_site)); ?>

							</div>
						<?php endif; ?>

						<?php if($imovel->dados_complementares): ?>
							<div class="box">							
								<h4>Características do Imóvel</h4>
								<?php $__currentLoopData = $imovel->dados_complementares; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="dc"><?php echo e($dc->nome_dc); ?></div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
						<?php endif; ?>

						<div class="box">							
							<h4>Central de Negócios</h4>
							Para ter mais informações sobre este imóvel ligue:<br>
							<b>Telefone: (14) 3010-7878  / (14) 98126-7777 (WhatsApp) / (14) 99647-4634 (WhatsApp)</b><br><br>

							Rua Vereador Joaquim da Silva Martha, 20-17<br>
							17012-225 - Vila Universitária - Bauru - SP<br>
							<b>contato@tumaimoveis.com.br</b>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="box shadow contatar-anunciante">
							<h5 class="text-center">Fale agora Conosco</h5>
							<form action="">
								<div class="form-group">
									<input type="text" class="form-control" name="nome" placeholder="Nome">
								</div>	

								<div class="form-group">
									<input type="text" class="form-control" name="email" placeholder="E-mail">
								</div>	

								<div class="form-group">
									<input type="text" class="form-control" name="telefone" placeholder="Telefone">
								</div>	

								<div class="form-group">
									<textarea name="" class="form-control" rows="6">Olá, Gostaria de ter mais informações sobre o imóvel, que encontrei no site Tuma imóveis, ref.: <?php echo $imovel->num_referencia; ?>. Aguardo seu contato, obrigado.</textarea>
								</div>	

								<div class="form-group">
									<button type="submit" class="btn btn-custom btn-block">Enviar</button>
								</div>
							</form>
						</div>
						<?php if($imovel->googlemaps != ''): ?>
							<div id="map"></div>
						<?php endif; ?>
					</div>
				</div>
			<?php else: ?>
				<div class="row">
					<div class="col-lg-12">
						<div class="alert alert-danger" role="alert">
						    <strong>Ops!</strong> Não encontramos nenhum imóvel com essa referência! <a href="<?php echo e(base_url()); ?>">Clique aqui</a> para realizar uma nova busca.
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</section>

	<?php if( isset($imovel->googlemaps) && $imovel->googlemaps != ''): ?>
		<script>			
      		var latitude  = parseFloat(<?php echo e($imovel->latitude); ?>);
      		var longitude = parseFloat(<?php echo e($imovel->longitude); ?>);
	      	var citymap = {
	      		localizacao: {
	      			center: {lat: latitude, lng: longitude}
	      		}
	      	};

	      	function initMap() {
	        	var map = new google.maps.Map(document.getElementById('map'), {
	        		zoom: 14,
	        		center: {lat: latitude, lng: longitude},
	        		mapTypeId: 'terrain'
	        	});

		        for (var city in citymap) {
		        	var cityCircle = new google.maps.Circle({
		        		strokeColor: '#FF0000',
		        		strokeOpacity: 0.8,
		        		strokeWeight: 2,
		        		fillColor: '#FF0000',
		        		fillOpacity: 0.35,
		        		map: map,
		        		center: citymap[city].center,
		        		radius: 300
		        	});
		        }
	  		}
		</script>
		 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApoKIKSJbgEdHBg0QC1hP_pz9qEBoXnF4"></script>
	<?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('site/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>