<div class="modal fade" id="add-servico" tabindex="-1" aria-labelledby="add-servico" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Adicionar Serviço</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= $base_url; ?>modulos-admin/contents/servicos/php/add-servico.php" onsubmit="loading()" method="post">
          <div class="modal-body">
             <div class='mb-3'>
               <label for='titulo' class="small fw-semibold">Título do serviço</label>
               <input type='text' id='titulo' name='titulo' placeholder='EX: Para sua empresa' class='form-control' required>
             </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-primary">Criar</button>
          </div>
      </form>
    </div>
  </div>
</div>