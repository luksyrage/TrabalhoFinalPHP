<header>
    <div class="contato-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                     Rua Vereador Joaquim da Silva Martha, 20-17 - Vila Universitária - Bauru - SP
                </div>
                <div class="col-lg-4 text-right">
                    (14) 3010-7878
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row align-self-center align-items-center">
            <div class="col-lg-2 align-self-center">
                <a href="<?php echo e(base_url()); ?>">
                    <img src="<?php echo e(base_url('assets/imagens/logo.png')); ?>" alt="Universo dos imóveis" class="img-fluid logo">
                </a>
            </div>
            <div class="col-lg-10">
                <nav class="navbar navbar-expand-lg" id="navbar-top">
                    <a class="navbar-brand" href="#">Menu</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                        <i class="fas fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                        <ul class="navbar-nav mr-auto"></ul>
                        <ul class="navbar-nav mr-auto">
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
                </nav>
            </div>
        </div>
    </div>
</header>

<?php if(isset($pagina) && $pagina == 'index'): ?>
    <?php $__env->startComponent('site/layout/filtro', ['tipos_imoveis'=> $tipos_imoveis, 'cidades' => $cidades]); ?>

    <?php echo $__env->renderComponent(); ?>
<?php endif; ?>

