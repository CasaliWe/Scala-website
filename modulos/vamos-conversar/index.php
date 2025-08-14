<style>
    #vamos-conversar{
        background-image: url('<?= $base_url ?>assets/imagens/site/vamos-conversar.png');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }

    #card-vamos-conversar{
        width: 40% !important;
    }

    @media(max-width:992px){
        #card-vamos-conversar{
            width: 100% !important;
        }
    }
</style>


<section class="py-5" id="vamos-conversar">
    <div class="container px-4 mx-auto py-5 d-flex align-items-center justify-content-center">

        <div <?= $anima_scroll; ?> style="background-color: #ffffffbd;" class="p-5 rounded" id="card-vamos-conversar">
            <img <?= $anima_scroll; ?> style="width: 100px;" src='<?= $base_url ?>assets/imagens/site/logo-vamos-conversar.png'>
            <h2 <?= $anima_scroll; ?> class="text-0 fw-semibold mb-2 mt-4">Vamos conversar</h2>
            <p <?= $anima_scroll; ?> class="text-0 mb-5">Fale com a equipe da Scala e encontre a melhor solução para seu perfil ou negócio.</p>
            <a <?= $anima_scroll; ?> href="<?= $base_url; ?>fale-conosco.php" class="rounded bg-1 text-0 py-3 px-5 fw-semibold">Entre em contato</a>
        </div>

    </div>
</section>

