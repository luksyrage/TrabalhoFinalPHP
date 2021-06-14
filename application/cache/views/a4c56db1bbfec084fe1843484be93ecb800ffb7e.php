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
						<nav>
					  		<div class="nav nav-tabs" id="nav-tab" role="tablist">
						    	<a class="nav-item nav-link active" id="nav-fotos-tab" data-toggle="tab" href="#nav-fotos" role="tab" aria-controls="nav-fotos" aria-selected="true">
						    		<i class="fas fa-camera"></i> Fotos
						    	</a>
						    	<?php if($imovel->url_video != ''): ?>
							    	<a class="nav-item nav-link" id="nav-video-tab" data-toggle="tab" href="#nav-video" role="tab" aria-controls="nav-video" aria-selected="false">
							    		<i class="fas fa-video"></i> Vídeo
							    	</a>
							    <?php endif; ?>
						  	</div>
						</nav>
						<div class="tab-content" id="nav-tabContent">
						  	<div class="tab-pane fade show active" id="nav-fotos" role="tabpanel" aria-labelledby="nav-fotos-tab">
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
						  	</div>
						  	<div class="tab-pane fade" id="nav-video" role="tabpanel" aria-labelledby="nav-video-tab">
						  		<?php if($imovel->url_video != ''): ?>
									<iframe id="iframe_video" src="https://www.youtube.com/embed/<?php echo $imovel->url_video; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						  		<?php endif; ?>
						  	</div>
						</div>
						

						
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
									<textarea name="" class="form-control" rows="6">Olá, Gostaria de ter mais informações sobre o imóvel, que encontrei no site <?php echo NOME_SITE; ?>, ref.: <?php echo $imovel->num_referencia; ?>. Aguardo seu contato, obrigado.</textarea>
								</div>	

								<div class="form-group">
									<button type="submit" class="btn btn-custom btn-block">Enviar</button>
								</div>
							</form>
						</div>
						<?php if($imovel->creci != ''): ?>
							<hr>
							<div class="captador">
								<?php if($imovel->foto_funcionario != ''): ?>
									<figure style="background: url(<?php echo e($imovel->foto_funcionario); ?>)"></figure>
								<?php else: ?>
									<figure></figure>
								<?php endif; ?>
								
								<small>Imóvel captador por: </small>
								<span class="nome"><?php echo e($imovel->nome); ?></span>
								<span class="creci">CRECI: <?php echo e($imovel->creci); ?></span>
							</div>
						<?php endif; ?>

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
	  		initMap();
		</script>
		 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApoKIKSJbgEdHBg0QC1hP_pz9qEBoXnF4"></script>
	<?php endif; ?>

	<script type="text/javascript">
		$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		  	var url_video = $('#iframe_video').attr('src');
		  	$('#iframe_video').attr('src', url_video);
		})
	</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('site/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>