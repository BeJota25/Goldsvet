<link rel="stylesheet" href="/woocasino/css/appef20.css">

<header class="header">
    <div class="header__mob-container">
        <div class="header__logo">
            <a class="header__logo-link" scroll-up="" href="#">
                <img class="header__logo-img" src="/woocasino/resources/images/logo.png" alt="WooCasino">
            </a>
        </div>
        <div class="header__mob-wrp">
            <button class="header__mob-btn button button-secondary button-small ng-scope" ng-click="openModal($event, '#login-modal')">
                @lang('app.log_in')
            </button>
            <!-- Botón para abrir/cerrar el menú móvil -->
            <button class="mobile-menu2-toggle" aria-label="Toggle Mobile Menu">
                ☰
            </button>
        </div>
    </div>
    <div class="header__container">
        <div class="header__logo">
            <a class="header__logo-link" scroll-up="" href="#">
                <img class="header__logo-img" src="/woocasino/resources/images/logo.png" alt="WooCasino">
            </a>
        </div>
        <div class="header__container-bg">
            <!-- Menú para escritorio -->
            <nav class="desktop-menu" type="main-menu">
                <ul class="desktop-menu__list">
                    <li class="desktop-menu__item">
                        <a href="https://leviatan.bet/categories/nuevos?scroll=true">
                            <img src="/woocasino/categories/nuevos.png" alt="Nuevos" class="menu-icon">
                        </a>
                    </li>
                    <li class="desktop-menu__item">
                        <a href="https://leviatan.bet/categories/slots?scroll=true">
                            <img src="/woocasino/categories/slots.png" alt="Slots" class="menu-icon">
                        </a>
                    </li>
                    <li class="desktop-menu__item">
                        <a href="https://leviatan.bet/categories/ruleta?scroll=true">
                            <img src="/woocasino/categories/ruleta.png" alt="Ruleta" class="menu-icon">
                        </a>
                    </li>
                    <li class="desktop-menu__item">
                        <a href="https://leviatan.bet/categories/cartas?scroll=true">
                            <img src="/woocasino/categories/cartas.png" alt="Cartas" class="menu-icon">
                        </a>
                    </li>
                    <li class="desktop-menu__item">
                        <a href="https://leviatan.bet/categories/bingo?scroll=true">
                            <img src="/woocasino/categories/bingo.png" alt="Bingo" class="menu-icon">
                        </a>
                    </li>
                    <li class="desktop-menu__item">
                        <a href="https://leviatan.bet/categories/jackpot?scroll=true">
                            <img src="/woocasino/categories/jackpot.png" alt="Jackpot" class="menu-icon">
                        </a>
                    </li>
                    <li class="desktop-menu__item">
                        <a href="https://leviatan.bet/categories/clasicos?scroll=true">
                            <img src="/woocasino/categories/clasicos.png" alt="Clásicos" class="menu-icon">
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Menú móvil -->
    <nav class="mobile-menu2" aria-hidden="true">
        <button class="mobile-menu2-close" aria-label="Close Mobile Menu">✕</button> <!-- Botón para cerrar -->
        <ul class="mobile-menu2__list">
            <li class="mobile-menu2__item">
                <a href="https://leviatan.bet/categories/nuevos?scroll=true">
                    <img src="/woocasino/categories/nuevos.png" alt="Nuevos" class="mobile-menu2__icon">
                </a>
            </li>
            <li class="mobile-menu2__item">
                <a href="https://leviatan.bet/categories/slots?scroll=true">
                    <img src="/woocasino/categories/slots.png" alt="Slots" class="mobile-menu2__icon">
                </a>
            </li>
            <li class="mobile-menu2__item">
                <a href="https://leviatan.bet/categories/ruleta?scroll=true">
                    <img src="/woocasino/categories/ruleta.png" alt="Ruleta" class="mobile-menu2__icon">
                </a>
            </li>
            <li class="mobile-menu2__item">
                <a href="https://leviatan.bet/categories/cartas?scroll=true">
                    <img src="/woocasino/categories/cartas.png" alt="Cartas" class="mobile-menu2__icon">
                </a>
            </li>
            <li class="mobile-menu2__item">
                <a href="https://leviatan.bet/categories/bingo?scroll=true">
                    <img src="/woocasino/categories/bingo.png" alt="Bingo" class="mobile-menu2__icon">
                </a>
            </li>
            <li class="mobile-menu2__item">
                <a href="https://leviatan.bet/categories/jackpot?scroll=true">
                    <img src="/woocasino/categories/jackpot.png" alt="Jackpot" class="mobile-menu2__icon">
                </a>
            </li>
            <li class="mobile-menu2__item">
                <a href="https://leviatan.bet/categories/clasicos?scroll=true">
                    <img src="/woocasino/categories/clasicos.png" alt="Clásicos" class="mobile-menu2__icon">
                </a>
            </li>
        </ul>
    </nav>
</header>

<!-- Estilos CSS -->
<style>
/* Estilos para el menú móvil */
.mobile-menu2 {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #1c1d27;
    z-index: 1000;
    padding-top: 60px;
    overflow-y: auto;
    transition: all 0.3s ease-in-out;
}

/* Mostrar el menú móvil cuando esté abierto */
.body-mobile-menu-open .mobile-menu2 {
    display: block;
    opacity: 1;
}

.mobile-menu2[aria-hidden="true"] {
    opacity: 0;
    visibility: hidden;
}

/* Botón para cerrar el menú móvil */
.mobile-menu2-close {
    position: absolute;
    top: 10px;
    right: 10px;
    background: none;
    border: none;
    font-size: 24px;
    color: white;
    cursor: pointer;
}

/* Opciones del menú móvil */
.mobile-menu2__list {
    list-style: none;
    padding: 0;
    margin: 0;
    text-align: center;
}

.mobile-menu2__item {
    margin-bottom: 20px;
}

.mobile-menu2__icon {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    object-fit: cover;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.mobile-menu2__icon:hover {
    transform: scale(1.2);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
}
</style>

<!-- JavaScript -->
<script>
const toggleButton2 = document.querySelector('.mobile-menu2-toggle');
const closeButton2 = document.querySelector('.mobile-menu2-close');
const mobileMenu2 = document.querySelector('.mobile-menu2');

// Abrir el menú móvil
toggleButton2.addEventListener('click', function () {
    document.body.classList.toggle('body-mobile-menu-open');
    const isOpen = document.body.classList.contains('body-mobile-menu-open');
    mobileMenu2.setAttribute('aria-hidden', !isOpen);
});

// Cerrar el menú móvil
closeButton2.addEventListener('click', function () {
    document.body.classList.remove('body-mobile-menu-open');
    mobileMenu2.setAttribute('aria-hidden', true);
});

// Cerrar el menú si el usuario hace clic fuera de él
document.addEventListener('click', function (event) {
    if (!event.target.closest('.mobile-menu2') && !event.target.closest('.mobile-menu2-toggle')) {
        document.body.classList.remove('body-mobile-menu-open');
        mobileMenu2.setAttribute('aria-hidden', true);
    }
});
</script>

