<style>
    .text-missao{
        position: relative;
        line-height: 1.2;
        max-height: calc(1.2em * 7);
        min-height: calc(1.2em * 7);
        overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 7;
        text-overflow: ellipsis;
    }

    @media(min-width:1500px) {
        .text-missao{
            position: relative;
            line-height: 1.2;
            max-height: calc(1.2em * 6);
            min-height: calc(1.2em * 6);
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 6;
            text-overflow: ellipsis;
        }
    }
    
    @media(max-width:992px) {
        .text-missao{
            position: relative;
            line-height: 1.2;
            max-height: calc(1.2em * 5);
            min-height: calc(1.2em * 5);
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 5;
            text-overflow: ellipsis;
        }
    }
</style>

<section class="py-5 bg-white">
    <div class="container px-4 px-lg-0 mx-auto py-5">
        <h2 <?= $anima_scroll; ?> class="text-0 display-4 text-center fw-bold">NOSSOS PRINCÍPIOS, NOSSA BASE.</h2>
        <P <?= $anima_scroll; ?> class="text-center text-2 fs-5">Guiados por ética, solidez e foco em resultados, atuamos com <br> valores que sustentam cada decisão e relacionamento.</P>

        <div class="row mt-5">

            <div <?= $anima_scroll; ?> class="mb-4 mb-lg-0 col-12 col-lg-3 px-3">
                <div class="rounded border-site py-4 text-center">
                    <img src='<?= $base_url ?>assets/imagens/site/missao.png'>
                    <h5 class="text-0 fw-bold mt-3 mb-4">Missão</h5>
                    <p class="text-missao text-0 px-4">Viabilizar acesso ao capital por meio de soluções de securitização estruturadas com ética, inovação e segurança.</p>
                </div>
            </div>

            <div <?= $anima_scroll; ?> class="mb-4 mb-lg-0 col-12 col-lg-3 px-3">
                <div class="rounded border-site py-4 text-center">
                    <img src='<?= $base_url ?>assets/imagens/site/visao.png'>
                    <h5 class="text-0 fw-bold mt-3 mb-4">Visão</h5>
                    <p class="text-missao text-0 px-4">Ser referência nacional em soluções de securitização, contribuindo para o desenvolvimento sustentável do mercado financeiro.</p>
                </div>
            </div>

            <div <?= $anima_scroll; ?> class="mb-4 mb-lg-0 col-12 col-lg-3 px-3">
                <div class="rounded border-site py-4 text-center">
                    <img src='<?= $base_url ?>assets/imagens/site/valores.png'>
                    <h5 class="text-0 fw-bold mt-3 mb-4">Valores</h5>
                    <p class="text-missao text-0 px-4">Transparência ,Comprometimento, Integridade, Inovação, Solidez e Foco no cliente.</p>
                </div>
            </div>

            <div <?= $anima_scroll; ?> class="col-12 col-lg-3 px-3">
                <div class="rounded border-site py-4 text-center">
                    <img src='<?= $base_url ?>assets/imagens/site/compromisso.png'>
                    <h5 class="text-0 fw-bold mt-3 mb-4">Compromisso</h5>
                    <p class="text-missao text-0 px-4">Atuar com responsabilidade em cada operação, promovendo confiança mútua com clientes, parceiros e investidores.</p>
                </div>
            </div>

        </div>
    </div>
</section>
