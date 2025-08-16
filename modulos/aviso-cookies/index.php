<!-- AVISO DE COOKIES -->
<div id="cookie-banner" class="cookie-banner">
    <div class="cookie-content">
        <div class="cookie-text">
            <h5 class="cookie-title">🍪 Utilizamos cookies</h5>
            <p class="cookie-description">
                Este site utiliza cookies para melhorar sua experiência de navegação e oferecer conteúdo personalizado. 
                Ao continuar navegando, você concorda com nossa política de cookies.
            </p>
        </div>
        <div class="cookie-actions">
            <button id="accept-cookies" class="btn-accept">Fechar e Continuar</button>
        </div>
    </div>
</div>

<style>
.cookie-banner {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(135deg, #000F4F 0%, #00051B 100%);
    color: white;
    padding: 20px;
    box-shadow: 0 -4px 20px rgba(0, 0, 0, 0.3);
    z-index: 9999;
    transform: translateY(100%);
    transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    border-top: 3px solid #31C5FF;
}

.cookie-banner.show {
    transform: translateY(0);
}

.cookie-content {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
}

.cookie-text {
    flex: 1;
    min-width: 300px;
}

.cookie-title {
    margin: 0 0 8px 0;
    font-size: 1.2rem;
    font-weight: 600;
    color: #31C5FF;
}

.cookie-description {
    margin: 0;
    font-size: 0.95rem;
    line-height: 1.5;
    opacity: 0.9;
}

.cookie-actions {
    flex-shrink: 0;
}

.btn-accept {
    background: #31C5FF;
    color: #000F4F;
    border: none;
    padding: 12px 24px;
    border-radius: 25px;
    font-weight: 600;
    font-size: 0.95rem;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(49, 197, 255, 0.3);
}

.btn-accept:hover {
    background: #00B8E6;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(49, 197, 255, 0.4);
}

.btn-accept:active {
    transform: translateY(0);
}

/* Responsivo */
@media (max-width: 768px) {
    .cookie-banner {
        padding: 16px;
    }
    
    .cookie-content {
        flex-direction: column;
        text-align: center;
        gap: 16px;
    }
    
    .cookie-title {
        font-size: 1.1rem;
    }
    
    .cookie-description {
        font-size: 0.9rem;
    }
    
    .btn-accept {
        padding: 10px 20px;
        font-size: 0.9rem;
        width: 100%;
        max-width: 250px;
    }
}

@media (max-width: 480px) {
    .cookie-banner {
        padding: 12px;
    }
    
    .cookie-title {
        font-size: 1rem;
    }
    
    .cookie-description {
        font-size: 0.85rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const COOKIE_ACCEPTED_KEY = 'scala_cookies_accepted';
    const cookieBanner = document.getElementById('cookie-banner');
    const acceptButton = document.getElementById('accept-cookies');
    
    // Função para verificar se os cookies já foram aceitos
    function isCookieAccepted() {
        return localStorage.getItem(COOKIE_ACCEPTED_KEY) === 'true';
    }
    
    // Função para marcar cookies como aceitos
    function acceptCookies() {
        localStorage.setItem(COOKIE_ACCEPTED_KEY, 'true');
        hideCookieBanner();
    }
    
    // Função para mostrar o banner de cookies
    function showCookieBanner() {
        setTimeout(() => {
            cookieBanner.classList.add('show');
        }, 1000); // Delay de 1 segundo para melhor UX
    }
    
    // Função para esconder o banner de cookies
    function hideCookieBanner() {
        cookieBanner.classList.remove('show');
        setTimeout(() => {
            cookieBanner.style.display = 'none';
        }, 400); // Aguarda a animação terminar
    }
    
    // Event listener para o botão de aceitar
    acceptButton.addEventListener('click', function(e) {
        e.preventDefault();
        acceptCookies();
    });
    
    // Inicialização
    function init() {
        if (!isCookieAccepted()) {
            showCookieBanner();
        } else {
            cookieBanner.style.display = 'none';
        }
    }
    
    // Iniciar o módulo
    init();
    
    // Função global para resetar (útil para testes)
    window.resetCookieConsent = function() {
        localStorage.removeItem(COOKIE_ACCEPTED_KEY);
        location.reload();
    };
});
</script>
