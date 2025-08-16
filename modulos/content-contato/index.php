<section class="py-5">
    <div class="container px-4 px-lg-0 mx-auto py-5 mt-4">
        <h1 class="display-5 text-center fw-bold text-0 mb-2">Fale com a Scala</h1>
        <p class="text-center text-secondary">Tire dúvidas, envie uma mensagem ou entre em contato direto com nosso time.</p>

        <div class="mt-5 row">
            <div class="mb-5 mb-lg-0 col-12 col-lg-6 px-4">
                <div class="text-center text-lg-start d-flex flex-column rounded bg-0 text-white w-100 p-5">
                    <h2 <?= $anima_scroll; ?> class="fw-semibold mb-3">Informações de Contato</h2>
                    <p <?= $anima_scroll; ?> class="mb-5" style="color: #C9C9C9;">Converse com nossa equipe</p>

                    <a <?= $anima_scroll; ?> href="tel:<?= $contatos['telefone']; ?>" target="_blank" class="mb-3 text-white"><img style="width: 20px;" class="me-2" src='<?= $base_url ?>assets/imagens/site/phone.png'> <?= $contatos['telefone']; ?></a>
                    <a <?= $anima_scroll; ?> href="mailto:<?= $contatos['email']; ?>" target="_blank" class="mb-3 text-white"><img style="width: 20px;" class="me-2" src='<?= $base_url ?>assets/imagens/site/email.png'> <?= $contatos['email']; ?></a>
                    <a  <?= $anima_scroll; ?>href="" target="_blank" class="mb-3 text-white"><img style="width: 20px;" class="me-2" src='<?= $base_url ?>assets/imagens/site/localizacao.png'> <?= $endereco['endereco']; ?> - <?= $endereco['bairro']; ?>, <?= $endereco['cidade']; ?> – <?= $endereco['estado']; ?></a>

                    <div class="mt-5 d-flex justify-content-center justify-content-lg-start">
                        <a <?= $anima_scroll; ?> href="<?= $contatos['instagram']; ?>" target="_blank" class="me-3"><img style="width: 35px;" src='<?= $base_url ?>assets/imagens/site/instagram.png'></a>
                        <a <?= $anima_scroll; ?> href="<?= $contatos['linkedin']; ?>" target="_blank"><img style="width: 35px;" src='<?= $base_url ?>assets/imagens/site/linkedin.png'></a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 px-4">
                <p <?= $anima_scroll; ?> class="mb-3 text-secondary">A Scala Securitizadora atua com transparência e proximidade. Nossa equipe está disponível para entender suas necessidades e orientar você com clareza em cada etapa.</p>

                <div <?= $anima_scroll; ?> class="rounded mb-5 overflow-hidden" style="height: 280px;">
                    <iframe src="<?= $endereco['maps']; ?>" class="w-100 h-100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <a <?= $anima_scroll; ?> href="<?= $endereco['link_maps']; ?>" target="_blank" class="rounded bg-1 text-0 py-3 px-4"><span class="me-2">Acessa Mapa</span> <img style="width: 20px; margin-top: -3px !important;" src='<?= $base_url ?>assets/imagens/site/arrow-right.png'></a>
            </div>
        </div>
    </div>
</section>
