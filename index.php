<?php
    include_once __DIR__ . '/config/config.php';

    // *** buscar dados
    use Repositories\ContatosRepository;
    $contatos = ContatosRepository::getContatos();
    
    // *** buscar serviços
    use Repositories\ServicosRepository;
    $servicos = ServicosRepository::getAll();

    // *** buscar banners
    use Repositories\BannersRepository;
    $banners = BannersRepository::getAll();

    // *** buscar soluções
    use Repositories\SolucoesRepository;
    $solucoes = SolucoesRepository::getAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <?php include_once  __DIR__ .'/modulos/header/index.php'; ?>

</head>
<body>

    <!-- AVISO COOKIES -->
    <?php include_once  __DIR__ .'/modulos/aviso-cookies/index.php'; ?>
    <!-- AVISO COOKIES -->

    <!-- WPP FLOAT -->
    <?php include_once  __DIR__ .'/modulos/wpp-float/index.php'; ?>
    <!-- WPP FLOAT -->

    <!-- MENU -->
    <?php include_once  __DIR__ .'/modulos/menu/index.php'; ?>
    <!-- MENU -->

    <!-- BANNER INICIAL -->
    <?php include_once  __DIR__ .'/modulos/banner-inicial/index.php'; ?>
    <!-- BANNER INICIAL -->

    <!-- SOLUÇÕES -->
    <?php include_once  __DIR__ .'/modulos/solucoes/index.php'; ?>
    <!-- SOLUÇÕES -->

    <!-- BANNER CTA HOME -->
    <?php include_once  __DIR__ .'/modulos/banner-cta-home/index.php'; ?>
    <!-- BANNER CTA HOME -->

    <!-- NOSSOS SERVIÇOS HOME -->
    <?php include_once  __DIR__ .'/modulos/nossos-servicos-home/index.php'; ?>
    <!-- NOSSOS SERVIÇOS HOME -->

    <!-- VAMOS CONVERSAR -->
    <?php include_once  __DIR__ .'/modulos/vamos-conversar/index.php'; ?>
    <!-- VAMOS CONVERSAR -->

    <!-- FOOTER -->
    <?php include_once  __DIR__ .'/modulos/footer/index.php'; ?>
    <!-- FOOTER -->











    
    

    <!-- SCROLL ANIMATION -->
    <script src="<?= $base_url; ?>assets/utils/anima-scroll/aos.js"></script>
    <script>AOS.init()</script>

    <!-- BOOTSTRAP -->
    <script src="<?= $base_url; ?>assets/utils/bootstrap/bootstrap.js"></script>

    <!-- LOADING JS -->
    <script src="<?= $base_url; ?>assets/js/loading.js"></script>

    <!-- FANCYBOX JS -->
    <script src="<?= $base_url; ?>assets/utils/fancybox/fancybox-1.js"></script>
    <script src="<?= $base_url; ?>assets/utils/fancybox/fancybox-2.js"></script>

    <!-- JS GLOBAL -->
    <script src="<?= $base_url; ?>assets/js/app.js"></script>
</body>
</html>