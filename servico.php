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

    $id_servico = $_GET['id'] ?? null;
    if ($id_servico) {
        $servico_selecionado = ServicosRepository::getOne($id_servico);
        if (!$servico_selecionado) {
            header('Location: ' . $base_url . 'index.php');
            exit;
        }
    } else {
        header('Location: ' . $base_url . 'index.php');
        exit;
    }
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

    <!-- BANNER SERVICO -->
    <?php include_once  __DIR__ .'/modulos/banner-servico/index.php'; ?>
    <!-- BANNER SERVICO -->

    <!-- CONTENT SERVICO -->
    <?php include_once  __DIR__ .'/modulos/content-servico/index.php'; ?>
    <!-- CONTENT SERVICO -->

    <!-- CTA SERVICO -->
    <?php include_once  __DIR__ .'/modulos/cta-servico/index.php'; ?>
    <!-- CTA SERVICO -->

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