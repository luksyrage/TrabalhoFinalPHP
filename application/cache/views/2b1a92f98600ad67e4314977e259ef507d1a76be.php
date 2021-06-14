<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card" style="max-width: 600px; margin: 0 auto;">
            <div class="card-body">
                <h5 class="card-title">Cadastro de turmas</h5>
                <form action="<?php echo e(base_url('turmas/form')); ?>" method="POST">
                    <input type="hidden" name="id" value="<?php echo e(!empty($d->id) ? $d->id : ''); ?>">
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Descrição" value="<?php echo e(!empty($d->descricao) ? $d->descricao : ''); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="curso">Curso</label>
                        <select name="curso_id" id="curso_id" class="form-control" required>
                            <?php $__currentLoopData = $cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($c->id); ?>" <?php echo e((!empty($d->curso_id) && $d->curso_id == $c->id) ? 'selected' : ''); ?>><?php echo e($c->nome); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                       
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-sm">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>