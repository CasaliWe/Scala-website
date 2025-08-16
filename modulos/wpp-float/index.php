<style>
    #wpp-float{
        position: fixed;
        bottom: 3%;
        right: 3%;
        width: 60px;
        height: 60px;
        z-index: 5;
    }
    #wpp-float img{
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    @media(min-width:1500px) {
        #wpp-float{
            bottom: 3%;
            right: 3%;
            width: 90px;
            height: 90px;
        }
    }
    
    @media(max-width:992px) {
        #wpp-float{
            bottom: 2%;
            right: 3%;
            width: 50px;
            height: 50px;
        }
    }
</style>


<div id="wpp-float">
    <a href="https://wa.me/<?= preg_replace("/[^0-9]/", "", $contatos['wpp']); ?>" target="_blank"><img src='<?= $base_url ?>assets/imagens/site/wpp-float.png'></a>
</div>

