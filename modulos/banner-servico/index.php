<style>
    #banner-servico{
       background-image: url('<?= $base_url ?>assets/imagens/site/banner-servico-desktop.png');
       background-size: cover;
       background-position: center;
       background-repeat: no-repeat;
       height: 70vh;
       width: 100%;
    }

    #title-banner-servico{
        font-size: 50px;
        width: 50%;
    }

    @media(min-width:1500px) {
        #banner-servico{
            height: 65vh;
        }

        #title-banner-servico{
            font-size: 65px;
            width: 60%;
        }
    }
    
    @media(max-width:992px) {
        #banner-servico{
            background-image: url('<?= $base_url ?>assets/imagens/site/banner-servico-mobile.png');
            height: 90vh;
        }

        #title-banner-servico{
            font-size: 30px;
            width: 95%;
        }
    }
</style>



<section id="banner-servico" class="d-flex align-items-end align-items-lg-center justify-content-center">
    <div class="container mx-auto px-4 px-lg-0 mb-5 mb-lg-0 pb-4 pb-lg-0">
        <h1 <?= $anima_scroll; ?> class="mb-3 mb-lg-4 text-white" id="title-banner-servico">Antecipe capital. Potencialize seu negócio.</h1>
    </div>
</section>

