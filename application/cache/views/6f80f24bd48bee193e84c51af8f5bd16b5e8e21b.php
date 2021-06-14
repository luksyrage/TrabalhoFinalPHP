<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card" style="max-width: 600px; margin: 0 auto;">
            <div class="card-body">
                <h5 class="card-title">Cadastro de curso</h5>
                <form action="<?php echo e(base_url('cursos/form')); ?>" method="POST">
                    <input type="hidden" name="id" value="<?php echo e(!empty($curso->id) ? $curso->id : ''); ?>">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" value="<?php echo e(!empty($curso->nome) ? $curso->nome : ''); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="periodicidade">Periodicidade</label>
                        <input type="text" class="form-control" name="periodicidade" id="periodicidade" placeholder="Periodicidade" value="<?php echo e(!empty($curso->periodicidade) ? $curso->periodicidade : ''); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <textarea type="text" class="form-control" name="descricao" id="descricao" placeholder="Descriçao" rows="5"><?php echo e(!empty($curso->descricao) ? $curso->descricao : ''); ?></textarea>
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