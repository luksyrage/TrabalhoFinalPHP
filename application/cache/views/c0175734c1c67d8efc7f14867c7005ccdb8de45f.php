<?php $__env->startSection('title', NOME_SITE.' - Quem somos'); ?>




<?php $__env->startSection('content'); ?>
	<section class="conteudo">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1>Cadastre seu Imóvel</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					
					<div class="box">
						<form action="<?php echo e(base_url('cadastre-seu-imovel')); ?>" method="post" id="step-form">
							<div>
						       	<h3>Proprietário</h3>
						        <section>
						        	<h3>Proprietário</h3>
						        	<div class="form-group">
							            <label for="nome">Nome *</label>
							            <input id="nome" name="nome" type="text" class="form-control required">
						           	</div>
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
									            <label for="celular">Celular *</label>
									            <input id="celular" name="celular" type="text" class="form-control required">
								           	</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
									            <label for="telefone">Telefone</label>
									            <input id="telefone" name="telefone" type="text" class="form-control">
								           	</div>
										</div>
									</div>

									<div class="form-group">
							            <label for="email">E-mail *</label>
							            <input id="email" name="email" type="text" class="form-control required">
						           	</div>
						            
						            <p>(*) Obrigatório</p>
						        </section>
						        <h3>Características</h3>
						        <section>
						        	<h3>Características</h3>
						            <div class="form-group">
							            <label for="finalidade">Finalidade *</label>
							            <select id="finalidade" name="finalidade" class="form-control required">
							            	<option value="">Finalidade *</option>
							            	<option value="Residencial">Residencial</option>
							            	<option value="Comercial">Comercial</option>
							            	<option value="Industrial">Industrial</option>
							            	<option value="Rural">Rural</option>
							            	<option value="Temporada">Temporada</option>
							            	<option value="Corporativa">Corporativa</option>
							            </select>
						           	</div>
						           	<div class="form-group">
							            <label for="tipo">Tipo *</label>
							            <select id="tipo" name="tipo" class="form-control required">
							            	<option value="" selected disabled>Tipo *</option>
								            	<?php $__currentLoopData = $tipos_imoveis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<option value="<?php echo e($tipo->tipo); ?>"><?php echo e($tipo->tipo); ?></option>								    
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							            </select>
						           	</div>
						           	<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
									           <label class="checkbox-inline"><input type="checkbox" name="negocio" value="Venda" data-form-target="venda"> 
									            	Para venda
									           	</label>
								           	</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
									            <label class="checkbox-inline"><input type="checkbox" name="negocio" value="Locação" data-form-target="locacao"> 
									            	Para Locação
									           	</label>
								           	</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
												<label for="tipo">Valor dó imóvel *</label>
												<input type="text" name="valor_imovel" id="valor_imovel" class=" form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
							            <label for="nome_condominio">Nome condomínio/Edifício</label>
							            <input type="text" name="nome_condominio" id="nome_condominio" class=" form-control">
						           	</div>

						           	<div class="form-group">
							            <label for="valor_condominio">Valor do condomínio</label>
							            <input type="text" name="valor_condominio" id="valor_condominio" class=" form-control">
						           	</div>

						           	<div class="form-group">
							           <label class="checkbox-inline"><input type="checkbox" name="aceita_finaciamento" value="Sim" data-form-target="sim"> 
							            	Aceita finaciamento
							           	</label>
						           	</div>

						           	<div class="form-group">
							            <label for="endereco">Endereço *</label>
							            <input type="text" name="endereco" id="endereco" class="required form-control" required>
						           	</div>

						           	<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
									            <label for="area_total">Área total/terreno</label>
							            		<input type="text" name="area_total" id="area_total" class=" form-control">
								           	</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
									             <label for="area_util">Área útil/construída</label>
							            		<input type="text" name="area_util" id="area_util" class=" form-control">
								           	</div>
										</div>
									</div>

									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
									            <label for="dormitorios">Dormitórios</label>
							            		<input type="text" name="dormitorios" id="dormitorios" class=" form-control">
								           	</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
									             <label for="suites">Suítes</label>
							            		<input type="text" name="suites" id="suites" class=" form-control">
								           	</div>
										</div>
									</div>

									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
									            <label for="dormitorios">Dormitórios</label>
							            		<input type="text" name="dormitorios" id="dormitorios" class=" form-control">
								           	</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
									             <label for="suites">Suítes</label>
							            		<input type="text" name="suites" id="suites" class=" form-control">
								           	</div>
										</div>
									</div>

									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
									            <label for="vagas_cobertas">Vagas cobertas</label>
							            		<input type="text" name="vagas_cobertas" id="vagas_cobertas" class=" form-control">
								           	</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
									             <label for="vagas_descobertas">Vagas descobertas</label>
							            		<input type="text" name="vagas_descobertas" id="vagas_descobertas" class=" form-control">
								           	</div>
										</div>
									</div>

									<div class="form-group">
										<textarea name="descricao" placeholder="Outras características (pense nos diferenciais que seu imóvel possui)" class="form-control" rows="5"></textarea>
									</div>
						        </section>
						    </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('site/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>