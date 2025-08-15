<style>
    .container-banner{
        width: 100%;
    }
    @media(max-width:992px){
        .container-banner{
            width: 800px !important;
        }
    }



    .container-desktop-banner{
        width: 70%;
        height: 60px;
    }
    .container-desktop-banner img{
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    .container-mobile-banner{
        width: 30%;
        height: 60px;
    }
    .container-mobile-banner img{
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }


    .btn-edit-banner{
        background-color: transparent;
        border: none;
        cursor: pointer;
    }


    @media(min-width:1500px){
        .container-desktop-banner{
            width: 50%;
            height: 60px;
        }
    }
</style>


<p class="mb-5 small">Nesta sessão você pode atualizar os <strong>banners mobile e desktop</strong> do seu site!</p>

<!-- banner home -->
<section class="w-100 mb-5 pb-4" style="overflow-x: auto;">
    <h6 class="mb-3">Atualizar banner e título da página Home</h6>

    <!-- header -->
    <div class="container-banner row py-3">
        <div class="small col-2 fw-bold align-self-center">BANNER</div>
        <div class="small col-3 fw-bold align-self-center">DESKTOP</div>
        <div class="small col-3 fw-bold align-self-center">MOBILE</div>
        <div class="small col-2 fw-bold align-self-center">VISUALIZAR</div>
        <div class="small col-2 fw-bold text-end align-self-center">AÇÕES</div>
    </div>
    <!-- header -->
         
    <!-- content -->
    <div class="container-banner row py-4 border-top border-bottom">
        <div class="col-2 align-self-center">*</div>
        <div class="col-3 align-self-center"> <div class="container-desktop-banner"> <img src="<?php echo $base_url ?>assets/imagens/arquivos/banners/<?= $banners[0]['banner_home_desktop']; ?>"> </div> </div>
        <div class="col-3 align-self-center"> <div class="container-mobile-banner"> <img src="<?php echo $base_url ?>assets/imagens/arquivos/banners/<?= $banners[0]['banner_home_mobile']; ?>"> </div> </div>
        <div class="col-2 align-self-center"> <a href="../index.php" target="_blank">Ver no site</a> </div>
        <div class="col-2 text-end align-self-center"> <button class="btn-edit-banner" onclick="inserirIdModalAddBanner('banner_home_desktop','banner_home_mobile', '<?= $banners[0]['banner_home_desktop']; ?>', '<?= $banners[0]['banner_home_mobile']; ?>', 'Home')" data-bs-toggle="modal" data-bs-target="#modalBanner"><i class="fas fa-edit fs-3"></i></button> </div>
    </div>
    <!-- content -->

    <!-- titulo -->
    <form class="d-flex mt-4" action="<?= $base_url; ?>modulos-admin/contents/banners/php/salvar-title.php" method="post" onsubmit="loading()">
        <input type="hidden" name="ref" value="title_banner_home">
        <input type="text" name="title" class="form-control py-2 me-3" value="<?= $banners[0]['title_banner_home']; ?>" placeholder="Título do Banner" required>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
    <!-- titulo -->
</section>
<!-- banner home -->



<!-- banner empresa -->
<section class="w-100 mb-5 pb-4" style="overflow-x: auto;">
    <h6 class="mb-3">Atualizar banner e título da página Empresa</h6>

    <!-- header -->
    <div class="container-banner row py-3">
        <div class="small col-2 fw-bold align-self-center">BANNER</div>
        <div class="small col-3 fw-bold align-self-center">DESKTOP</div>
        <div class="small col-3 fw-bold align-self-center">MOBILE</div>
        <div class="small col-2 fw-bold align-self-center">VISUALIZAR</div>
        <div class="small col-2 fw-bold text-end align-self-center">AÇÕES</div>
    </div>
    <!-- header -->
         
    <!-- content -->
    <div class="container-banner row py-4 border-top border-bottom">
        <div class="col-2 align-self-center">*</div>
        <div class="col-3 align-self-center"> <div class="container-desktop-banner"> <img src="<?php echo $base_url ?>assets/imagens/arquivos/banners/<?= $banners[0]['banner_empresa_desktop']; ?>"> </div> </div>
        <div class="col-3 align-self-center"> <div class="container-mobile-banner"> <img src="<?php echo $base_url ?>assets/imagens/arquivos/banners/<?= $banners[0]['banner_empresa_mobile']; ?>"> </div> </div>
        <div class="col-2 align-self-center"> <a href="../empresa.php" target="_blank">Ver no site</a> </div>
        <div class="col-2 text-end align-self-center"> <button class="btn-edit-banner" onclick="inserirIdModalAddBanner('banner_empresa_desktop','banner_empresa_mobile', '<?= $banners[0]['banner_empresa_desktop']; ?>', '<?= $banners[0]['banner_empresa_mobile']; ?>', 'Empresa')" data-bs-toggle="modal" data-bs-target="#modalBanner"><i class="fas fa-edit fs-3"></i></button> </div>
    </div>
    <!-- content -->

    <!-- titulo -->
    <form class="d-flex mt-4" action="<?= $base_url; ?>modulos-admin/contents/banners/php/salvar-title.php" method="post" onsubmit="loading()">
        <input type="hidden" name="ref" value="title_banner_empresa">
        <input type="text" name="title" class="form-control py-2 me-3" value="<?= $banners[0]['title_banner_empresa']; ?>" placeholder="Título do Banner" required>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
    <!-- titulo -->
</section>
<!-- banner empresa -->




<script>
    //inserindo ids banner mobile e desktop dinâmico
    function inserirIdModalAddBanner(refDesktop, refMobile, nomeDesktop, nomeMobile, pag){
        document.getElementById("pagina-banner").textContent = `Atualizar banner ${pag}`
        document.getElementById("refBannerDesktop").value = refDesktop
        document.getElementById("refBannerMobile").value = refMobile
        document.getElementById("nomeBannerDesktop").value = nomeDesktop
        document.getElementById("nomeBannerMobile").value = nomeMobile
    }
</script>