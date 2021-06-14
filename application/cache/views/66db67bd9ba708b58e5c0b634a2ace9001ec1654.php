

<section class="busca">
	
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h1>ENCONTRE O IMÓVEL PARA CHAMAR DE SEU!</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="filtro">
					<form id="imoveis-busca">
						<div class="row">
							<div class="col-lg-2 no-padding-right">
								<div class="form-group">
									<select class="form-control" name="negocio" id="negocio">
										<option value="V">Comprar</option>								    
										<option value="L">Alugar</option>								    
									</select>
								</div>
							</div>
							<div class="col-lg-2 no-padding-right">
								<div class="form-group">
									<select class="form-control" name="tipo" title="Todos os tipos" id="tipo_imovel">
										<option value="">Tipo</option>	
										<?php $__currentLoopData = $tipos_imoveis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($tipo->slug); ?>"><?php echo e($tipo->tipo); ?></option>								    
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</select>
								</div>
							</div>
							<div class="col-lg-6 no-padding-right">
								<div class="form-group">
									<input type="text" name="localidade" class="form-control" placeholder="Digite condomínio, bairro ou cidade" id="localidade" autocomplete="off">
								</div>
							</div>
							
							<div class="col-lg-2">
								<div class="form-group">
									<button type="button" class="btn btn-block btn-custom" id="btn-busca-imoveis" data-url="<?php echo e(base_url()); ?>">Buscar</button>
								</div>
							</div>
						</div>
					</form>

					<form id="busca-referencia">
						<div class="row">
							<div class="col-lg-10 no-padding-right">
								<div class="form-group">
									<input type="text" name="referencia" class="form-control" placeholder="Digite o código do imóvel" id="referencia">
								</div>
							</div>
							
							<div class="col-lg-2">
								<div class="form-group">
									<button type="button" class="btn btn-block btn-custom" id="btn-busca-referencia" data-url="<?php echo e(base_url()); ?>">Buscar</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 text-center">
				<a href="#" id="btn-busca-codigo" class="btn btn-custom btn">Busca por código</a>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$(document).on('click', '#btn-busca-codigo', function(event){
			event.preventDefault();
			if($('#imoveis-busca').is(":visible")){
				$('#imoveis-busca').hide();
				$('#busca-referencia').show();
				$('#btn-busca-codigo').html('Buscar por características');
			}
			else{
				$('#busca-referencia').hide();
				$('#imoveis-busca').show();
				$('#btn-busca-codigo').html('Buscar por código');
			}
		});
	</script>
</section>

