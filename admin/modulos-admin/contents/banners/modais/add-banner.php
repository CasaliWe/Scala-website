<div class="modal fade" id="modalBanner" tabindex="-1" aria-labelledby="modalBanner" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="pagina-banner"> </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form onsubmit="loading()" action="modulos-admin/contents/banners/php/atualizar-banner.php" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <!-- ref inserido pelo js -->
            <input type="hidden" name="refBannerDesktop" id="refBannerDesktop">
            <input type="hidden" name="refBannerMobile" id="refBannerMobile">
            <input type="hidden" name="nomeBannerDesktop" id="nomeBannerDesktop">
            <input type="hidden" name="nomeBannerMobile" id="nomeBannerMobile">
            <!-- ref inserido pelo js -->

            <div class="mb-4">
                <label for="desktop-banner">Desktop* (1920x1080 - Máx 5mb)</label>
                <input type="file" id="desktop-banner" name="desktop" required class="form-control">
            </div>

            <div class="mb-4">
                <label for="mobile-banner">Mobile* (400x700 - Máx 5mb)</label>
                <input type="file" id="mobile-banner" name="mobile" required class="form-control">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-primary">Atualizar</button>
          </div>
      </form>
    </div>
  </div>
</div>


<script>
  // Validação de arquivo para desktop
  document.getElementById('desktop-banner').addEventListener('change', function(e) {
    validarArquivo(e.target, 'desktop');
  });
  
  // Validação de arquivo para mobile
  document.getElementById('mobile-banner').addEventListener('change', function(e) {
    validarArquivo(e.target, 'mobile');
  });
  
  function validarArquivo(input, tipo) {
    const arquivo = input.files[0];
    
    if (!arquivo) return;
    
    // Verificar formato do arquivo
    const formatosPermitidos = ['image/png', 'image/jpeg', 'image/jpg'];
    const extensoesPermitidas = ['.png', '.jpg', '.jpeg'];
    
    const nomeArquivo = arquivo.name.toLowerCase();
    const extensaoValida = extensoesPermitidas.some(ext => nomeArquivo.endsWith(ext));
    
    if (!formatosPermitidos.includes(arquivo.type) || !extensaoValida) {
      alert('Formato de arquivo não permitido. Apenas PNG, JPEG e JPG são aceitos.');
      input.value = '';
      return;
    }
    
    // Verificar tamanho do arquivo (5MB = 5 * 1024 * 1024 bytes)
    const tamanhoMaximo = 5 * 1024 * 1024;
    
    if (arquivo.size > tamanhoMaximo) {
      alert('Arquivo muito grande. O tamanho máximo permitido é 5MB.');
      input.value = '';
      return;
    }
  }
</script>