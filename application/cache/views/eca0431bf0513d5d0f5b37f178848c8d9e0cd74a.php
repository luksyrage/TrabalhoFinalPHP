<div style="border-top: 1px solid #16355B;">
    <div class="container"> 
        <div class="row">
            <div class="col-lg-2 align-self-center">CRECI 30.529 J</div>
            <div class="col-lg-10">
                <ul class="nav nav-contato justify-content-end">
                   
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)"><i class="fas fa-phone"></i> (14) 3227-0052</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://api.whatsapp.com/send?phone=5514997927000" target="_blank"><i class="fab fa-whatsapp"></i> (14)99792-7000</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)"><i class="fas fa-envelope"></i> imoveis@grizoni.com.br</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<header>
    <div class="container">        
        <div class="row align-self-center align-items-center">
            <div class="col-lg-4 align-self-center">
                <a href="<?php echo e(base_url()); ?>">
                    <img src="<?php echo e(base_url('assets/imagens/logo.png')); ?>" alt="Universo dos imóveis" class="img-fluid logo">
                </a>
            </div>
            <div class="col-lg-8">
                <nav class="navbar navbar-expand-lg" id="navbar-top">
                    <div class="container">
                        <a class="navbar-brand" href="#">Menu</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                            <i class="fas fa-bars"></i>
                        </button>

                        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                            <ul class="navbar-nav mr-auto"></ul>
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?php echo e(base_url()); ?>">Inicial</a>
                                </li>

                                <li class="nav-item active">
                                    <a class="nav-link" href="<?php echo e(base_url('sobre')); ?>">Quem somos</a>
                                </li>

                                <li class="nav-item active">
                                    <a class="nav-link" href="<?php echo e(base_url('anuncie-seu-imovel')); ?>">Anuncie seu imóvel</a>
                                </li>

                                <li class="nav-item active">
                                    <a class="nav-link" href="<?php echo e(base_url('financiamento')); ?>">Financiamento</a>
                                </li>

                                <li class="nav-item active">
                                    <a class="nav-link" href="<?php echo e(base_url('contato')); ?>">Contato</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<?php if(isset($pagina) && $pagina == 'index'): ?>
    <?php $__env->startComponent('site/layout/filtro', ['tipos_imoveis'=> $tipos_imoveis, 'cidades' => $cidades]); ?>

    <?php echo $__env->renderComponent(); ?>
<?php endif; ?>

