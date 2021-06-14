<header>
    <div class="container">
        <div class="row align-self-center">
            <div class="col-lg-3 align-self-center">
                <a href="<?php echo e(base_url()); ?>">
                    <img src="<?php echo e(base_url('assets/imagens/logo.png')); ?>" alt="Universo dos imóveis" class="img-fluid logo">
                </a>
            </div>
            <div class="col-lg-5 align-self-center">
                <ul class="top-contact">
                    <li>
                        <span>Comercial</span>
                        (14) 3204 6444
                    </li>

                     <li>
                        <a href="https://web.whatsapp.com/send?phone=5514991266923" target="_blank">
                            <span>Plantão / WhatsApp</span>
                            <i class="fab fa-whatsapp"></i> (14) 9912 66923 
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-1 align-self-center"></div>
            <div class="col-lg-2 align-self-center">
                <a href="">ÁREA DO CLIENTE</a>
            </div>

            <div class="col-lg-1 align-self-center">
                <a href="#" class="btn-menu"  data-toggle="tooltip" data-placement="bottom" title="Menu"><i class="fas fa-bars"></i></a>
            </div>
        </div>
        <?php if(isset($pagina) && $pagina == 'index'): ?>
            <div class="row">
                <div class="col-lg-12">
                    <?php $__env->startComponent('site/layout/filtro', ['tipos_imoveis'=> $tipos_imoveis, 'cidades' => $cidades]); ?>
        
                    <?php echo $__env->renderComponent(); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</header>

<div class="menu">
    <div class="close-menu"><i class="far fa-times-circle"></i></div>
    <ul class="nav">
        <li><h5>Institucional</h5></li>
        <li><a href="<?php echo e(base_url('quem-somos')); ?>">A IMOBILIÁRIA</a></li>
        <li><a href="<?php echo e(base_url('juridico')); ?>">DEPARTAMENTO JURÍDICO</a></li>
        <li><a href="<?php echo e(base_url('planos-de-administracao')); ?>">PLANOS PARA ADMINISTRAÇÃO</a></li>

        <li><h5>Imóveis</h5></li>
        <li><a href="<?php echo e(base_url('cadastre-seu-imovel')); ?>">CADASTRE SEU IMÓVEL</a></li>
        <li><a href="<?php echo e(base_url('construcao')); ?>">CONSTRUÇÃO</a></li>
        <li><a href="<?php echo e(base_url('encomende-seu-imovel')); ?>">ENCOMENDE SEU IMÓVEL</a></li>
        <li><a href="<?php echo e(base_url('regularizacao-de-imoveis')); ?>">REGULARIZAÇÃO DE IMÓVEIS</a></li>

        <li><h5>Serviços</h5></li>
        <li><a href="<?php echo e(base_url('alugue-facil')); ?>">ALUGUE FÁCIL - UNIVERSITÁRIO</a></li>
        <li><a href="<?php echo e(base_url('cadastro-de-locatario')); ?>">CADASTRO DE LOCATÁRIO</a></li>
        <li><a href="<?php echo e(base_url('cadastro-de-proposta')); ?>">CADASTRO DE PROPOSTA</a></li>
        <li><a href="<?php echo e(base_url('documentos-necessarios')); ?>">DOCUMENTOS NECESSÁRIOS LOCAÇÃO</a></li>
        <li><a href="<?php echo e(base_url('instrucao-para-locacao')); ?>">INSTRUÇÃO PARA LOCAÇÃO</a></li>
        <li><a href="<?php echo e(base_url('sac')); ?>">SAC - ATENDIMENTO AO CLIENTE</a></li>
        <li><a href="<?php echo e(base_url('loca-facil')); ?>">TIPOS DE FIANÇA</a></li>
        <li><a href="<?php echo e(base_url('e-facil-alugar')); ?>">É FÁCIL ALUGAR</a></li>

        <li><h5>Contato</h5></li>
        <li><a href="<?php echo e(base_url('fale-conosco')); ?>">FALE CONOSCO</a></li>
        <li><a href="<?php echo e(base_url('faca-parte')); ?>">TRABALHE CONOSCO</a></li>
    </ul>
</div>

<script type="text/javascript">
    $(document).on('click', '.btn-menu', function(event){
        event.preventDefault();
        $('.menu').fadeIn('fast');
    });

    $(document).on('click', '.close-menu', function(){
        $('.menu').fadeOut('fast');
    });
</script>