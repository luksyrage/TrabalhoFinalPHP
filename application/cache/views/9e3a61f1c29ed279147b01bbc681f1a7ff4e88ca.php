<?php $__env->startSection('title', NOME_SITE.' - Quem somos'); ?>




<?php $__env->startSection('content'); ?>
	<section class="conteudo">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1>Anuncie seu imóvel</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<?php if($alerta and $alerta != ''): ?>
						<?php echo $alerta; ?>

					<?php endif; ?>
					<div class="box">
						<form action="<?php echo e(base_url('contato')); ?>" method="post" id="step-form">
							<div class="row">
		                        <div class="col-md-6">
		                            <div class="form-group">
		                                <label for="nome">Nome</label>
		                                <input type="text" name="nome" id="nome" class="form-control" value="<?php if(isset($_POST['nome'])) echo $_POST['nome']; ?>" maxlength="50" placeholder="Nome completo" required/>
		                            </div>  
		                        </div>
		                        <div class="col-md-6">
		                            <div class="form-group">
		                                <label for="email">E-mail</label>
		                                <input type="email" name="email" id="email" class="form-control" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" maxlength="60" placeholder="E-mail" required/>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="row">
		                        <div class="col-md-6">
		                            <div class="form-group">
		                            <label for="telefone">Telefone</label>
		                            <input type="text" name="telefone" id="telefone" class="form-control cel" value="<?php if(isset($_POST['telefone'])) echo $_POST['telefone']; ?>" maxlength="15" placeholder="Telefone"/>
		                            </div>
		                        </div>
		                        <div class="col-md-6">
		                            <div class="form-group">
		                                <label for="celular">Celular</label>
		                                <input type="text" name="celular" id="celular" class="form-control cel" value="<?php if(isset($_POST['celular'])) echo $_POST['celular']; ?>" placeholder="Celular"/>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label for="mensagem">Mensagem</label>
		                        <textarea name="mensagem" id="mensagem" class="form-control" rows="4" placeholder="Mais Informações" required><?php if(isset($_POST['mensagem'])) echo $_POST['mensagem']; ?></textarea>
		                    </div>  
		                    <div class="form-group" style="overflow: hidden;">
		                        <div class="g-recaptcha" data-sitekey=""></div>
		                    </div>
		                    <button type="submit" class="btn btn-custom">
		                    	Enviar <span class="glyphicon glyphicon-send"></span>
		                    </button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>