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
					<a href="https://www.santander.com.br/creditos-e-financiamentos/para-sua-casa/credito-imobiliario" target="_blank">
						<img src="<?php echo e(base_url('assets/imagens/banco_santander.gif')); ?>" class="img-fluid">
					</a>
				</div>

				<div class="col-lg-4">
					<a href="https://banco.bradesco/html/classic/produtos-servicos/emprestimo-e-financiamento/imoveis/index.shtm" target="_blank">
						<img src="<?php echo e(base_url('assets/imagens/banco_bradesco.gif')); ?>" class="img-fluid">
					</a>
				</div>

				<div class="col-lg-4">
					<a href="http://www8.caixa.gov.br/siopiinternet-web/simulaOperacaoInternet.do?method=inicializarCasoUso&isVoltar=true" target="_blank">
						<img src="<?php echo e(base_url('assets/imagens/banco_caixa.gif')); ?>" class="img-fluid">
					</a>
				</div>

				<div class="col-lg-4">
					<a href="https://www.itau.com.br/creditos-financiamentos/imoveis/simulador/" target="_blank">
						<img src="<?php echo e(base_url('assets/imagens/banco_itau.gif')); ?>" class="img-fluid">
					</a>
				</div>

				<div class="col-lg-4">
					<a href="https://www.bb.com.br/pbb/pagina-inicial/voce/produtos-e-servicos/financiamentos/financiar-imoveis/imoveis-residenciais?gclid=Cj0KCQjwla7nBRDxARIsADll0kCTJIs9a_2LLPuRT_Yzm_-N8C0Vjytr_V9mwsBeCZ3VqSQ3prpVRC8aAlseEALw_wcB#/" target="_blank">
						<img src="<?php echo e(base_url('assets/imagens/banco_bb.gif')); ?>" class="img-fluid">
					</a>
				</div>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('site/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>