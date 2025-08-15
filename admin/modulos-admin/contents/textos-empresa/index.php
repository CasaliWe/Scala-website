<!-- Summernote CSS -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?= $base_url; ?>modulos-admin/contents/textos-empresa/css/style.css">

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="mb-4 small">Sessão destinada para <strong>Textos página Empresa</strong></p>
                
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Editor de Conteúdo - Página Empresa</h5>
                    </div>
                    <div class="card-body">
                        <form id="form-textos-empresa" method="post" action="<?= $base_url; ?>modulos-admin/contents/textos-empresa/php/texto-content-empresa.php">
                            <div class="mb-3">
                                <label for="conteudo" class="form-label">Conteúdo</label>
                                <textarea id="summernote" name="conteudo" class="form-control"><?= $textoContent ?></textarea>
                            </div>
                            
                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-2"></i>Salvar
                                </button>
                                <button type="button" class="btn btn-secondary" onclick="limparFormulario()">
                                    <i class="fas fa-eraser me-2"></i>Limpar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <form class="mt-5 pt-3" action="<?= $base_url; ?>modulos-admin/contents/textos-empresa/php/atualizar-mvvc.php" method="post" onsubmit="loading()">
            <div class='mb-3'>
                <label for='missao' class="small fw-semibold">Missão:</label>
                <input type='text' id='missao' value="<?= $missao; ?>" name='missao' placeholder='Texto...' class='form-control' required>
            </div>

            <div class='mb-3'>
                <label for='visao' class="small fw-semibold">Visão:</label>
                <input type='text' id='visao' value="<?= $visao; ?>" name='visao' placeholder='Texto...' class='form-control' required>
            </div>

            <div class='mb-3'>
                <label for='valores' class="small fw-semibold">Valores:</label>
                <input type='text' id='valores' value="<?= $valores; ?>" name='valores' placeholder='Texto...' class='form-control' required>
            </div>

            <div class='mb-3'>
                <label for='compromisso' class="small fw-semibold">Compromisso:</label>
                <input type='text' id='compromisso' value="<?= $compromisso; ?>" name='compromisso' placeholder='Texto...' class='form-control' required>
            </div>

            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
</section>

<!-- jQuery (necessário para Summernote) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Summernote JS -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<!-- Summernote em Português -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/lang/summernote-pt-BR.min.js"></script>

<script src="<?= $base_url; ?>modulos-admin/contents/textos-empresa/js/app.js"></script>