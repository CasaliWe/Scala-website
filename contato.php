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

    // *** buscar endereço
    use Repositories\EnderecoRepository;
    $endereco = EnderecoRepository::getEndereco();
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

    <!-- CONTATO -->
    <?php include_once  __DIR__ .'/modulos/content-contato/index.php'; ?>
    <!-- CONTATO -->

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