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

    // *** buscar texto
    use Repositories\TextosEmpresaRepository;
    $textos = TextosEmpresaRepository::getAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <?php include_once  __DIR__ .'/modulos/header/index.php'; ?>

</head>
<body>

    <!-- WPP FLOAT -->
    <?php include_once  __DIR__ .'/modulos/wpp-float/index.php'; ?>
    <!-- WPP FLOAT -->
     
    <!-- MENU -->
    <?php include_once  __DIR__ .'/modulos/menu/index.php'; ?>
    <!-- MENU -->

    <!-- BANNER EMPRESA -->
    <?php include_once  __DIR__ .'/modulos/banner-empresa/index.php'; ?>
    <!-- BANNER EMPRESA -->

    <!-- CONTENT EMPRESA -->
    <?php include_once  __DIR__ .'/modulos/content-empresa/index.php'; ?>
    <!-- CONTENT EMPRESA -->

    <!-- MISSÃO -->
    <?php include_once  __DIR__ .'/modulos/missao-visao-valores/index.php'; ?>
    <!-- MISSÃO -->

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