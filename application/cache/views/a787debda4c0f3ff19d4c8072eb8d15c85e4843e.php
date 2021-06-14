<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card" style="max-width: 600px; margin: 0 auto;">
            <div class="card-body">
                <h5 class="card-title">Cadastro de professores</h5>
                <form action="<?php echo e(base_url('professores/form')); ?>" method="POST">
                    <input type="hidden" name="id" value="<?php echo e(!empty($d->id) ? $d->id : ''); ?>">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" value="<?php echo e(!empty($d->nome) ? $d->nome : ''); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="titulacao">Titulação</label>
                        <input type="text" class="form-control" name="titulacao" id="titulacao" placeholder="Carga horária" value="<?php echo e(!empty($d->titulacao) ? $d->titulacao : ''); ?>" required>
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