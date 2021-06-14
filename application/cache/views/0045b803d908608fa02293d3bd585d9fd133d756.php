<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap CSS -->
    <link rel="icon" href="<?php echo e(base_url('assets/imagens/favicon.png')); ?>" />
    <link rel="stylesheet" href="<?php echo e(base_url('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(base_url('assets/css/site.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(base_url('assets/css/slick.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(base_url('assets/css/slick-theme.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(base_url('assets/css/select-picker-custom.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(base_url('assets/css/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(base_url('assets/css/jquery.steps.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    <script src="https://use.fontawesome.com/13c16df418.js"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo e(base_url('assets/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(base_url('assets/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(base_url('assets/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(base_url('assets/js/jquery.easing.min.js')); ?>"></script>
    <script src="<?php echo e(base_url('assets/js/jquery.steps.min.js')); ?>"></script>
    <script src="<?php echo e(base_url('assets/js/slick.min.js')); ?>"></script>
    <script src="<?php echo e(base_url('assets/js/typeahead.js')); ?>"></script>
    <script src="<?php echo e(base_url('assets/js/jquery.price_format.1.6.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.min.js"></script>
   
    
</head>
<?php if(isset($pagina) && $pagina == 'index'): ?>
    <body  id="home-page">
<?php else: ?>
    <body>
<?php endif; ?>

    
    <?php echo $__env->make('site/layout/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    

    <!-- Exibe o conteudo da pagina -->
    <?php echo $__env->yieldContent('content'); ?>
    
    <?php echo $__env->make('site/layout/footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <script type="text/javascript" src="<?php echo e(base_url('assets/js/busca.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(base_url('assets/js/buscar-imoveis.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(base_url('assets/js/step-form.js')); ?>"></script>
    <script type="text/javascript">
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

        $(document).ready(function() {
            
            // $('.price').priceFormat({ prefix: '', thousandsSeparator: '.' , limit: false});


            $('.carousel-fotos').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
            });
        });

        $(function(){
            $('#cidade').change(function(){
                var cod_cidade = $('#cidade').val();

                $.ajax({
                    type      : 'post',
                    url       : '<?php echo e(base_url('get-bairros')); ?>',
                    data: {cod_cidade:cod_cidade},
                    dataType  : 'html',
                    success : function(retorno) {
                        $("#bairro" ).empty();
                        $("#bairro").append(retorno); 
                        $("#bairro").prop("disabled", false);
                    }

                }).done(function () {
                    $('#bairro').selectpicker('refresh');
                });
            });
        });

        $('#localidade').typeahead(
        {
            source: function (query, result) {
                $.ajax({
                    url: "<?php echo e(base_url('get-localidades')); ?>",
                    data: 'query=' + query,            
                    dataType: "json",
                    type: "POST",
                    success: function (data) {
                        result($.map(data, function (item) {
                            return item;
                        }));
                    }
                });
            }
        });

        function adicionarPonto(campo) {
            if(!campo.value)
                return campo.value      
            var nvalue = Number(RemoverPonto(campo)).toLocaleString('pt-BR')
            return nvalue;
        }
        function RemoverPonto(campo)
        {   
            campo.value = campo.value.split(".").join("");
            return campo.value;
        }
    
    </script>
    

    
</body>
</html>