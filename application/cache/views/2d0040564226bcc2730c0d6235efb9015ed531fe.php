


<?php $__env->startSection('title', 'Financimento - '.NOME_SITE); ?>




<?php $__env->startSection('content'); ?>
	<section class="conteudo">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1>Financiamento</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<p>
						Pensando em você, disponibilizamos abaixo, os sites de alguns bancos parceiros para que você faça uma simulação de financiamento.
					</p>
				</div>

				<div class="col-lg-4">
					<img src="<?php echo e(base_url('assets/imagens/banco_santander.gif')); ?>" class="img-fluid">
				</div>

				<div class="col-lg-4">
					<img src="<?php echo e(base_url('assets/imagens/banco_bradesco.gif')); ?>" class="img-fluid">
				</div>

				<div class="col-lg-4">
					<img src="<?php echo e(base_url('assets/imagens/banco_caixa.gif')); ?>" class="img-fluid">
				</div>

				<div class="col-lg-4">
					<img src="<?php echo e(base_url('assets/imagens/banco_itau.gif')); ?>" class="img-fluid">
				</div>

				<div class="col-lg-4">
					<img src="<?php echo e(base_url('assets/imagens/banco_bb.gif')); ?>" class="img-fluid">
				</div>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('site/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>