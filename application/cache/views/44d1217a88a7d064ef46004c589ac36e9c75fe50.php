<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php if($alerta): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button><?php echo e($alerta->flashdata('sucesso')); ?>

            </div>
        <?php endif; ?>
        
        <div class="row">
            <div class="col-md-12 mb-1">
                <a href="<?php echo e(base_url('cursos/form')); ?>" class="btn btn-primary btn-sm">Novo curso</a>
            </div>
        </div>
        <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Periodicidade</th>
                <th scope="col">Descrição</th>
                <th scope="col" width="150px" class="text-center" valign="middle">Ações</th>
              </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($curso->nome); ?></td>
                        <td><?php echo e($curso->periodicidade); ?></td>
                        <td><?php echo e($curso->descricao); ?></td>
                        <td class="text-center">
                            <a href="<?php echo e(base_url('cursos/form/'.$curso->id)); ?>">Editar</a> | 
                            <a href="<?php echo e(base_url('cursos/excluir/'.$curso->id)); ?>">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>