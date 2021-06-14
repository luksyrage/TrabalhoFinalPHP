<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card" style="max-width: 600px; margin: 0 auto;">
            <div class="card-body">
                <h5 class="card-title">Cadastro de alunos</h5>
                <form action="<?php echo e(base_url('alunos/form')); ?>" method="POST">
                    <input type="hidden" name="id" value="<?php echo e(!empty($d->id) ? $d->id : ''); ?>">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" value="<?php echo e(!empty($d->nome) ? $d->nome : ''); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="turma_id">Turmas</label>
                        <select name="turma_id" id="turma_id" class="form-control" required>
                            <?php $__currentLoopData = $turmas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($t->id); ?>" <?php echo e((!empty($d->turma_id) && $d->turma_id == $t->id) ? 'selected' : ''); ?>><?php echo e($t->descricao); ?></option>
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