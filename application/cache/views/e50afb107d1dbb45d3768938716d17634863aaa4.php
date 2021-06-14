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
						<?php $__currentLoopData = $resultado_busca; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imovel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="box-imovel">
							<div class="row">
								<div class="col-lg-5">
									<?php if(is_array($imovel->fotos)): ?>
										<div class="foto-imovel" style="background: url('<?php echo e($imovel->fotos[0]->arquivo); ?>')">
									<?php else: ?>
										<div class="foto-imovel" style="background: url('<?php echo e($imovel->fotos); ?>')">
									<?php endif; ?>

											<a href="<?php echo e(base_url('imovel/'.$imovel->cod_imovel)); ?>">
										    	
										    </a>
									</div>
								</div>
								<div class="col-lg-7">
									<div class="descricao">
										<span class="num-ref">Ref.: <?php echo e($imovel->cod_imovel); ?></span>
										<span class="tipo"><?php echo e($imovel->bairro); ?>, <?php echo e($imovel->cidade); ?></span>
										<span class="condominio"><?php echo e($imovel->tipo); ?></span>
										<span class="condominio"><?php echo e($imovel->condominio); ?></span>
										<div class="values"><?php echo $imovel->icons; ?></div>
										<div class="row">
											<div class="col-lg-6">
												<span class="valor">
													<?php echo e($imovel->preco_imovel); ?>

												</span>
											</div>
											<div class="col-lg-6 text-right">
												<a href="<?php echo e(base_url('imovel/')); ?><?php echo e($imovel->num_referencia); ?>" class="btn btn-custom" target="_blank">Detalhes</a>
											</div>
										</div>
										
									</div>
								</div>								
							</div>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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