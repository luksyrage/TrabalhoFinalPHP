


<?php $__env->startSection('title', NOME_SITE.' - Quem somos'); ?>




<?php $__env->startSection('content'); ?>
	<section class="conteudo">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1>A Imobiliária</h1>
				</div>
			</div>
			<div class="box">
				<div class="row">
					<div class="col-lg-4">
						<img src="<?php echo e(base_url('assets/imagens/1399387308marcello.jpg')); ?>" class="img-fluid">
					</div>
					<div class="col-lg-8">
						
						<p>
							Temos como principal objetivo garantir aos nossos clientes uma excelência nos serviços imobiliários prestados.
						</p>
	 					<p>
	 						Para que esta excelência seja alcançada, a Prime conta com profissionais qualificados e aptos a atender seus clientes dando todas as orientações necessárias com atendimento de qualidade.
	 					</p>
	 					<p>
	 						A Prime conta com dois sócios, Marcello Mastroianni, corretor de Imóveis creci 92.682 e Administrador  pós-graduado, possui 13 anos de experiência no ramo imobiliário.
	 					</p>
						</p><br><br><br><br><br><br><br><br><br>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('site/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>