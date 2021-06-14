<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card" style="max-width: 600px; margin: 0 auto;">
            <div class="card-body">
                <h5 class="card-title">Cadastro de disciplinas</h5>
                <form action="<?php echo e(base_url('disciplinas/form')); ?>" method="POST">
                    <input type="hidden" name="id" value="<?php echo e(!empty($d->id) ? $d->id : ''); ?>">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" value="<?php echo e(!empty($d->nome) ? $d->nome : ''); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="carga_horaria">Carga horária</label>
                        <input type="text" class="form-control" name="carga_horaria" id="carga_horaria" placeholder="Carga horária" value="<?php echo e(!empty($d->carga_horaria) ? $d->carga_horaria : ''); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="ementa">Ementa</label>
                        <textarea type="text" class="form-control" name="ementa" id="ementa" placeholder="Ementa" rows="5"><?php echo e(!empty($d->ementa) ? $d->ementa : ''); ?></textarea>
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