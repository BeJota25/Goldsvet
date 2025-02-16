<?php if(isset($_GET['merchant_id'])):?>

<div class="modal" id="restore-password-success" style="display: block;">
    <header class="modal__header">
        <div class="span modal__title"> @lang('app.pay_ok_title')</div>
        <span ng-click="closeModal($event)" class="modal__icon icon icon_cancel js-close-popup"></span>
    </header>
    <div class="modal__content">
        <div id="restore-password-success-text" class="modal-text">@lang('app.pay_ok_desk')</div>
    </div>
    <div class="popup__footer">
        <input type="submit" ng-click="openModal($event, '#my-account')" value="OK <?php echo $_GET['merchant_id']; ?>"
            class="popup__button button" />
    </div>
</div>

<script>
    history.pushState('', '', '/');
</script>
<?php endif;?>

<!-- MENU MOBILE -->
@include('frontend.partials.messages')
<!-- Games -->
 <style>
        /* Marquee  */
.marquee {
    height: 48px;
    overflow: hidden;
    position: relative;
    background: #333;
    color: #333;
    border: 1px solid #4a4a4a;


}
.image {
    /* height: 50px; */
    width: overflow: hidden;
    position: absolute;
    background: #;
    background: -moz-linear-gradient(97deg, #e6c85d 0%, #c39232 100%);
    background: -webkit-gradient(linear, 97deg, color-stop(0%, #e6c85d), color-stop(100%, #c39232));
    background: -webkit-linear-gradient(
97deg
 , #e6c85d 0%, #c39232 100%);
    background: -o-linear-gradient(97deg, #e6c85d 0%, #c39232 100%);
    background: -ms-linear-gradient(97deg, #e6c85d 0%, #c39232%);
    background: linear-gradient(
97deg
 , #e6c85d 0%, #c39232 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#001c10', endColorstr='#00673c',GradientType=0 );
    z-index: 9;
    font-size: 26px;
    padding: 7px;
    text-transform: uppercase;
}
.marquee p:nth-child {
    color:red;
    transform: translateX(-50%);
    position: absolute;
    width: 100%;
    height: 100%;
    margin: 0;
    line-height: 50px;
    text-align: center;

    animation: scroll-left 25s linear infinite;
}

.marquee p {
    position: absolute;
    width: 100%;
    height: 100%;
    margin: 0;
    line-height: 50px;
    text-align: center;color:#999999; font-family:helvetica;

    animation: scroll-left 20s linear infinite;
}

@keyframes scroll-left {
    0% {
        transform: translateX(55%);
    }
    100% {
        transform: translateX(-55%);
    }
}
    </style>
<section id="woocasino" class="carcass">
    @if (Auth::check())
        @include('frontend.Default.partials.header_logged')
    @else
        @include('frontend.Default.partials.header_not_logged')
    @endif

<!-- Sección top-bar -->
<div class="top-bar">
    <style>
        /* Estilo para la top-bar */
        .top-bar {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            background-image: url('/woocasino/bgtop.webp'); /* Imagen de fondo */
            background-size: cover; /* Asegura que la imagen cubra toda la sección */
            background-position: center; /* Centra la imagen */
            height: 100px; /* Altura de la barra */
            padding: 0 20px; /* Espaciado interno */
        }

        /* Ocultar la top-bar en dispositivos móviles */
        @media (max-width: 768px) {
            .top-bar {
                display: none !important;
            }
        }

/* Botones transparentes con borde y efecto neón */
.top-bar__content button,
.top-bar__content a {
    margin-left: 10px;
    padding: 12px 20px;
    font-size: 16px;
    font-weight: bold;
    color: #fff; /* Color del texto */
    background: transparent; /* Fondo transparente */
    border: 2px solid transparent; /* Borde inicial */
    border-image: linear-gradient(90deg, #00f0ff, #8000ff); /* Gradiente en el borde */
    border-image-slice: 1;
    border-radius: 0px; /* Esquinas redondeadas */
    cursor: pointer;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); /* Sombra tenue alrededor */
    position: relative;
    overflow: hidden; /* Para manejar el efecto interno */
    transition: box-shadow 0.3s ease, transform 0.3s ease;
}

/* Efecto hover para el borde */
.top-bar__content button:hover,
.top-bar__content a:hover {
    transform: translateY(-3px); /* Elevación al pasar el mouse */
    box-shadow: 0 0 25px #00f0ff, 0 0 50px #8000ff; /* Brillo neón */
}

/* Efecto activo (clic) */
.top-bar__content button:active,
.top-bar__content a:active {
    transform: translateY(2px); /* Aplastamiento al hacer clic */
    box-shadow: 0 0 10px #00f0ff, 0 0 20px #8000ff; /* Menor brillo */
}

/* Efecto neón animado dentro del botón */
.top-bar__content button::before,
.top-bar__content a::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: linear-gradient(60deg, rgba(0, 240, 255, 0.2), rgba(128, 0, 255, 0.2));
    z-index: -1; /* Detrás del texto */
    opacity: 0;
    transition: opacity 0.3s ease;
    animation: neon-glow 3s infinite alternate; /* Animación de brillo */
    border-radius: 50%; /* Luz circular */
}

/* Efecto de neón visible en hover */
.top-bar__content button:hover::before,
.top-bar__content a:hover::before {
    opacity: 1; /* Brillo interno visible */
}

/* Animación de neón */
@keyframes neon-glow {
    0% {
        box-shadow: 0 0 10px #00f0ff, 0 0 20px #8000ff;
    }
    100% {
        box-shadow: 0 0 20px #00f0ff, 0 0 40px #8000ff;
    }
}

    </style>
    <div class="top-bar__content">
        @if( !isset(auth()->user()->username) )
        <div class="top-bar__anon ng-scope" ng-if="!$root.data.user.email">
            <button class="top-bar__sign-in" ng-click="openModal($event, '#login-modal')">@lang('app.log_in')</button>
        </div>
        @else
        <link rel="stylesheet" href="/woocasino/css/payment.css">
        <div class="header-auth__anon-btn-wrp">
            <a class="modal-btn button-primary" ng-click="openModal($event, '#my-account')">{{trans('app.my_profile')}}</a>
            <a href="{{ route('frontend.auth.logout') }}" class="modal-btn button-secondary">@lang('app.logout')</a>
        </div>
        @endif
    </div>
</div>

    <!-- Menú móvil -->
    <div class="sticky-games-menu-mob ng-scope" scroll-position="">
        <div class="games-menu-mob ng-isolate-scope" name="games_menu_mob">
            <!-- Contenido del menú móvil -->
        </div>
    </div>

    <!-- Menú completo móvil -->
    <div class="mobile-menu ng-scope">
        <div class="mobile-menu__wrap ng-scope">
            <div class="header-auth ng-isolate-scope">
                <div class="header-auth__anon ng-scope">
                    <div class="header-auth__anon-status">
                        <img class="header-auth__anon-img" src="/woocasino/resources/images/status/anon.svg" alt="">
                    </div>
                    @if (!Auth::check())
                    <div class="header-auth__anon-btn-wrp">
                        <button class="button button-secondary header-auth__login-btn ng-scope" ng-click="openModal($event, '#login-modal')">@lang('app.log_in')</button>
                    </div>
                    @else
                    <div class="statuses-panel">
                        <div class="statuses-panel__wrp">
                            <a class="statuses-panel__wrp-img ng-scope" >

                            </a>
                            <div class="balance-info ng-isolate-scope" type="balance-selector">

                                <p class="balance-info__elem ng-scope">
                                 <div > <span style=" font-size:26px;color:#ffbb39;" class="info-value balanceValue">{{ number_format(auth()->user()->balance, 2, '.', '') }}
                                {{ isset($currency) ? $currency : 'EUR' }}</span></div>
                                </p>
                            </div>
                        </div>
                        <div class="statuses-panel__wrp-status">


                            <div class="ng-hide">
                                <p class="statuses-panel__name-status ng-binding">W1</p>
                                <div class="statuses-panel__points ng-scope" >
                                    <div class="status-line">
                                        <div class="status-line__progress">
                                            <div class="status-line__progress-full"style="width: 0%;"></div>
                                        </div>
                                        <p class="status-line__text ng-binding">0/25 (0%)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            <div class="mobile-menu__nav">
                <nav class="mobile-menu__nav-menu header-menu ng-scope ng-isolate-scope">
                    <ul class="header-menu__list">
                        <li class="header-menu__item">
                            <!-- ngIf: $root.data.user.email -->
                        </li>
                        <li class="header-menu__item ng-scope">
                            <a class="header-menu__link header-menu__link--games"  href="{{ route('frontend.game.list.category', 'all') }}">
                                <i class="header-menu__icon icon-woo-menu-default icon-woo-all"></i>
                                <span class="header-menu__text ng-binding">@lang('app.all')</span>
                            </a>
                        </li>
                        <li class="header-menu__item ng-scope">
                            <a class="header-menu__link header-menu__link--games" href="{{ route('frontend.game.list.category', 'hot') }}">
                                 <i class="header-menu__icon icon-woo-menu-default icon-woo-poker"></i>
                                 <span class="header-menu__text ng-binding" >@lang('app.hot_game')</span>
                            </a>
                        </li>
                        <li class="header-menu__item ng-scope">
                            <a class="header-menu__link header-menu__link--games" href="{{ route('frontend.game.list.category', 'new') }}">
                                 <i class="header-menu__icon icon-woo-menu-default icon-woo-new-games"></i>
                                 <span class="header-menu__text ng-binding" >@lang('app.new')</span>
                            </a>
                        </li>
                        <li class="header-menu__item ng-scope">
                            <a class="header-menu__link header-menu__link--games" href="{{ route('frontend.game.list.category', 'slots') }}"> <i class="header-menu__icon icon-woo-menu-default icon-woo-video-slots"></i> <span class="header-menu__text ng-binding" >@lang('app.slots')</span> </a>
                        </li>
                        <li class="header-menu__item ng-scope">
                            <a class="header-menu__link header-menu__link--games" href="{{ route('frontend.game.list.category', 'jackpot') }}"> <i class="header-menu__icon icon-woo-menu-default  icon-woo-blackjack"></i> <span class="header-menu__text ng-binding" >Jackpot</span> </a>
                        </li>
                        <li class="header-menu__item ng-scope">
                            <a class="header-menu__link header-menu__link--games" href="{{ route('frontend.game.list.category', 'roulette') }}"> <i class="header-menu__icon icon-woo-menu-default icon-woo-roulette"></i> <span class="header-menu__text ng-binding" >Roulette</span> </a>
                        </li>
                    </ul>
                </nav>
                @php
                $lang = [
                    'en' => 'ENG',
                    'de' => 'DEU',
                ];
                if (isset($_COOKIE['language'])) {
                    $laut = htmlspecialchars($_COOKIE['language']);
                } else {
                    $laut = 'en';
                }
                @endphp
                <div class="mobile-menu__nav-btn">
                    <div class="language-select mobile-menu__locale locale-selector ng-isolate-scope" dropdown="" >
                        <button class="locale-selector__selector" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                            <img class="locale-selector__img" src="/woocasino/flag-icon-css/flags/4x3/{{$laut}}.svg">
                            <span class="locale-selector__name ng-binding">{{ $lang[$laut] }}</span>
                        </button>
                        <ul role="menu" class="locale-selector__dropdown">
                            @foreach ($lang as $k=>$v)
                                 <li class="locale-selector__item ng-scope">
                                    <i data-lang-code="{{$k}}" role="button">
                                        <img class="locale-selector__img" alt="{{$v}}" src="/woocasino/flag-icon-css/flags/4x3/{{$k}}.svg">
                                        <span class="locale-selector__dropdown-name ng-binding">{{$v}}</span>
                                    </i>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    $('.locale-selector__selector').click(function(){
        $(this).parent().toggleClass('open');
    })
    $('.providers-mob__btn').click(function(){
        $(this).parent().toggleClass('open')
    })
</script>
<!-- Barra de Categorías (Solo Visible en Móviles) -->
<!-- Barra de Categorías (Solo Visible en Móviles) -->
<div class="lista-categorias">
    <nav class="games-menu-mob__menu">
        <div class="swiper-container category-list-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="#link1">
                        <img src="/woocasino/cat1.png" alt="Categoría 1">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#link2">
                        <img src="/woocasino/cat2.png" alt="Categoría 2">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#link3">
                        <img src="/woocasino/cat3.png" alt="Categoría 3">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#link4">
                        <img src="/woocasino/cat4.png" alt="Categoría 4">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#link5">
                        <img src="/woocasino/cat5.png" alt="Categoría 5">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#link6">
                        <img src="/woocasino/cat6.png" alt="Categoría 6">
                    </a>
                </div>
            </div>
        </div>
    </nav>
</div>


<!-- Estilos CSS -->
<style>
/* 🔹 Solo visible en móviles */
.lista-categorias {
    display: none;
}
@media (max-width: 768px) { 
    .lista-categorias {
        display: flex;
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 800;
        background-color: #1f1f2e;
        padding: 10px 0;
        justify-content: center;
    }

    .category-list-container {
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none;
    }

    .category-list-container::-webkit-scrollbar {
        display: none;
    }

    .swiper-wrapper {
        display: flex;
        align-items: center;
    }

    .swiper-slide {
        flex: 0 0 auto;
        padding: 10px;
    }

    .swiper-slide a {
        display: block;
        width: 150px; /* Ajusta el tamaño del botón */
        height: 80px;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
}

</style>


<!-- JavaScript (Swiper) -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    // 🔹 Configuración del slider con scroll táctil y loop funcional
    new Swiper('.swiper-container', {
        slidesPerView: 'auto',  // Se ven varios botones a la vez
        loop: true,              // Hace que el slider sea infinito
        spaceBetween: 5,        // Espacio entre botones
        grabCursor: true,        // Permite arrastrar con el dedo
        autoplay: {
            delay: 3000,         // Avanza automáticamente cada 3 segundos
            disableOnInteraction: true, // Permite scroll manual sin detener autoplay
        },
        touchEventsTarget: 'wrapper', // Asegura que el scroll táctil funcione bien
    });
});
</script>
