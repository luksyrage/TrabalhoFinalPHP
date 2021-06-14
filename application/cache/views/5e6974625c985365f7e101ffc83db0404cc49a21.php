<div class="box filtro-lateral">
	<form id="imoveis-busca">		
		<div class="tabs">
			<!-- ABA 1 -->
		    <input type="radio" name="negocio"  value="V" class="aba" id="tab1" checked>
		    <label for="tab1">Comprar</label>
		    
		    <!-- ABA 2 -->
		    <input type="radio" name="negocio" value="L" class="aba" id="tab2">
		    <label for="tab2">Alugar</label>
		    
		    <!-- ABA 3 -->
		    <input type="radio" name="negocio" value="N" class="aba" id="tab3">
		    <label for="tab3">Novos</label>
		</div>
		<div class="list-group">
			<div class="list-group-item">
				<div class="form-group">
					<label>Tipo do Imóvel</label>
					<select name="tipo" class="custom-select form-control" id="tipo_imovel">
		        		<option value="">Tipo do Imóvel</option>
		        		<?php $__currentLoopData = $tipos_imoveis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		        			<?php if(isset($filtro['tipo_imovel']) && $filtro['tipo_imovel'] == $tipo->slug): ?>
								<option value="<?php echo e($tipo->slug); ?>" selected><?php echo e($tipo->tipo); ?></option>	
							<?php else: ?>				
								<option value="<?php echo e($tipo->slug); ?>"><?php echo e($tipo->tipo); ?></option>	
							<?php endif; ?>			    
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		        	</select>
				</div>
			</div>
			<div class="list-group-item">
				<div class="form-group">
					<label>Preço do Imóvel(R$)</label>	
					<div class="row">
						<div class="col">
							<input type="text" class="form-control price" name="min" id="min" placeholder="Mínimo" onkeyup="this.value=adicionarPonto(this);">
						</div>
						<div class="col">
							<input type="text" class="form-control price" name="max" id="max" placeholder="Máximo" onkeyup="this.value=adicionarPonto(this);">
						</div>
					</div>
				</div>
			</div>
			<div class="list-group-item">
				<div class="form-group">
					<label>Localidades</label>					
					<input type="text" name="localidade" class="form-control" placeholder="Digite condomínio, bairro ou cidade" id="localidade" value="<?php echo e($filtro['localidade']); ?>" autocomplete="off">
				</div>
			</div>

			<div class="list-group-item">
				<div class="form-group">
					<label>Quartos</label>
					<div class="buttons-container">
						<input type="radio" value="1" name="quartos" class="radio-btn" id="q1">
						<label for="q1">1+</label>
						
						<input type="radio" value="2" name="quartos" class="radio-btn" id="q2">
						<label for="q2">2+</label>

						<input type="radio" value="3" name="quartos" class="radio-btn" id="q3">
						<label for="q3">3+</label>

						<input type="radio" value="4" name="quartos" class="radio-btn" id="q4">
						<label for="q4">4+</label>

						<input type="radio" value="5" name="quartos" class="radio-btn" id="q5">
						<label for="q5">5+</label>
					</div>
				</div>
			</div>

			<div class="list-group-item">
				<div class="form-group">
					<label>Banheiros</label>
					<div class="buttons-container">
						<input type="radio" value="1" name="banheiros" class="radio-btn" id="b1">
						<label for="b1">1+</label>
						
						<input type="radio" value="2" name="banheiros" class="radio-btn" id="b2">
						<label for="b2">2+</label>

						<input type="radio" value="3" name="banheiros" class="radio-btn" id="b3">
						<label for="b3">3+</label>

						<input type="radio" value="4" name="banheiros" class="radio-btn" id="b4">
						<label for="b4">4+</label>

						<input type="radio" value="5" name="banheiros" class="radio-btn" id="b5">
						<label for="b5">5+</label>
					</div>
				</div>
			</div>

			<div class="list-group-item">
				<div class="form-group">
					<label>Suítes</label>
					<div class="buttons-container">
						<input type="radio" value="1" name="suites" class="radio-btn" id="s1">
						<label for="s1">1+</label>
						
						<input type="radio" value="2" name="suites" class="radio-btn" id="s2">
						<label for="s2">2+</label>

						<input type="radio" value="3" name="suites" class="radio-btn" id="s3">
						<label for="s3">3+</label>

						<input type="radio" value="4" name="suites" class="radio-btn" id="s4">
						<label for="s4">4+</label>

						<input type="radio" value="5" name="suites" class="radio-btn" id="s5">
						<label for="s5">5+</label>
					</div>
				</div>
			</div>

			<div class="list-group-item">
				<div class="form-group">
					<label>Vagas</label>
					<div class="buttons-container">
						<input type="radio" value="1" name="garagens" class="radio-btn" id="v1">
						<label for="v1">1+</label>
						
						<input type="radio" value="2" name="garagens" class="radio-btn" id="v2">
						<label for="v2">2+</label>

						<input type="radio" value="3" name="garagens" class="radio-btn" id="v3">
						<label for="v3">3+</label>

						<input type="radio" value="4" name="garagens" class="radio-btn" id="v4">
						<label for="v4">4+</label>

						<input type="radio" value="5" name="garagens" class="radio-btn" id="v5">
						<label for="v5">5+</label>
					</div>
				</div>
			</div>
			<button type="button" id="btn-buscar-imoveis" data-url="<?php echo e(base_url()); ?>" class="btn btn-warning"><i class="fa fa-search" aria-hidden="true"></i> Buscar</button>
		</div>
	</form>						
</div>

<script type="text/javascript">
	$(document).on('click', 'ul.typeahead a.dropdown-item', function(){
	    $('#btn-buscar-imoveis').click();
	});
</script>