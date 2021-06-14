<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Sistema acadêmico</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(base_url('assets/css/bootstrap.min.css')); ?>">

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo e(base_url('assets/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(base_url('assets/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(base_url('assets/js/bootstrap.min.js')); ?>"></script>
</head>
<body>
    <?php echo $__env->make('layout/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Exibe o conteudo da pagina -->
    <?php echo $__env->yieldContent('content'); ?>
    
    <?php echo $__env->make('layout/footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
</body>
</html>