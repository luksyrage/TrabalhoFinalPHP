<?php $__env->startSection('title', NOME_SITE); ?>




<?php $__env->startSection('content'); ?>
	<section class="novos bg-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h1 class="page-title">IMÓVEIS EM DESTAQUES</h1>
				</div>
				<div class="col-lg-6 text-right">
					<ul class="nav nav-pills" id="tab-novos" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="tab-locacao" data-toggle="pill" href="#lista-locacao" role="tab" aria-controls="pills-profile" aria-selected="false">
								Para alugar
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="tab-venda" data-toggle="pill" href="#lista-venda" role="tab" aria-controls="lista-venda" aria-selected="true">
								Para comprar
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="tab-lancamentos" data-toggle="pill" href="#lista-lancamentos" role="tab" aria-controls="lista-lancamentos" aria-selected="true">
								Lançamentos
							</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="tab-content">
		  		<div class="tab-pane fade show" id="lista-venda" role="tabpanel" aria-labelledby="pills-venda-tab">
					<div class="row">	
						<?php $__currentLoopData = $destaques_venda; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imovel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-lg-3">
			              		<div class="box-imovel">
			              			<a href="<?php echo e(base_url('imovel/'.$imovel->cod_imovel)); ?>" target="_blank">
			              				<?php if(is_array($imovel->fotos)): ?>
											<div class="foto-imovel" style="background: url('<?php echo e($imovel->fotos[0]->arquivo); ?>')"></div>
										<?php else: ?>
											<div class="foto-imovel" style="background: url('<?php echo e($imovel->fotos); ?>')"></div>
										<?php endif; ?>
			              			</a>

		              				<div class="descricao">
			              				<span class="tipo"><?php echo e($imovel->tipo); ?></span>	
			              				<?php if($imovel->condominio != ''): ?>
		              						<span class="localidade"><?php echo e($imovel->condominio); ?></span>
		              					<?php else: ?>
											<span class="localidade"><?php echo e($imovel->bairro); ?></span>
		              					<?php endif; ?>				              					
			              			</div>
			              			<p class="info">
			              				<?php echo $imovel->texto_complementar_site; ?>

			              			</p>
			              			<span class="valor">
			              				<?php echo e($imovel->preco_imovel); ?>

			              			</span>
			              		</div>
			              	</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div>

				<div class="tab-pane fade show active" id="lista-locacao" role="tabpanel" aria-labelledby="pills-locacao-tab">
			  		<div class="row">
						<?php $__currentLoopData = $destaques_locacao; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imovel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-lg-3">
			              		<div class="box-imovel">
			              			<a href="<?php echo e(base_url('imovel/'.$imovel->cod_imovel)); ?>" target="_blank">
			              				<?php if(is_array($imovel->fotos)): ?>
											<div class="foto-imovel" style="background: url('<?php echo e($imovel->fotos[0]->arquivo); ?>')"></div>
										<?php else: ?>
											<div class="foto-imovel" style="background: url('<?php echo e($imovel->fotos); ?>')"></div>
										<?php endif; ?>
			              			</a>

		              				<div class="descricao">
			              				<span class="tipo"><?php echo e($imovel->tipo); ?></span>	
			              				<?php if($imovel->condominio != ''): ?>
		              						<span class="localidade"><?php echo e($imovel->condominio); ?></span>
		              					<?php else: ?>
											<span class="localidade"><?php echo e($imovel->bairro); ?></span>
		              					<?php endif; ?>				              					
			              			</div>
			              			<p class="info">
			              				<?php echo $imovel->texto_complementar_site; ?>

			              			</p>
			              			<span class="valor">
			              				<?php echo e($imovel->preco_imovel); ?>

			              			</span>
			              		</div>
			              	</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
			  	</div>

			  	<div class="tab-pane fade" id="lista-lancamentos" role="tabpanel" aria-labelledby="pills-lancamentos-tab">
			  		<div class="row">
						<?php $__currentLoopData = $lancamentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imovel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-lg-3">
			              		<div class="box-imovel">
			              			<a href="<?php echo e(base_url('imovel/'.$imovel->cod_imovel)); ?>" target="_blank">
			              				<?php if(is_array($imovel->fotos)): ?>
											<div class="foto-imovel" style="background: url('<?php echo e($imovel->fotos[0]->arquivo); ?>')"></div>
										<?php else: ?>
											<div class="foto-imovel" style="background: url('<?php echo e($imovel->fotos); ?>')"></div>
										<?php endif; ?>
			              			</a>

		              				<div class="descricao">
			              				<span class="tipo"><?php echo e($imovel->tipo); ?></span>	
			              				<?php if($imovel->condominio != ''): ?>
		              						<span class="localidade"><?php echo e($imovel->condominio); ?></span>
		              					<?php else: ?>
											<span class="localidade"><?php echo e($imovel->bairro); ?></span>
		              					<?php endif; ?>				              					
			              			</div>
			              			<p class="info">
			              				<?php echo $imovel->texto_complementar_site; ?>

			              			</p>
			              			<span class="valor">
			              				<?php echo e($imovel->preco_imovel); ?>

			              			</span>
			              		</div>
			              	</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
			  	</div>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('site/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>