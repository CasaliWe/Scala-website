<style>
    #banner-empresa{
       background-image: url('<?= $base_url ?>assets/imagens/site/banner-empresa-desktop.png');
       background-size: cover;
       background-position: center;
       background-repeat: no-repeat;
       height: 70vh;
       width: 100%;
    }

    #title-banner-empresa{
        font-size: 50px;
        width: 50%;
    }

    @media(min-width:1500px) {
        #banner-empresa{
            height: 65vh;
        }

        #title-banner-empresa{
            font-size: 65px;
            width: 60%;
        }
    }
    
    @media(max-width:992px) {
        #banner-empresa{
            background-image: url('<?= $base_url ?>assets/imagens/site/banner-empresa-mobile.png');
            height: 90vh;
        }

        #title-banner-empresa{
            font-size: 30px;
            width: 95%;
        }
    }
</style>



<section id="banner-empresa" class="d-flex align-items-end align-items-lg-center justify-content-center">
    <div class="container mx-auto px-4 px-lg-0 mb-5 mb-lg-0 pb-4 pb-lg-0">
        <h1 class="mb-3 mb-lg-4 text-white" id="title-banner-empresa">Soluções que conectam liquidez, confiança e crescimento.</h1>
    </div>
</section>

