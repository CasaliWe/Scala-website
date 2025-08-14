<style>
    #container-content-fale-conosco{
        width: 75% !important;
    }

    @media(max-width:992px){
        #container-content-fale-conosco{
            width: 100% !important;
        }
    }
</style>

<section class="py-5">
    <div class="container mx-auto py-5 mt-5">
        <div id="container-content-fale-conosco" class="mx-lg-auto mt-0 pt-0 mt-lg-3 pt-lg-3 row px-4 px-lg-0">

            <div class="mb-4 mb-lg-0 col-12 col-lg-5">
                <img src='<?= $base_url ?>assets/imagens/site/icone-scala.png' style="width: 45px;">
                <h2 class="text-0 fw-bold mt-3 mb-2">Cadastre a sua <br> empresa na Scala <br> Securitizadora</h2>
                <p class="text-secondary">Preencha o formulário e nossa equipe entrará em contato para entender o perfil da sua empresa e oferecer a melhor solução financeira.</p>
            </div>

            <div class="col-12 col-lg-7">
                <form action="<?= $base_url; ?>modulos/fale-conosco/php/enviar-email.php" onsubmit="loading()" method="post">
                    <input type="text" name="nome" required class="rounded border-site mb-3 px-4 py-3 w-100" placeholder="Seu Nome*">
                    <input type="tel" name="telefone" id="telefone" inputmode="tel" maxlength="16" required class="rounded border-site mb-3 px-4 py-3 w-100" placeholder="Seu telefone (DDD+Número)*">
                    <input type="email" name="email" required class="rounded border-site mb-3 px-4 py-3 w-100" placeholder="Seu E-mail*">
                    <input type="tel" name="cnpj" id="cnpj" required class="rounded border-site mb-3 px-4 py-3 w-100" placeholder="CNPJ da Empresa*">
                    <input type="text" name="faturamento" required class="rounded border-site mb-5 px-4 py-3 w-100" placeholder="Faturamento dos últimos 12 meses em R$*">

                    <button type="submit" style="border: none;" class="bg-1 text-0 py-3 px-5 rounded"><span class="me-2">Cadastrar</span> <img style="width: 20px; margin-top: -3px !important;" src='<?= $base_url ?>assets/imagens/site/arrow-right.png'></button>
                </form>
            </div>

        </div>
    </div>
</section>


<script>
    // Máscara para telefone: (54) 9 9153-8488
    document.getElementById('telefone').addEventListener('input', function(e) {
        let value = e.target.value.replace(/\D/g, '');
        let formatted = '';
        
        if (value.length > 0) {
            // Adiciona o parêntese de abertura e o DDD
            formatted = '(' + value.substring(0, 2);
            
            if (value.length > 2) {
                // Adiciona o parêntese de fechamento e o espaço
                formatted += ') ';
                
                // Para celular (com 9 dígitos após o DDD)
                formatted += value.substring(2, 3) + ' ' + value.substring(3, 7) + '-';
                if (value.length > 7) {
                    formatted += value.substring(7, 11);
                }
            }
        }
        
        e.target.value = formatted;
    });

    // Máscara para CNPJ: 51.573.901.0001/03
    document.getElementById('cnpj').addEventListener('input', function(e) {
        let value = e.target.value.replace(/\D/g, '');
        let formatted = '';
        
        if (value.length > 0) {
            formatted = value.substring(0, 2);
            
            if (value.length > 2) {
                formatted += '.' + value.substring(2, 5);
                
                if (value.length > 5) {
                    formatted += '.' + value.substring(5, 8);
                    
                    if (value.length > 8) {
                        formatted += '.' + value.substring(8, 12);
                        
                        if (value.length > 12) {
                            formatted += '/' + value.substring(12, 14);
                        }
                    }
                }
            }
        }
        
        e.target.value = formatted;
    });
</script>
