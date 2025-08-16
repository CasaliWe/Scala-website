<style>
    .descri-preview-servicos-home{
        position: relative;
        line-height: 1.2;
        max-height: calc(1.2em * 3);
        min-height: calc(1.2em * 3);
        overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
        text-overflow: ellipsis;
    }
</style>


<section class="pt-5 bg-white">

    <h1 class="d-none">Nossos Serviços</h1>

    <div class="container mx-auto py-5 px-4 px-lg-0">
        <h2 <?= $anima_scroll; ?> class="text-0 text-center fw-bold display-4">Conheça nossos serviços</h2>
        <p <?= $anima_scroll; ?> class="text-0 text-center mb-5">Atendemos diferentes perfis com soluções sob medida.</p>

        <div class="row justify-content-center">

            <!-- loop serviços -->
             <?php foreach ($servicos as $key => $servico) { ?>
                <div <?= $anima_scroll; ?> class="mb-5 mb-lg-4 col-12 col-lg-6 px-4">
                    <div class="pb-5 rounded border overflow-hidden">
                        <div class="w-100" style="height: 280px;"><img class="w-100 h-100" style="object-fit: cover; object-position: center;" src='<?= $base_url ?>admin/assets/imagens/arquivos/servicos/<?= $servico['thumb']; ?>'></div>
                        <div class="px-4 px-lg-5 mb-4 mt-5">
                            <h1 <?= $anima_scroll; ?> class="text-dark mb-3"><?= $servico['titulo']; ?></h1>
                            <p <?= $anima_scroll; ?> class="descri-preview-servicos-home text-dark mb-5"><?= $servico['descri']; ?></p>
                            <a <?= $anima_scroll; ?> href="<?= $base_url ?>servico.php?id=<?= $servico['id']; ?>" class="py-3 px-5 bg-1 text-0 rounded"><span class="me-2">Saiba mais</span> <img style="width: 20px; margin-top: -3px !important;" src='<?= $base_url ?>assets/imagens/site/arrow-right.png'></a>
                        </div>
                    </div>
                </div>
             <?php } ?>
            <!-- loop serviços -->

        </div>
    </div>
</section>
