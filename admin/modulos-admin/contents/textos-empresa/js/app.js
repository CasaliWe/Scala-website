// Funções JavaScript para o módulo Textos página Empresa

$(document).ready(function() {
    // Inicializar Summernote
    $('#summernote').summernote({
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
                // Bloquear upload de imagens
                alert('Upload de imagens não permitido neste editor.');
            }
        }
    });
    
    // Configurar formulário
    $('#form-textos-empresa').on('submit', function(e) {
        const conteudo = $('#summernote').summernote('code');
        
        if (!conteudo.trim() || conteudo === '<p><br></p>') {
            e.preventDefault();
            alert('Por favor, preencha o conteúdo.');
            $('#summernote').summernote('focus');
            return false;
        }
        
        // Se chegou até aqui, permite o envio do formulário
        return true;
    });
});

// Função para limpar formulário
function limparFormulario() {
    if (confirm('Tem certeza que deseja limpar todo o formulário?')) {
        $('#summernote').summernote('code', '<p>Digite aqui o conteúdo da página empresa...</p>');
        $('#summernote').summernote('focus');
    }
}

// Função para obter conteúdo do editor
function obterConteudo() {
    return $('#summernote').summernote('code');
}

// Função para definir conteúdo do editor
function definirConteudo(html) {
    $('#summernote').summernote('code', html);
}