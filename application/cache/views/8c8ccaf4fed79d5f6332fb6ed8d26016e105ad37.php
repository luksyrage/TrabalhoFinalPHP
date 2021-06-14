

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-1">
                <a href="<?php echo e(base_url('turmas/form')); ?>" class="btn btn-primary btn-sm">Nova turma</a>
            </div>
        </div>
        <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">Descriçao</th>
                <th scope="col">Curso</th>
                <th scope="col" width="150px" class="text-center" valign="middle">Ações</th>
              </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $turmas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($d->descricao); ?></td>
                        <td><?php echo e($d->nome_curso); ?></td>
                        <td class="text-center">
                            <a href="<?php echo e(base_url('turmas/form/'.$d->id)); ?>">Editar</a> | 
                            <a href="<?php echo e(base_url('turmas/excluir/'.$d->id)); ?>">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>