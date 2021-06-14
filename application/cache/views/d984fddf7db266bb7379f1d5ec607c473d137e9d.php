<?php $__env->startSection('title', $page_title); ?>




<?php $__env->startSection('content'); ?>
	

  	<section class="lista-imoveis">
  		<div class="container">  			
  			<div class="row">  				
  				<div class="col-lg-3">
  					<?php $__env->startComponent('site/layout/filtro-lateral', ['tipos_imoveis'=> $tipos_imoveis, 'cidades' => $cidades, 'filtro' => $filtro]); ?>
    
					<?php echo $__env->renderComponent(); ?>
  				</div>
  				<div class="col-lg-9" id="imoveis-content">  	  
  					<div class="row">
						<div class="col-lg-12">
							<h2><b><?php echo e($total_imoveis); ?></b> imóveis encontrados</h2>
						</div>
					</div>									
					<div class="row">
  						<?php $__currentLoopData = $resultado_busca; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imovel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-lg-6">
								<div class=" box-imovel">
									<div class="foto-imovel">
										<div class="mask"></div>
										<?php if(is_array($imovel->fotos)): ?>
											<div class="carousel-fotos">
												<?php $__currentLoopData = $imovel->fotos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $foto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<a href="<?php echo e(base_url('imovel/'.$imovel->cod_imovel)); ?>">
												    	<img src="<?php echo e($foto->arquivo); ?>" class="img-fluid"/>
												    </a>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										  	</div>
										<?php else: ?>
											<a href="<?php echo e(base_url('imovel/'.$imovel->cod_imovel)); ?>">
												<img src="<?php echo e($imovel->fotos); ?>" class="img-fluid"/>
											</a>
										<?php endif; ?>
										<div class="valores-imovel">
											<div class="row">
												<div class="col-lg-6">
													<span class="valor">
														<?php echo e($imovel->preco_imovel); ?>

													</span>
												</div>
												<div class="col-lg-6 align-self-center">
													<?php if($imovel->valor_condominio != '' && $imovel->valor_condominio != '0.00'): ?>
														<span class="condominio">
															Condomínio <b><?php echo e($imovel->valor_condominio); ?></b>
														</span>
													<?php endif; ?>
												</div>
											</div>
										</div>
									</div>
									<div class="descricao">
										<span class="address"><?php echo e($imovel->bairro); ?></span>
										<span class="tipo"><?php echo e($imovel->tipo); ?> em <?php echo e($imovel->cidade); ?></span>
										<span class="condominio"><?php echo e($imovel->condominio); ?></span>
										<p class="description text-truncate">
											<?php echo e(strip_tags($imovel->texto_complementar_site)); ?>

										</p>
										<div class="values"><?php echo $imovel->icons; ?></div>
										<p class="buttons-detalhes">
											<a href="<?php echo e(base_url('imovel/')); ?><?php echo e($imovel->num_referencia); ?>" class="btn btn-custom btn-outline-custom" target="_blank">Detalhes</a>
											
											<button type="button" class="btn btn-custom">Contato</button>
										</p>
										<span class="num-ref"><?php echo e($imovel->num_referencia); ?></span>
									</div>
								</div>								
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>		
					<div class="row">
						<div class="col-lg-12">
							<?php echo $pagination; ?>

						</div>
					</div>
  				</div>  				
  			</div>
  		</div>
  	</section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('site/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>