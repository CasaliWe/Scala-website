<!-- Summernote CSS -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

<style>
    .container-preview-img{
        width: 70px;
        height: 40px;
        overflow: hidden;
    }
    .container-preview-img img{
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    /* summer note */
    .note-editor {
        border: 1px solid #dee2e6;
        border-radius: 0.375rem;
    }
    
    .note-toolbar {
        background-color: #f8f9fa;
        border-bottom: 1px solid #dee2e6;
        padding: 0.5rem;
    }
    
    .note-editable {
        padding: 1rem;
        min-height: 300px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        font-size: 14px;
        line-height: 1.6;
    }
</style>



<section>
    <p class="mb-4 small">Sessão destinada para <strong>Serviços</strong></p>

    <button type="button" class="mb-5 btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#add-servico">Adicionar Serviço</button>

    <!-- loop serviços -->
    <?php foreach ($servicos as $key => $servico) { ?>
        <div class="mb-4 item-acordion accordion">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#servico-<?= $servico['id']; ?>" aria-expanded="false" aria-controls="servico-<?= $servico['id']; ?>">
                        <?= $servico['titulo']; ?>
                    </button>
                </h2>
                <div id="servico-<?= $servico['id']; ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body py-4">
        
                        <form action="<?= $base_url; ?>modulos-admin/contents/servicos/php/att-infos.php" onsubmit="loading()" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $servico['id']; ?>">

                            <div class='mb-3'>
                              <label for='banner' class="small fw-semibold">Banner</label>
                              <input type='file' id='banner' name='banner' class='form-control'>
                              <div class="container-preview-img mt-2">
                                  <img src="<?= !empty($servico['banner']) ? $base_url . 'assets/imagens/arquivos/servicos/' . $servico['banner'] : $base_url . 'assets/imagens/site-admin/preview.png' ?>" alt="Prévia do Banner">
                              </div>
                            </div>

                            <div class='mb-3'>
                              <label for='titulo' class="small fw-semibold">Título (Em cima do banner)</label>
                              <input type='text' id='titulo' value="<?= $servico['title_banner']; ?>" name='titulo' class='form-control' required>
                            </div>

                            <div class='mb-3'>
                              <label for='texto-link' class="small fw-semibold">Texto do Link (Aparecerá como título do card e também no menu)</label>
                              <input type='text' id='texto-link' value="<?= $servico['titulo']; ?>" name='texto-link' class='form-control' required>
                            </div>

                            <div class='mb-3'>
                              <label for='descricao' class="small fw-semibold">Descrição breve (Aparecerá no card serviço da home)</label>
                              <input type='text' id='descricao' value="<?= $servico['descri']; ?>" name='descricao' class='form-control' required>
                            </div>

                            <div class='mb-3'>
                              <label for='thumb' class="small fw-semibold">Thumb (Aparecerá no card serviço da home)</label>
                              <input type='file' id='thumb' name='thumb' class='form-control'>
                              <div class="container-preview-img mt-2">
                                  <img src="<?= !empty($servico['thumb']) ? $base_url . 'assets/imagens/arquivos/servicos/' . $servico['thumb'] : $base_url . 'assets/imagens/site-admin/preview.png' ?>" alt="Prévia do Thumb">
                              </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </form>

                        <!-- content summer note -->
                        <div class="pt-5 mt-5 border-top">
                            <h5 class="mb-4">Editor de Conteúdo</h5>
                            <form method="post" action="<?= $base_url; ?>modulos-admin/contents/servicos/php/salvar-content-servico.php">
                                <input type="hidden" name="servico_id" value="<?= $servico['id']; ?>">
                                <div class="mb-3">
                                    <label for="conteudo-<?= $servico['id']; ?>" class="form-label">Conteúdo do Serviço</label>
                                    <textarea id="summernote-<?= $servico['id']; ?>" name="conteudo" class="form-control summernote-editor"><?= $servico['conteudo'] ?></textarea>
                                </div>
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-save me-2"></i>Salvar Conteúdo
                                </button>
                            </form>
                        </div>
                        <!-- content summer note -->

                        <!-- btn deletar -->
                        <div class="pt-5 mt-5 border-top">
                            <a href="<?= $base_url; ?>modulos-admin/contents/servicos/php/deletar-servico.php?id=<?= $servico['id']; ?>" class="btn btn-danger">Deletar serviço</a>
                        </div>
                        <!-- btn deletar -->
        
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- loop serviços -->

</section>


<!-- jQuery e Summernote JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/lang/summernote-pt-BR.min.js"></script>

<script>
    // config summer note
    $(document).ready(function() {
        // Inicializar todos os editores Summernote
        $('.summernote-editor').each(function() {
            $(this).summernote({
                lang: 'pt-BR',
                height: 400,
                minHeight: 300,
                maxHeight: 600,
                focus: false,
                toolbar: [
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link']],
                ],
                fontSizes: ['8', '9', '10', '11', '12', '14', '16', '18', '20', '24', '28', '32', '36', '48', '64', '82'],
                styleTags: [
                    'p',
                    { title: 'Título 1', tag: 'h1', className: 'fs-1' },
                    { title: 'Título 2', tag: 'h2', className: 'fs-2' },
                    { title: 'Título 3', tag: 'h3', className: 'fs-3' },
                    { title: 'Título 4', tag: 'h4', className: 'fs-4' },
                    { title: 'Título 5', tag: 'h5', className: 'fs-5' },
                    { title: 'Título 6', tag: 'h6', className: 'fs-6' }
                ],
                placeholder: 'Digite o conteúdo aqui...',
                tabsize: 2,
                dialogsInBody: true,
                callbacks: {
                    onImageUpload: function(files) {
                        alert('Upload de imagens não permitido neste editor.');
                    }
                }
            });
        });
        
        // Validação antes do envio
        $('form[action*="salvar-content-servico.php"]').on('submit', function(e) {
            var form = $(this);
            var summernoteId = form.find('.summernote-editor').attr('id');
            var conteudo = $('#' + summernoteId).summernote('code');
            
            if (!conteudo.trim() || conteudo === '<p><br></p>') {
                e.preventDefault();
                alert('Por favor, preencha o conteúdo.');
                $('#' + summernoteId).summernote('focus');
                return false;
            }
            
            return true;
        });
    });
</script>