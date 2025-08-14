<style>
    /* Mostrar paginação apenas em dispositivos móveis */
    @media (min-width: 992px) {
        .swiper-pagination {
            display: none;
        }
    }
    
    /* Adicionar espaço extra no mobile para os indicadores */
    @media (max-width: 991px) {
        section.bg-2 {
            padding-bottom: 3rem !important;
        }
    }
    
    /* Personalização dos bullets */
    .swiper-pagination {
        position: relative;
        bottom: -25px;
        margin-top: 20px;
    }
    
    .swiper-pagination-bullet {
        width: 10px;
        height: 10px;
        margin: 0 5px;
        background-color: #ffffff;
        opacity: 0.7;
    }
    
    .swiper-pagination-bullet-active {
        opacity: 1;
    }
</style>


<section class="py-5 bg-2">

    <h1 class="d-none">Nossas soluções</h1>

    <div class="container mx-auto py-5 pb-md-2">
        <h4 <?= $anima_scroll; ?> class="text-center mb-2 text-1">A Scala</h4>
        <h2 <?= $anima_scroll; ?> class="text-center text-white mb-5 pb-4 display-3 fw-bold">SOLUÇÕES FINANCEIRAS</h2>

        <div <?= $anima_scroll; ?> class="swiper">
            <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="container-solucao text-center px-3">
                            <div class="px-5"><img class="w-75" src='<?= $base_url ?>assets/imagens/site/solucoes-1.png'></div>
                            <h4 class="fw-semibold mb-4 mt-3 text-white">A Scala é</h4>
                            <p class="text-white">Especialista em securitização e estruturação de soluções financeiras sob medida.</p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="container-solucao text-center px-3">
                            <div class="px-5"><img class="w-75" src='<?= $base_url ?>assets/imagens/site/solucoes-2.png'></div>
                            <h4 class="fw-semibold mb-4 mt-3 text-white">A Scala faz</h4>
                            <p class="text-white">Transformamos ativos em oportunidades por meio de processos sólidos e seguros.</p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="container-solucao text-center px-3">
                            <div class="px-5"><img class="w-75" src='<?= $base_url ?>assets/imagens/site/solucoes-3.png'></div>
                            <h4 class="fw-semibold mb-4 mt-3 text-white">Para quem</h4>
                            <p class="text-white">Empresas, investidores e originadores que buscam eficiência e crescimento.</p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="container-solucao text-center px-3">
                            <div class="px-5"><img class="w-75" src='<?= $base_url ?>assets/imagens/site/solucoes-4.png'></div>
                            <h4 class="fw-semibold mb-4 mt-3 text-white">Onde estamos</h4>
                            <p class="text-white">Atuação nacional com presença estratégica nos principais centros financeiros.</p>
                        </div>
                    </div>

            </div>
            <!-- Adiciona a paginação apenas para mobile -->
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section>



<script src="<?= $base_url; ?>assets/utils/swiper/swiper.js"></script>
<script>
    const swiper = new Swiper('.swiper', {
        slidesPerView: 1, 
        spaceBetween: 3, 
        autoplay: {
            delay: 4000, 
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            bulletClass: 'swiper-pagination-bullet',
            bulletActiveClass: 'swiper-pagination-bullet-active bg-1',
        },
        breakpoints: {
            992: {
                slidesPerView: 4, 
            },
        },
        loop: true,
    });
</script>