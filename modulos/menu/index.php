<link rel="stylesheet" href="<?= $base_url; ?>modulos/menu/css/style.css">

<!-- menu mobile -->
<div id="menu-mobile" class="bg-0 flex-column justify-content-between">

    <div class="px-4 py-4 d-flex align-items-center justify-content-between">
        <!-- logo -->
        <a href="<?= $base_url; ?>index.php">
            <img src='<?= $base_url ?>assets/imagens/site/logo-header.png' id="logo-header">
        </a>
        <!-- logo -->

        <!-- close -->
        <button onclick="menu()" id="close">
            <img style="width: 45px;" src='<?= $base_url ?>assets/imagens/site/close.png'>
        </button>
        <!-- close -->
    </div>

    <!-- navegação mob -->
    <nav class="d-flex flex-column mt-4 px-4">
        <a href="<?= $base_url; ?>index.php" class="<?= \Core\RoutesSite::isActive('/index.php') ? 'active-link' : '' ?> mb-5 fs-3 text-white">Início</a>
        <a href="<?= $base_url; ?>empresa.php" class="<?= \Core\RoutesSite::isActive('/empresa.php') ? 'active-link' : '' ?> mb-5 fs-3 text-white">Empresa</a>
        <div class="dropdown-servicos-mobile mb-5">
            <a href="#" class="<?= \Core\RoutesSite::isActive('/servico.php') ? 'active-link' : '' ?> fs-3 text-white d-flex align-items-center dropdown-toggle" onclick="toggleMobileDropdown(event)">
                Serviços
            </a>
            <div class="dropdown-menu-mobile">
                <?php foreach ($servicos as $key => $servico) { ?>
                    <a href="<?= $base_url; ?>servico.php?id=<?= $servico['id']; ?>" style="color: white !important;" class="fs-4 text-1 mb-3 d-block"><?= $servico['titulo']; ?></a>
                <?php } ?>
            </div>
        </div>
        <a href="<?= $base_url; ?>contato.php" class="<?= \Core\RoutesSite::isActive('/contato.php') ? 'active-link' : '' ?> mb-5 fs-3 text-white">Contato</a>
    </nav>
    
    <div class="bg-1 py-4 w-100 px-4 d-flex align-items-center justify-content-between">
        <a href="<?= $base_url; ?>fale-conosco.php" class="bg-white text-dark py-2 px-4 rounded">Fale Conosco</a>
        <a href="<?= $contatos['area_cliente']; ?>" class="bg-0 text-1 py-2 px-4 rounded">Área do cliente</a>
    </div>
    <!-- navegação mob -->

</div>
<!-- menu mobile -->


<div class="bg-0 py-4 w-100 position-fixed" style="top: 0; z-index: 9 !important;">

    <div class="px-4 px-lg-0 container mx-auto d-flex align-items-center justify-content-between">

        <!-- logo -->
        <a href="<?= $base_url; ?>index.php">
            <img src='<?= $base_url ?>assets/imagens/site/logo-header.png' id="logo-header">
        </a>
        <!-- logo -->

        <!-- nav desktop -->
        <div class="d-flex align-items-center" id="nav-desktop">
            <nav class="d-flex me-5">
                <a href="<?= $base_url; ?>index.php" class="<?= \Core\RoutesSite::isActive('/index.php') ? 'active-link' : '' ?> font-link-nav text-white">Início</a>
                <a href="<?= $base_url; ?>empresa.php" class="<?= \Core\RoutesSite::isActive('/empresa.php') ? 'active-link' : '' ?> font-link-nav text-white">Empresa</a>
                <div class="dropdown-servicos">
                    <a href="#" class="<?= \Core\RoutesSite::isActive('/servico.php') ? 'active-link' : '' ?> font-link-nav text-white d-flex align-items-center dropdown-toggle">
                        Serviços
                    </a>
                    <div class="dropdown-menu bg-0">
                        <?php foreach ($servicos as $key => $servico) { ?>
                            <a href="<?= $base_url; ?>servico.php?id=<?= $servico['id']; ?>" class="dropdown-item"><?= $servico['titulo']; ?></a>
                        <?php } ?>
                    </div>
                </div>
                <a href="<?= $base_url; ?>contato.php" class="<?= \Core\RoutesSite::isActive('/contato.php') ? 'active-link' : '' ?> font-link-nav text-white">Contato</a>
            </nav>
            <div class="d-flex">
                <a href="<?= $base_url; ?>fale-conosco.php" class="font-link-nav-btn me-3 bg-white text-dark py-2 px-4 rounded">Fale Conosco</a>
                <a href="<?= $contatos['area_cliente']; ?>" class="font-link-nav-btn bg-1 text-0 py-2 px-4 rounded">Área do cliente</a>
            </div>
        </div>
        <!-- nav desktop -->

        <!-- toggler -->
        <button onclick="menu()" id="toggler">
            <img style="width: 45px;" src='<?= $base_url ?>assets/imagens/site/toggler.png'>
        </button>
        <!-- toggler -->

    </div>

</div>

<script src="<?= $base_url; ?>modulos/menu/js/app.js"></script>