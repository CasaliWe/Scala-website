<nav class="d-flex flex-column w-100 mt-5 pt-5 mt-lg-0 pt-lg-0">
    <a href="dashboard.php" class="link-nav-desktop <?= \Core\RoutesAdmin::isActive('dashboard') ?>">Contatos | Endereço</a>
    <a href="banners.php" class="link-nav-desktop <?= \Core\RoutesAdmin::isActive('banners') ?>">Banners</a>
    <a href="solucoes.php" class="link-nav-desktop <?= \Core\RoutesAdmin::isActive('solucoes') ?>">Soluções</a>
    <a href="textos-empresa.php" class="link-nav-desktop <?= \Core\RoutesAdmin::isActive('textos-empresa') ?>">Textos página Empresa</a>
    <a href="servicos.php" class="link-nav-desktop <?= \Core\RoutesAdmin::isActive('Serviços') ?>">Serviços</a>
    <a class="link-nav-desktop"><?php include __DIR__ . "/../../btn-logout/index.php"; ?></a>
</nav>