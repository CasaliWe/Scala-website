<style>
    #banner-inicial{
       background-image: url('<?= $base_url ?>assets/imagens/site/banner-desktop.png');
       background-size: cover;
       background-position: center;
       background-repeat: no-repeat;
       height: 90vh;
       width: 100%;
    }

    #title-banner-inicial{
        font-size: 50px;
        width: 50%;
    }

    #btn-conheca-scala{
        font-size: 16px;
        margin-top: 20px;
        display: inline-block;
    }

    @media(min-width:1500px) {
        #banner-inicial{
            height: 80vh;
        }

        #title-banner-inicial{
            font-size: 65px;
            width: 60%;
        }
        
        #btn-conheca-scala{
            font-size: 20px;
            margin-top: 25px;
            display: inline-block;
        }
    }
    
    @media(max-width:992px) {
        #banner-inicial{
            background-image: url('<?= $base_url ?>assets/imagens/site/banner-mobile.png');
            height: 90vh;
        }

        #title-banner-inicial{
            font-size: 30px;
            width: 95%;
        }

        #btn-conheca-scala{
            font-size: 14px;
            margin-top: 10px;
            display: inline-block;
        }
    }
</style>



<section id="banner-inicial" class="d-flex align-items-end align-items-lg-center justify-content-center">
    <div class="container mx-auto px-4 px-lg-0 mb-5 mb-lg-0 pb-4 pb-lg-0">
        <h1 <?= $anima_scroll; ?> class="mb-3 mb-lg-4 text-white" id="title-banner-inicial">Segurança para transformar seu capital em oportunidades.</h1>
        <a <?= $anima_scroll; ?> id="btn-conheca-scala" href="<?= $base_url; ?>empresa.php" class="bg-1 fw-semibold text-0 rounded px-4 py-2"><span class="me-2">Conheça a Scala </span><img style="width: 20px; margin-top: -3px;" src='<?= $base_url ?>assets/imagens/site/arrow-right.png'></a>
    </div>
</section>

