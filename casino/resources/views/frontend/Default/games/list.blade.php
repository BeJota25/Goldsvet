@extends('frontend.Default.layouts.app')

@section('page-title', $title)
@section('body', $body)
@section('keywords', $keywords)
@section('description', $description)

@section('content')

<style type="text/css">
        @charset "UTF-8";
        [ng\:cloak],
        [ng-cloak],
        [data-ng-cloak],
        [x-ng-cloak],
        .ng-cloak,
        .x-ng-cloak,
        .ng-hide:not(.ng-hide-animate) {
                display: none !important;
        }

        ng\:form {
                display: block;
        }

        .ng-animate-shim {
                visibility: hidden;
        }

        .ng-anchor {
                position: absolute;
        }
            /* Estilos del popup */
    .popup-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

.popup {
    background: url('/woocasino/id.webp') no-repeat center center; /* Imagen como fondo */
    background-size: cover; /* La imagen se ajusta para cubrir todo el fondo */
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    text-align: center;
    max-width: 400px;
    width: 90%;
    height: 600px; /* Altura fija */
    display: flex;
    flex-direction: column;
    justify-content: flex-start; /* Cambia la alineación vertical */
    padding-top: 380px; /* Ajusta la distancia desde la parte superior */
    color: #fff; /* Texto en blanco para mayor contraste */
}

    .popup h2 {
        font-size: 24px;
        margin: 10px 0;
    }

    .popup p {
        font-size: 16px;
        margin-bottom: 20px;
    }

    .popup button {
        margin: 5px;
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        color: #fff;
    }

    .popup .btn-yes {
        background: #28a745;
    }

    .popup .btn-yes:hover {
        background: #218838;
    }

    .popup .btn-no {
        background: #dc3545;
    }

    .popup .btn-no:hover {
        background: #c82333;
    }

    @media (max-width: 600px) {
        .popup {
            height: auto; /* Permite que el popup se ajuste a su contenido */
            padding-top: 100px; /* Reduce el espaciado en móviles */
        }

        .popup h2 {
            font-size: 20px;
        }

        .popup p {
            font-size: 14px;
        }

        .popup button {
            font-size: 14px;
        }
    }
</style>
	@php
        if(Auth::check() && auth()->user()->email == 'demo01@gmail.com'){
            \Auth::logout();
            echo "<script>location.reload()</script>";
        }
        if(Auth::check()){
            $currency = auth()->user()->present()->shop ? auth()->user()->present()->shop->currency : '';
        } else{
            $currency = '';
        }
	@endphp
    <!-- Popup -->
<!-- Popup (Oculto inicialmente en CSS si ya está verificado) -->
<div class="popup-overlay" id="ageVerificationPopup" style="display: none;">
    <div class="popup">
        <h2>¿Eres mayor de edad?</h2>
        <p>Debes tener al menos 18 años para acceder a este sitio web.</p>
        <button class="btn-yes" id="btnYes">Sí, tengo 18 años o más</button>
        <button class="btn-no" id="btnNo">No, soy menor</button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const popup = document.getElementById('ageVerificationPopup');
        const btnYes = document.getElementById('btnYes');
        const btnNo = document.getElementById('btnNo');

        // Verificar si el usuario ya confirmó ser mayor de edad
        if (localStorage.getItem('ageVerified') !== 'true') {
            popup.style.display = 'flex'; // Mostrar el popup si no está verificado
        }

        // Cuando el usuario confirma ser mayor de edad
        btnYes.addEventListener('click', function () {
            localStorage.setItem('ageVerified', 'true'); // Guardar estado en localStorage
            popup.style.display = 'none'; // Ocultar el popup
        });

        // Cuando el usuario indica que es menor de edad
        btnNo.addEventListener('click', function () {
            window.location.href = 'https://www.google.com'; // Redirigir al usuario
        });
    });
</script>


    <!-- BLOCK WITH GAMES -->
    <main class="carcass__body">
        <div class="main-content">
        <!-- 🚀 CARRUSEL WEIRD (ÚNICO Y SIN CONFLICTOS) -->
<div class="weirdCarouselContainer">
    <div class="weirdCarouselTrack">
        <img src="/woocasino/weird1.png" alt="Imagen 1">
        <img src="/woocasino/weird2.png" alt="Imagen 2">
        <img src="/woocasino/weird3.png" alt="Imagen 3">
        <img src="/woocasino/weird1.png" alt="Imagen 1 (copia)">
        <img src="/woocasino/weird2.png" alt="Imagen 2 (copia)">
        <img src="/woocasino/weird3.png" alt="Imagen 3 (copia)">
    </div>
</div>

<style>
/* 🔥 ANIMACIÓN PARA EL CARRUSEL WEIRD */
@keyframes weirdSlideMove {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-50%);
    }
}

/* 🎯 Contenedor principal del carrusel */
.weirdCarouselContainer {
    overflow: hidden;
    position: relative;
    width: 100%;
    max-width: 1200px;
    height: auto;
    margin: 20px auto;
}

/* 🚀 Contenedor de imágenes (track) */
.weirdCarouselTrack {
    display: flex;
    width: 200%; /* Doble tamaño para hacer loop */
    animation: weirdSlideMove 15s linear infinite; /* Nueva animación */
}

/* 🎥 Imágenes dentro del carrusel */
.weirdCarouselTrack img {
    width: calc(75%); /* Cada imagen ocupa 1/3 del contenedor */
    height: auto;
    object-fit: contain;
    flex-shrink: 0;
}
</style>

            <div class="contain">


            <div class="ng-scope">
                    <div class="ng-scope">
                        <div class="mobile-slider ng-scope ng-isolate-scope" template="mobile-slider" category="mobile-slider">
                            <div class="carousel-fade carousel ng-scope ng-isolate-scope" >
                                <ol class="carousel-indicators">
                                    <!-- ngRepeat: slide in slides track by $index -->
                                    <li class="ng-scope active"></li>
                                    <!-- end ngRepeat: slide in slides track by $index -->
                                    <li class="ng-scope"></li>
                                    <!-- end ngRepeat: slide in slides track by $index -->
                                    <li class="ng-scope"></li>
                                    <!-- end ngRepeat: slide in slides track by $index -->
                                    <li class="ng-scope"></li>
                                    <!-- end ngRepeat: slide in slides track by $index -->
                                    <li class="ng-scope"></li>
                                    <!-- end ngRepeat: slide in slides track by $index -->
                                </ol>
                                <div class="carousel-inner">
                                    <!-- ngRepeat: slide in slides -->
                                    <div class="item text-center ng-scope ng-isolate-scope active">
                                        <video autoplay loop muted class="mobile-slider__video" style="width: 100%; height: 80vw; object-fit: cover;">
                                            <source src="/woocasino/vvvv001.mp4" type="video/mp4">
                                            Tu navegador no soporta videos.
                                        </video>
                                    </div>

                                    <!-- end ngRepeat: slide in slides -->
                                    <div class="item text-center ng-scope ng-isolate-scope">
                                        <video autoplay loop muted class="mobile-slider__video" style="width: 100%; height: 80vw; object-fit: cover;">
                                            <source src="/woocasino/Vv002.mp4" type="video/mp4">
                                            Tu navegador no soporta videos.
                                        </video>
                                    </div>
                                    <!-- end ngRepeat: slide in slides -->
                                    <div class="item text-center ng-scope ng-isolate-scope">
                                        <video autoplay loop muted class="mobile-slider__video" style="width: 100%; height: 80vw; object-fit: cover;">
                                            <source src="/woocasino/vv003.mp4" type="video/mp4">
                                            Tu navegador no soporta videos.
                                        </video>
                                    </div>
                                    <!-- end ngRepeat: slide in slides -->
                                    <div class="item text-center ng-scope ng-isolate-scope">
                                        <video autoplay loop muted class="mobile-slider__video" style="width: 100%; height: 80vw; object-fit: cover;">
                                            <source src="/woocasino/vv004.mp4" type="video/mp4">
                                            Tu navegador no soporta videos.
                                        </video>
                                    </div>
                                    <!-- end ngRepeat: slide in slides -->
                                    <div class="item text-center ng-scope ng-isolate-scope">
                                        <video autoplay loop muted class="mobile-slider__video" style="width: 100%; height: 80vw; object-fit: cover;">
                                            <source src="/woocasino/Vv005.mp4" type="video/mp4">
                                            Tu navegador no soporta videos.
                                        </video>
                                    </div>
                                    <!-- end ngRepeat: slide in slides -->
                                </div>
                                <a class="left carousel-control">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <!-- end ngIf: slides.length -->
                            <div class="mobile-slider__content">
                                <div class="ng-binding ng-isolate-scope ng-scope">
                                    <div>
                                                                        @if( !isset(auth()->user()->username) )
                                        <div class="ng-isolate-scope">
                                            <!-- ngIf: !$root.data.user.email -->

                                                                                        @else

                                                                                @endif
                                            <!-- end ngIf: !$root.data.user.email -->
                                            <!-- ngIf: $root.data.user.email -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end ngIf: ['home'].includes(state.current.page_name) -->
                        <div class="main-content__first-screen">

                            <div class="main-content__slider main-slider ng-isolate-scope" category="main-slider">
                                <!-- ngIf: slides.length -->
                                <div class="carousel-fade carousel ng-scope ng-isolate-scope">
                                    <ol class="carousel-indicators">
                                        <!-- ngRepeat: slide in slides track by $index -->
                                        <li class="ng-scope active"></li>
                                        <!-- end ngRepeat: slide in slides track by $index -->
                                        <li class="ng-scope"></li>
                                        <!-- end ngRepeat: slide in slides track by $index -->
                                        <li class="ng-scope"></li>
                                        <!-- end ngRepeat: slide in slides track by $index -->
                                        <li class="ng-scope"></li>
                                        <!-- end ngRepeat: slide in slides track by $index -->
                                        <li class="ng-scope"></li>
                                        <!-- end ngRepeat: slide in slides track by $index -->
                                    </ol>
                                    <div class="carousel-inner">
                                        <!-- ngRepeat: slide in slides -->
                                        <div class="item text-center ng-scope ng-isolate-scope active">
                                            <video autoplay loop muted class="main-slider__video" style="width: 100%; height: 380px; object-fit: cover;">
                                                <source src="/woocasino/vvv001.mp4" type="video/mp4">
                                                Tu navegador no soporta videos.
                                            </video>
                                        </div>

                                        <!-- end ngRepeat: slide in slides -->
                                    <div class="item text-center ng-scope ng-isolate-scope">
                                        <video autoplay loop muted class="mobile-slider__video" style="width: 100%; height: 380px; object-fit: cover;">
                                            <source src="/woocasino/vvv002.mp4" type="video/mp4">
                                            Tu navegador no soporta videos.
                                        </video>
                                    </div>
                                        <!-- end ngRepeat: slide in slides -->
                                        <div class="item text-center ng-scope ng-isolate-scope">
                                        <video autoplay loop muted class="mobile-slider__video" style="width: 100%; height: 380px; object-fit: cover;">
                                            <source src="/woocasino/vv003.mp4" type="video/mp4">
                                            Tu navegador no soporta videos.
                                        </video>
                                        </div>
                                        <!-- end ngRepeat: slide in slides -->
                                        <div class="item text-center ng-scope ng-isolate-scope">
                                        <video autoplay loop muted class="mobile-slider__video" style="width: 100%; height: 380px; object-fit: cover;">
                                            <source src="/woocasino/vv004.mp4" type="video/mp4">
                                            Tu navegador no soporta videos.
                                        </video>
                                        </div>
                                        <!-- end ngRepeat: slide in slides -->
                                        <div class="item text-center ng-scope ng-isolate-scope">
                                        <video autoplay loop muted class="mobile-slider__video" style="width: 100%; height: 380px; object-fit: cover;">
                                            <source src="/woocasino/vvv005.mp4" type="video/mp4">
                                        </div>
                                        <!-- end ngRepeat: slide in slides -->
                                        <div type="main-slider" class="ng-binding ng-scope ng-isolate-scope">
                                        <div class="main-slider__promo active">
                                                <a class="main-slider__link" href=""></a>
                                                <div class="main-slider__promo-wrp">
                                                    <p class="main-slider__promo-txt">@lang('app.slider1text1')
                                                        <br> <span class="main-slider__promo-separator">
                                                        <span class="text-color-yellow">@lang('app.slider1text2')</span> </span>
                                                        <br> <span class="main-slider__promo-bg"><span class="text-color-blue">@lang('app.slider1text3')</span> @lang('app.slider1text4')</span>
                                                    </p>
                                                    <div class="main-slider__btn-wrp ng-isolate-scope">
                                                        <!-- ngIf: !$root.data.user.email -->

                                                        <button class="button button-secondary"> @lang('app.play_now') </button>
                                                        <!-- end ngIf: !$root.data.user.email -->
                                                        <!-- ngIf: $root.data.user.email -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="main-slider__promo">
                                                <a class="main-slider__link" href=""></a>
                                                <div class="main-slider__promo-wrp">
                                                <p class="main-slider__promo-txt">@lang('app.slider2text1')
                                                        <br> <span class="main-slider__promo-separator">
                                                        <span class="text-color-yellow">@lang('app.slider2text2')</span> </span>
                                                        <br> <span class="main-slider__promo-bg"><span class="text-color-blue">@lang('app.slider2text3')</span> @lang('app.slider2text4')</span>
                                                    </p>
                                                    <div class="main-slider__btn-wrp ng-isolate-scope">
                                                        <!-- ngIf: !$root.data.user.email -->

                                                        <button class="button button-secondary"> @lang('app.play_now') </button>
                                                        <!-- end ngIf: !$root.data.user.email -->
                                                        <!-- ngIf: $root.data.user.email -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="main-slider__promo" href=""></a>
                                                <div class="main-slider__promo-wrp">
                                                <p class="main-slider__promo-txt">@lang('app.slider3text1')
                                                        <br> <span class="main-slider__promo-separator">
                                                        <span class="text-color-yellow">@lang('app.slider3text2')</span> </span>
                                                        <br> <span class="main-slider__promo-bg"><span class="text-color-blue">@lang('app.slider3text3')</span> @lang('app.slider3text4')</span>
                                                    </p>
                                                    <div class="main-slider__btn-wrp ng-isolate-scope">
                                                        <!-- ngIf: !$root.data.user.email -->

                                                        <button class="button button-secondary"> @lang('app.play_now') </button>
                                                        <!-- end ngIf: !$root.data.user.email -->
                                                        <!-- ngIf: $root.data.user.email -->
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="main-slider__promo">
                                                <a class="main-slider__link" href=""></a>
                                                <div class="main-slider__promo-wrp">
                                                <p class="main-slider__promo-txt">@lang('app.slider4text1')
                                                        <br> <span class="main-slider__promo-separator">
                                                        <span class="text-color-yellow">@lang('app.slider4text2')</span> </span>
                                                        <br> <span class="main-slider__promo-bg"><span class="text-color-blue">@lang('app.slider4text3')</span> @lang('app.slider4text4')</span>
                                                    </p>
                                                    <div class="main-slider__btn-wrp ng-isolate-scope">
                                                        <!-- ngIf: !$root.data.user.email -->

                                                        <button class="button button-secondary"> @lang('app.play_now') </button>
                                                        <!-- end ngIf: !$root.data.user.email -->
                                                        <!-- ngIf: $root.data.user.email -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="main-slider__promo">
                                                <a class="main-slider__link" href=""></a>
                                                <div class="main-slider__promo-wrp">
                                                <p class="main-slider__promo-txt">@lang('app.slider5text1')
                                                        <br> <span class="main-slider__promo-separator">
                                                        <span class="text-color-yellow">@lang('app.slider5text2')</span> </span>
                                                        <br> <span class="main-slider__promo-bg"><span class="text-color-blue">@lang('app.slider5text3')</span> @lang('app.slider5text4')</span>
                                                    </p>
                                                    <div class="main-slider__btn-wrp ng-isolate-scope">
                                                        <!-- ngIf: !$root.data.user.email -->

                                                        <button class="button button-secondary"> @lang('app.play_now') </button>
                                                        <!-- end ngIf: !$root.data.user.email -->
                                                        <!-- ngIf: $root.data.user.email -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="left carousel-control">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>
                                <!-- end ngIf: slides.length -->

                    <div class="category-panel">
                        <nav class="category-panel__menu games-menu ng-isolate-scope" name="games_menu">
                            <ul class="games-menu__list">
                                <li class="games-menu__item games-menu__item--bitcoin">
                                    <a class="games-menu__link games-menu__link--bitcoin" href="{{ route('frontend.game.list.category', 'all') }}"> <i class="games-menu-icon games-menu-icon--bitcoin"></i> <span class="games-menu__title ng-scope">@lang('app.all')</span> </a>
                                </li>

                                <li class="games-menu__item games-menu__item--woo_choice">
                                    <a class="games-menu__link games-menu__link--woo_choice" href="{{ route('frontend.game.list.category', 'hot') }}"> <i class="games-menu-icon games-menu-icon--woo_choice"></i> <span class="games-menu__title ng-scope" >@lang('app.hot_game')</span> </a>
                                </li>
                                <!-- end ngRepeat: filter_collection in gamesData.data.collections | limitTo: 9 -->
                                <li class="games-menu__item games-menu__item--new-games">
                                    <a class="games-menu__link games-menu__link--new-games" href="{{ route('frontend.game.list.category', 'new') }}"> <i class="games-menu-icon games-menu-icon--new-games"></i> <span class="games-menu__title ng-scope" >@lang('app.new')</span> </a>
                                </li>
                                <!-- end ngRepeat: filter_collection in gamesData.data.collections | limitTo: 9 -->
                                <li class="games-menu__item games-menu__item--slots">
                                    <a class="games-menu__link games-menu__link--slots" href="{{ route('frontend.game.list.category', 'slots') }}"> <i class="games-menu-icon games-menu-icon--slots"></i> <span class="games-menu__title ng-scope" >@lang('app.slots')</span> </a>
                                </li>
                                <!-- end ngRepeat: filter_collection in gamesData.data.collections | limitTo: 9 -->
                                <li class="games-menu__item games-menu__item--bonus_buy_slots">
                                    <a class="games-menu__link games-menu__link--bonus_buy_slots" href="{{ route('frontend.game.list.category', 'jackpot') }}"> <i class="games-menu-icon games-menu-icon--bonus_buy_slots"></i> <span class="games-menu__title ng-scope" >Jackpot</span> </a>
                                </li>
                                <li class="games-menu__item games-menu__item--roulette-games">
                                    <a class="games-menu__link games-menu__link--roulette-games" href="{{ route('frontend.game.list.category', 'roulette') }}"> <i class="games-menu-icon games-menu-icon--roulette-games"></i> <span class="games-menu__title ng-scope" >Roulette</span> </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="providers ng-isolate-scope">
                        <div class="providers__panel">
                            <a class="providers__btn-all ng-scope" href="{{ route('frontend.game.list.category', 'all') }}">@lang('app.all')</a>
                            <ul class="providers__panel-list">

                            @php
                            $top_categories = ['wazdan', 'playtech', 'casino-technology', 'egt', 'gamomat', 'amatic'];
                            @endphp
                            @foreach ($top_categories as $k=>$v)
                                <li class="providers__item ng-scope">
                                    <a class="providers__link" scroll-up="" href="{{ route('frontend.game.list.category', $v) }}">
                                        <span class="providers__icon">
                                            <img class="providers__icon-img providers__icon-img--{{$v}}" alt="{{$v}}" src="/frontend/Default/svg/{{$v}}.svg">
                                        </span>
                                        <span class="providers__name ng-scope">{{ lcfirst($v) }}</span> </a>
                                </li>
                            @endforeach
                            </ul>
                            <button class="providers__toggler">
                                <span class="providers__toggler-text ng-scope">@lang('app.all_providers')</span>
                                <span class="ng-scope ng-hide">@lang('app.close')</span>
                            </button>
                        </div>
                        <ul class="providers__dropdown ng-hide">
                            @if ($categories && count($categories))
                                @foreach($categories AS $index=>$category)
                                @if (!in_array($category->href, $top_categories))
                                <li class="providers__dropdown-item ng-scope">
                                    <a class="providers__link" href="{{ route('frontend.game.list.category', $category->href) }}">
                                        <span class="providers__icon">
                                            <img class="providers__icon-img providers__icon-img--1x2gaming" alt="" src="/frontend/Default/svg/{{$category->href}}.svg">
                                        </span>
                                        <span class="providers__name ng-scope">{{ $category->title }}</span> </a>
                                </li>
                                @endif
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="image-carousel" style="overflow: hidden; position: relative; width: 100%; max-width: 1200px; height: auto; margin: 20px auto;">
                <div class="image-carousel-track" style="display: flex; animation: slideContinuous 10s linear infinite;">
                    <img src="/woocasino/imagen1.png" alt="Imagen 1" style="width: 100%; height: auto; object-fit: contain;">
                    <img src="/woocasino/imagen1.png" alt="Imagen 1 (copia)" style="width: 100%; height: auto; object-fit: contain;">
                </div>
            </div>

            <style>
            /* Animación para desplazamiento continuo */
            @keyframes slideContinuous {
                0% {
                    transform: translateX(0); /* Comienza desde el inicio */
                }
                100% {
                    transform: translateX(-100%); /* Se desplaza todo el ancho hacia la izquierda */
                }
            }

            /* Contenedor principal */
            .image-carousel {
                overflow: hidden;
                position: relative;
                width: 100%;
                max-width: 1200px;
                height: auto;
                margin: 20px auto;
            }

            /* Contenedor de imágenes (track) */
            .image-carousel-track {
                display: flex;
                animation: slideContinuous 10s linear infinite;
            }

            /* Imágenes dentro del carrusel */
            .image-carousel img {
                width: 100%;
                height: auto;
                object-fit: contain;
                flex-shrink: 0; /* Asegura que las imágenes no se reduzcan */
            }
            </style>
<style>
/* Contenedor de celdas */
.custom-interactive-cells {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin: 20px 0;
    flex-wrap: nowrap; /* Asegura que las celdas permanezcan en una fila en escritorio */
}

/* Estilo para las celdas */
.custom-cell {
    position: relative;
    width: 500px;
    height: 400px;
    overflow: hidden;
    border: 4px solid blue;
    border-radius: 10px;
    transition: border-color 0.3s ease-in-out;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    background-size: cover;
    background-position: center;
}

/* Fondos para cada celda */
.custom-cell:nth-child(1) {
    background-image: url('/woocasino/bg1.png'); /* Fondo de la celda 1 */
}
.custom-cell:nth-child(2) {
    background-image: url('/woocasino/bg2.png'); /* Fondo de la celda 2 */
}
.custom-cell:nth-child(3) {
    background-image: url('/woocasino/bg3.png'); /* Fondo de la celda 3 */
}
.custom-cell:nth-child(4) {
    background-image: url('/woocasino/bg4.png'); /* Fondo de la celda 4 */
}

/* Efecto de brillo */
.custom-cell:hover {
    border-color: violet;
    animation: glow 1.5s infinite alternate;
}

@keyframes glow {
    0% {
        border-color: blue;
    }
    100% {
        border-color: violet;
    }
}

/* Imágenes dentro de las celdas */
.custom-cell img {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -30%);
    width: 100%;
    z-index: 2;
    transition: transform 0.3s ease, opacity 0.3s ease;
}

/* Imagen inicial */
.custom-cell img.custom-img-1 {
    opacity: 1;
}

/* Imagen secundaria */
.custom-cell img.custom-img-2 {
    opacity: 0;
}

/* Efecto hover para PC */
.custom-cell:hover img.custom-img-1 {
    transform: translate(-50%, -50%) scale(1.2);
    opacity: 0;
}
.custom-cell:hover img.custom-img-2 {
    transform: translate(-50%, -65%) scale(1);
    opacity: 1;
}

/* Botón en la parte inferior */
.custom-button {
    position: absolute;
    bottom: 10px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 3;
    width: 230px; /* Ajusta el ancho del botón */
    height: 100px; /* Ajusta la altura del botón */
    background-size: contain; /* Asegura que la imagen cubra el botón */
    background-repeat: no-repeat; /* Evita repeticiones */
    background-position: center; /* Centra la imagen */
    border: none;
    cursor: pointer;
}

/* Imagen personalizada para cada botón */
.custom-cell:nth-child(1) .custom-button {
    background-image: url('/woocasino/bn001.png');
}

.custom-cell:nth-child(2) .custom-button {
    background-image: url('/woocasino/jjb01.png');
}

.custom-cell:nth-child(3) .custom-button {
    background-image: url('/woocasino/ro01.png');
}

.custom-cell:nth-child(4) .custom-button {
    background-image: url('/woocasino/ag01.png');
}

/* Efecto hover */
.custom-button:hover {
    transform: translateX(-50%) scale(1.1); /* Mantén la posición con translateX(-50%), pero solo cambia la escala */
    opacity: 0.9; /* Ligera transparencia */
}

/* Animación automática en móviles */
@media (max-width: 768px) {
    .custom-interactive-cells {
        flex-direction: column; /* Cambia el diseño a columnas */
        align-items: center; /* Centra las celdas */
    }

    .custom-cell {
        width: 90%; /* Ajusta el ancho de las celdas en móviles */
        height: 300px; /* Reduce la altura de las celdas en móviles */
    }

    /* Animación de cambio automático */
    .custom-cell img.custom-img-1 {
        animation: autoSwitch 3s ease-in-out infinite alternate; /* Alterna entre las imágenes */
    }
    .custom-cell img.custom-img-2 {
        animation: autoSwitchReverse 3s ease-in-out infinite alternate;
    }

    @keyframes autoSwitch {
        0% {
            opacity: 1;
            transform: translate(-50%, -10%) scale(1);
        }
        100% {
            opacity: 0;
            transform: translate(-50%, -50%) scale(1.2);
        }
    }

    @keyframes autoSwitchReverse {
        0% {
            opacity: 0;
            transform: translate(-50%, -85%) scale(1);
        }
        100% {
            opacity: 1;
            transform: translate(-50%, -10%) scale(1);
        }
    }
}
</style>

<div class="custom-interactive-cells">
    <!-- Celda 1 -->
    <div class="custom-cell">
        <img src="/woocasino/celda1-1.png" alt="Celda 1 Imagen 1" class="custom-img-1">
        <img src="/woocasino/celda1-2.png" alt="Celda 1 Imagen 2" class="custom-img-2">
        <a href="https://leviatan.bet/game/BookOfNileNG" >
            <button class="custom-button"></button>
        </a>
    </div>
    <!-- Celda 2 -->
    <div class="custom-cell">
        <img src="/woocasino/celda2-1.png" alt="Celda 2 Imagen 1" class="custom-img-1">
        <img src="/woocasino/celda2-2.png" alt="Celda 2 Imagen 2" class="custom-img-2">
        <a href="https://leviatan.bet/game/JokersJewelPM" >
            <button class="custom-button"></button>
        </a>
    </div>
    <!-- Celda 3 -->
    <div class="custom-cell">
        <img src="/woocasino/celda3-1.png" alt="Celda 2 Imagen 1" class="custom-img-1">
        <img src="/woocasino/celda3-2.png" alt="Celda 2 Imagen 2" class="custom-img-2">
        <a href="https://leviatan.bet/game/RingOfOdinPG" >
            <button class="custom-button"></button>
        </a>
    </div>
    <!-- Celda 4 -->
    <div class="custom-cell">
        <img src="/woocasino/x0042.png" alt="Celda 2 Imagen 1" class="custom-img-1">
        <img src="/woocasino/x0041.png" alt="Celda 2 Imagen 2" class="custom-img-2">
        <a href="https://leviatan.bet/game/RulerOfTheSkyJPPT" >
            <button class="custom-button"></button>
        </a>
    </div>
 </div>


<div class="highlight-cells">
    <video class="video-background" autoplay loop muted>
        <source src="/woocasino/1002.mp4" type="video/mp4">
        Tu navegador no soporta el video de fondo.
    </video>

    <!-- Celda 1 -->
    <div class="highlight-cell highlight-cell--1">
        <img src="/woocasino/wf01.png" alt="Pre-Match" class="highlight-cell__image">
        <a href="https://leviatan.bet/game/WildBuffaloNG" class="highlight-cell__label">JUGAR</a>
    </div>
    <!-- Celda 2 -->
    <div class="highlight-cell highlight-cell--2">
        <img src="/woocasino/ak01.png" alt="Casino" class="highlight-cell__image">
        <a href="https://leviatan.bet/game/AfricanKingNG" class="highlight-cell__label">JUGAR</a>
    </div>
    <!-- Celda 3 -->
    <div class="highlight-cell highlight-cell--3">
        <img src="/woocasino/hv001.png" alt="Juegos Virtuales" class="highlight-cell__image">
        <a href="https://leviatan.bet/game/HitInVegasNG" class="highlight-cell__label">JUGAR</a>
    </div>
</div>


<style>
/* Contenedor general */
.highlight-cells {
    position: relative; /* Establece el contexto para el video */
    display: flex;
    justify-content: center;
    gap: 20px;
    padding: 20px;
    overflow: visible;
}

.video-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 95%; /* Mantén el video dentro del contenedor */
    height: 100%;
    object-fit: cover; /* Asegura que el video llene el contenedor */
    transform: scale(1.1); /* Aumenta el tamaño del video (zoom) */
    transform-origin: top top; /* Define el punto de zoom: el centro del video */
    z-index: -1; /* Coloca el video detrás del contenido */
    pointer-events: none; /* Evita que interfiera con clics */
}

@media (max-width: 768px) {
    .highlight-cells {
        flex-direction: column;
        align-items: center;
        gap: 15px;
    }

    .video-background {
        height: 900px; /* Ajusta la altura del video en pantallas pequeñas */
    }
}

/* Estilo de cada celda */
.highlight-cell {
    position: relative;
    width: 200px;
    height: 200px;
    border-radius: 15px;
    background-size: cover;
    background-position: center;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5); /* Efecto de sombra */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    overflow: visible; /* Asegura que la imagen PNG no se recorte */
}

/* Hover en PC */
@media (min-width: 769px) {
    .highlight-cell:hover {
        transform: translateY(-10px); /* Eleva la celda */
        box-shadow: 0 8px 25px rgba(255, 255, 255, 0.3); /* Resalta la sombra */
    }
}

/* Efecto automático en móviles */
/* Efecto automático en móviles */
@media (max-width: 768px) {
    .image-container {
        position: relative;
        width: 100%;
        height: 200px; /* Ajusta la altura según tu diseño */
        overflow: hidden;
    }

    .image-container img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0;
        animation: fadeEffect 6s infinite;
    }

    .image-container img:nth-child(1) {
        animation-delay: 0s;
    }
    .image-container img:nth-child(2) {
        animation-delay: 3s; /* Ajusta para sincronizar */
    }

    @keyframes fadeEffect {
        0%, 100% {
            opacity: 0;
        }
        25%, 75% {
            opacity: 1;
        }
    }
}


/* Imagen de fondo de cada celda */
.highlight-cell--1 {
    background-image: url('/woocasino/bgcc1.jpg'); /* Fondo de la celda 1 */
}
.highlight-cell--2 {
    background-image: url('/woocasino/akk01.jpg'); /* Fondo de la celda 2 */
}
.highlight-cell--3 {
    background-image: url('/woocasino/bgcc3.jpg'); /* Fondo de la celda 3 */
}

/* Imagen PNG superpuesta */
.highlight-cell__image {
    position: absolute;
    top: -30%; /* Ajusta para que sobresalga del contenedor */
    left: 50%;
    transform: translateX(-50%);
    width: 120%; /* Hace que la imagen PNG sobresalga */
    z-index: 2; /* Asegura que esté encima */
}

/* Efecto luminoso debajo de la imagen PNG */
.highlight-cell::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 150px;
    height: 150px;
    background: radial-gradient(circle, rgba(138,43,226,0.6), rgba(0,0,255,0.3));
    border-radius: 50%;
    z-index: 1; /* Debajo de la imagen PNG */
    filter: blur(15px);
    opacity: 0;
    transition: opacity 0.3s ease;
}

@keyframes glowEffect {
    0% {
        opacity: 0.5;
        transform: translateX(-50%) scale(0.8);
    }
    100% {
        opacity: 1;
        transform: translateX(-50%) scale(1);
    }
}

/* Botón debajo de la imagen */
.highlight-cell__label {
    position: absolute;
    bottom: 10px;
    left: 50%;
    transform: translateX(-10%);
    font-size: 18px;
    font-weight: bold;
    color: #ffffff;
    text-transform: uppercase;
    z-index: 3;
    background: rgba(0, 0, 0, 0.8); /* Fondo oscuro translúcido */
    padding: 10px 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
    text-decoration: none;
    transition: background-color 0.3s, transform 0.3s;
}

.highlight-cell__label:hover {
    background-color: rgba(255, 255, 255, 0.2);
    transform: translateY(-3px);
}
.main-slider__promo {
    display: none !important;
}

/* Diseño responsivo */
@media (max-width: 768px) {
    .highlight-cells {
        flex-direction: column; /* Cambia el diseño a una columna */
        align-items: center; /* Centra las celdas */
        gap: 15px; /* Reduce el espacio entre las celdas */
    }

    .highlight-cell {
        width: 90%; /* Ajusta el ancho al 90% de la pantalla */
        height: 200px; /* Reduce la altura */
    }

    .highlight-cell__image {
        top: -20%; /* Ajusta la posición en móviles */
        width: 110%; /* Reduce el tamaño para móviles */
    }
}
</style>


<div class="search-button-container">
    <button id="openSearch" class="search-button"></button>
</div>


<div id="searchModal" class="search-modal">
    <div class="modal-content search-modal-content"> <!-- Nueva clase específica -->
        <span class="close">&times;</span>
        <input type="text" id="searchInput" class="search-input" placeholder="BUSCAR JUEGO...">
        <div id="modalResults" class="search-results"></div>
    </div>
</div>

<script>
$(document).ready(function () {
    const searchModal = $("#searchModal");
    const searchButton = $("#openSearch");
    const closeButton = $(".close");

    // Ocultar el modal al cargar (sin usar display: none)
    searchModal.css({ "opacity": "0", "visibility": "hidden" });

    // Mostrar el modal al hacer clic en la lupa
    searchButton.click(function () {
        console.log("🟢 Mostrando el buscador");
        searchModal.css({ "opacity": "1", "visibility": "visible" });
    });

    // Ocultar el modal al hacer clic en la "X"
    closeButton.click(function () {
        console.log("🔴 Cerrando el buscador");
        searchModal.css({ "opacity": "0", "visibility": "hidden" });
    });

    // También cerrar si el usuario hace clic fuera del contenido del modal
    $(document).click(function (event) {
        if (!$(event.target).closest(".modal-content, #openSearch").length) {
            searchModal.css({ "opacity": "0", "visibility": "hidden" });
        }
    });

    // Evento para detectar escritura en el input de búsqueda
    $("#searchInput").on("keyup", function () {
        var query = $(this).val().trim().toLowerCase();
        var results = $("#modalResults");
        results.empty(); // Limpiar resultados anteriores

        if (query.length > 2) {
            console.log("📡 Buscando juegos con:", query);

            $.getJSON("{{ route('frontend.game.search') }}?q=" + encodeURIComponent(query))
                .done(function (response) {
                    console.log("🔍 Respuesta de la API:", response);

                    if (response.success && response.data) {
                        results.html(response.data).show(); // Inyecta el HTML devuelto
                    } else {
                        results.html('<p class="no-results">No se encontraron juegos.</p>').show();
                    }
                })
                .fail(function (jqXHR, textStatus, errorThrown) {
                    console.error("❌ Error en la búsqueda:", textStatus, errorThrown);
                    results.html('<p class="no-results">Error al buscar juegos. Inténtalo de nuevo.</p>').show();
                });
        } else {
            results.hide();
        }
    });
});
</script>

<style>
/* 🔹 Estilos del botón de búsqueda */
/* 🔥 Botón de búsqueda flotante */
#searchModal {
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease, visibility 0.3s ease; /* Efecto de aparición suave */
}

.search-button-container {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 999; /* Asegura que esté por encima de otros elementos */
}

/* 🔹 Botón flotante */
.search-button {
    z-index: 9999 !important;
    width: 50px;
    height: 50px;
    background: rgba(11, 3, 22, 0.06); /* Color principal */
    border: none;
    border-radius: 50%; /* Lo hace redondo */
    cursor: pointer;
    box-shadow: 0 0 15px rgba(132, 48, 242, 0.6);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
}

/* 🔥 Efecto hover */
.search-button:hover {
    transform: scale(1.1);
    box-shadow: 0 0 20px rgba(255, 0, 255, 0.9);
}

/* 🌟 Ícono de lupa en PNG */
.search-button::before {
    content: "";
    position: absolute;
    width: 45px;
    height: 45px;
    background-image: url('/woocasino/lupa.png');
    background-size: contain;
    background-repeat: no-repeat;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

/* 🔹 Modal de búsqueda */
.search-modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8);
    display: flex;
    justify-content: center;
    align-items: center;
}

/* 🔹 Estilos específicos para el modal de búsqueda */
.search-modal-content {
    background: rgba(30, 30, 47, 0.9);
    width: 40%;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    position: relative;
    border: 2px solid rgba(132, 48, 242, 0.8);
    box-shadow: 0 0 20px rgba(132, 48, 242, 0.6);
}

/* Ajuste para móviles */
@media (max-width: 768px) {
    .search-modal-content {
        width: 90% !important;
        max-width: 400px;
        padding: 15px;
    }
}

/* 🔹 Botón para cerrar el modal */
.close {
    position: absolute;
    top: 10px;
    right: -25px;
    color: white;
    font-size: 28px;
    cursor: pointer;
}

/* 🔹 Caja de búsqueda con efecto neón y color azul eléctrico */
.search-input {
    width: 100%;
    padding: 12px;
    font-size: 18px;
    color: #00f0ff; /* Azul eléctrico brillante */
    background: rgba(0, 0, 0, 0.6); /* Fondo más oscuro */
    border: 2px solid rgba(132, 48, 242, 0.8);
    border-radius: 8px;
    text-align: center;
    outline: none;
    transition: all 0.3s ease;
    font-weight: bold;
}

.search-input::placeholder {
    color: rgba(0, 240, 255, 0.7); /* Azul eléctrico más tenue */
}

.search-input:focus {
    border-color: rgba(255, 255, 255, 0.9);
    box-shadow: 0 0 15px rgba(132, 48, 242, 0.8);
}

/* 🔹 Resultados de búsqueda */
.search-results {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 10px;
    padding: 15px;
    max-height: 300px;
    overflow-y: auto;
}

/* 🔹 Cada juego en los resultados */
.search-result-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 90px;
    padding: 5px;
    background: rgba(255, 255, 255, 0.05);
    border: 2px solid rgba(132, 48, 242, 0.8);
    border-radius: 8px;
    transition: transform 0.3s, box-shadow 0.3s;
}

.search-result-item:hover {
    transform: scale(1.1);
    box-shadow: 0 0 15px rgba(132, 48, 242, 0.9);
}

/* 🔹 Imagen del juego */
.search-result-img {
    width: 70px;
    height: 70px;
    border-radius: 5px;
}

/* 🔹 Nombre del juego */
.search-result-name {
    color: white;
    font-size: 12px;
    font-weight: bold;
    text-align: center;
    margin-top: 5px;
}

/* 🔹 Botones de jugar */
.search-result-buttons {
    display: flex;
    gap: 3px;
    margin-top: 5px;
}

.search-button-link {
    padding: 3px 6px;
    font-size: 10px;
    text-decoration: none;
    color: white;
    border-radius: 5px;
    transition: background 0.3s;
}

.search-button-demo {
    background: rgba(255, 255, 255, 0.2);
    border: 1px solid rgba(132, 48, 242, 0.8);
}

.search-button-play {
    background: rgba(132, 48, 242, 0.8);
    border: 1px solid white;
}

.search-button-play:hover {
    background: rgba(255, 255, 255, 0.8);
    color: black;
}

/* 🔹 Estilo para "No se encontraron juegos" */
.no-results {
    color: #bbb;
    padding: 10px;
    text-align: center;
}
@media (max-width: 768px) {
        /* 🔹 Ajustar el modal en móviles */
    .search-modal {
        align-items: flex-start !important; /* Alinea arriba */
        padding-top: 15vh; /* Espaciado desde la parte superior */
    }

    .modal-content {
        width: 90% !important; /* Ocupa más espacio en móviles */
        max-width: 400px; /* Tamaño máximo */
        padding: 15px; /* Reduce padding para ahorrar espacio */
    }

    .search-input {
        font-size: 16px !important; /* Ajusta el tamaño del texto */
        padding: 10px !important; /* Espaciado */
    }

    .close {
        font-size: 24px !important; /* Reduce el tamaño de la X */
        top: 5px !important; 
        right: 10px !important;
    }
    
    .search-button-container {
        bottom: 80px !important; /* Sube la lupa más arriba de los botones */
    }
    .search-button {
        width: 45px !important;  /* Hace el botón un poco más pequeño */
        height: 45px !important;
    }

    .search-button::before {
        width: 35px !important;  /* Ajusta el tamaño del ícono */
        height: 35px !important;
    }
}

</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const params = new URLSearchParams(window.location.search);

        if (params.has('scroll') && params.get('scroll') === 'true') {
            // Detectar si es móvil o escritorio
            const isMobile = window.innerWidth <= 768; // Definición de ancho para dispositivos móviles

            // Definir el porcentaje de desplazamiento
            const scrollPercentage = isMobile ? 2.7 : 2.1; // Ajusta según necesites: 30% para móviles, 50% para escritorio

            // Realiza el desplazamiento
            setTimeout(() => {
                window.scrollTo({
                    top: window.innerHeight * scrollPercentage,
                    behavior: 'smooth', // Desplazamiento suave
                });
            }, 300); // Tiempo de espera (ajusta si es necesario)
        }
    });
</script>

        </div>
        <!-- uiView: -->
        <div class="ng-scope">
            <!-- uiView: -->
            <div class="contain ng-scope">
                <section class="games-list ng-isolate-scope">
                    <div class="games-list__title-wrp">
                        <h1 class="games-list__title ng-scope"></h1>
                    </div>
                    <div class="games-list__wrap ng-scope" id="games-section">
    @if ($games && count($games))
        @php
            $games = $games->shuffle(); // Mezcla los juegos de forma aleatoria
        @endphp
        @foreach ($games as $key => $game)
            <div class="game-item ng-scope game-item--hidden" 
                 data-index="{{ $key }}"> <!-- Usamos data-index para identificar cada juego -->
                <div class="game-item game-item--overflow ng-scope">
                    <div class="game-item__block">
                        <img class="game-item__img" 
                             src="{{ $game->name ? '/frontend/Default/ico/' . $game->name . '.jpg' : '' }}" 
                             casino-lazy-src="{{ $game->name ? '/frontend/Default/ico/' . $game->name . '.jpg' : '' }}" 
                             alt="{{ $game->title }}" loading="true" style="opacity: 1;">
                    </div>
                    <div class="game-item__labels">
                        @if($game->label)
                            <div class="game-item__label game-item__label--hot ng-binding ng-scope">{{ mb_strtoupper($game->label) }}</div>
                        @endif
                    </div>
                    <div class="game-item__overlay ng-scope">
                        <div class="game-item__actions">
                            @if(isset(auth()->user()->username) && auth()->user()->balance > 0)
                                <a href="{{ route('frontend.game.go', $game->name) }}?api_exit=/" 
                                   class="button button-primary ng-scope ng-binding">@lang('app.play_now')</a>
                            @elseif(isset(auth()->user()->username) && auth()->user()->balance == 0)

                            @else
                                <a href="javascript:;" 
                                   class="button button-primary ng-scope ng-binding" 
                                   ng-click="openModal($event, '#login-modal')">@lang('app.login')</a>
                            @endif
                        </div>
                    </div>
                    <div class="game-item__panel">
                        <p class="game-item__panel-title ng-binding">{{ $game->title }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>


<!-- Botón de "Cargar más" -->
<button id="loadMoreGames" class="button button-secondary">Cargar más</button>

</div>
<!-- Bloque de banners -->
<div class="banners-section newbanners">
    <!-- Banner 1 -->
    <div class="banner">
        <video class="banner-video" autoplay loop muted>
            <source src="/woocasino/701.mp4" type="video/mp4">
            Tu navegador no soporta videos.
        </video>
        <a href="" class="banner-button banner-button-left">DEPORTIVAS</a>
    </div>

    <!-- Banner 2 -->
    <div class="banner">
        <video class="banner-video" autoplay loop muted>
            <source src="/woocasino/700.mp4" type="video/mp4">
            Tu navegador no soporta videos.
        </video>
        <a href="https://leviatan.bet/game/CasinoHoldemPG" class="banner-button banner-button-right">casino hold`em</a>
    </div>
</div>


<footer class="footerp">
    <div class="footerp-container">
        <!-- Logo desvanecido -->
        <div class="footerp-logo-wrapper">
            <img src="/woocasino/logofooterdesvanecido.png" alt="Logo Desvanecido" class="footerp-logo-desvanecido">
        </div>
        
        <!-- Contenido principal del footer -->
        <div class="footerp-content">
            <!-- Sección de información -->
            <div class="footerp-section">
                <img src="/woocasino/logofooter.png" alt="Logo" class="footerp-logo">
                <p>2025 Todos los derechos reservados. Sitio operado bajo Licencia de Curazao - Antillas Holandesas.</p>
                <button class="footerp-button">IDIOMA</button>
            </div>

            <!-- Sección de enlaces -->
            <div class="footerp-section">
                <h3>Secciones</h3>
                <ul class="footerp-links">
                    <li><a href="#">Casino</a></li>
                    <li><a href="#">Casino en vivo</a></li>
                    <li><a href="#">Deportes</a></li>
                </ul>
            </div>

            <!-- Sección de juegos -->
            <div class="footerp-section">
                <h3>Juegos</h3>
                <ul class="footerp-links">
                    <li><a href="#">Tragamonedas</a></li>
                    <li><a href="#">Ruleta</a></li>
                    <li><a href="#">Ruleta en vivo</a></li>
                    <li><a href="#">Blackjack en vivo</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const games = document.querySelectorAll('.game-item'); // Todos los juegos
    const loadMoreBtn = document.getElementById('loadMoreGames');
    const gamesPerPage = 6; // Número de juegos a mostrar por cada clic
    let visibleGames = 0; // Número de juegos actualmente visibles

    // Mostrar los primeros 6 juegos
    function showGames() {
        const nextGames = Array.from(games).slice(visibleGames, visibleGames + gamesPerPage);
        nextGames.forEach(game => game.classList.remove('game-item--hidden'));
        visibleGames += gamesPerPage;

        // Oculta el botón si ya no hay más juegos
        if (visibleGames >= games.length) {
            loadMoreBtn.style.display = 'none';
        }
    }

    // Llamada inicial para mostrar los primeros juegos
    showGames();

    // Evento para cargar más juegos
    loadMoreBtn.addEventListener('click', showGames);
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const searchToggle = document.getElementById('floatingSearchToggle'); // Botón de la lupa
    const searchBox = document.getElementById('floatingSearchBox'); // Caja de búsqueda
    const searchInput = document.getElementById('floatingSearchInput'); // Input de búsqueda

    // Asegúrate de que los elementos existen
    if (searchToggle && searchBox && searchInput) {
        // Alternar la visibilidad de la caja de búsqueda
        searchToggle.addEventListener('click', function () {
            searchBox.classList.toggle('open');
            if (searchBox.classList.contains('open')) {
                searchInput.focus(); // Enfocar el input cuando se abra la caja
            } else {
                searchInput.value = ''; // Limpiar el input al cerrar la caja
            }
        });
    } else {
        console.error('No se encontraron los elementos del buscador. Revisa los IDs en el HTML.');
    }
});

<script>


    </main>
    <script>
    var timerHdle = null;
    function call_timer() {
        return setInterval(() => {
            $('.carousel-inner').each(function(){
                if($(this).find('.item.active').index() < 4) {
                    $(this).find('.item.active').removeClass('active').next().addClass('active');
                } else {
                    $(this).find('.item.active').removeClass('active');
                    $(this).find('.item').eq(0).addClass('active');
                }
                if($(this).find('.main-slider__promo.active').index() < 4) {
                    $(this).find('.main-slider__promo.active').removeClass('active').next().addClass('active');
                } else {
                    $(this).find('.main-slider__promo.active').removeClass('active');
                    $(this).find('.main-slider__promo').eq(0).addClass('active');
                }
            })
            $('.carousel-indicators').each(function(){
                if($(this).find('li.active').index() < 4) {
                    $(this).find('li.active').removeClass('active').next().addClass('active');
                } else {
                    $(this).find('li.active').removeClass('active');
                    $(this).find('li').eq(0).addClass('active');
                }
            })
        }, 5000);
    }
    timerHdle = call_timer()
    $('.carousel-indicators').find('li').click(function(){
        clearInterval(timerHdle)
        var index = $(this).index()
        $(this).parent().find('.active').removeClass('active')
        $(this).parent().find('li').eq(index).addClass('active');

        $(this).parent().parent().find('.carousel-inner .item.active').removeClass('active')
        $(this).parent().parent().find('.carousel-inner .item').eq(index).addClass('active')

        $(this).parent().parent().find('.carousel-inner .main-slider__promo.active').removeClass('active')
        $(this).parent().parent().find('.carousel-inner .main-slider__promo').eq(index).addClass('active')
        timerHdle = call_timer()
    })
    $('.providers__toggler').click(function(){
        $('.providers__dropdown').toggleClass('ng-hide');
    })
    </script>
    


@section('scripts') 
    <!-- Cargar jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Script del slider -->
    <script>
    var timerHdle = null;
    function call_timer() {
        return setInterval(() => {
            $('.carousel-inner').each(function(){
                if($(this).find('.item.active').index() < 4) {
                    $(this).find('.item.active').removeClass('active').next().addClass('active');
                } else {
                    $(this).find('.item.active').removeClass('active');
                    $(this).find('.item').eq(0).addClass('active');
                }
                if($(this).find('.main-slider__promo.active').index() < 4) {
                    $(this).find('.main-slider__promo.active').removeClass('active').next().addClass('active');
                } else {
                    $(this).find('.main-slider__promo.active').removeClass('active');
                    $(this).find('.main-slider__promo').eq(0).addClass('active');
                }
            })
            $('.carousel-indicators').each(function(){
                if($(this).find('li.active').index() < 4) {
                    $(this).find('li.active').removeClass('active').next().addClass('active');
                } else {
                    $(this).find('li.active').removeClass('active');
                    $(this).find('li').eq(0).addClass('active');
                }
            })
        }, 5000);
    }
    timerHdle = call_timer();

    // Click en los indicadores para cambiar manualmente de slide
    $('.carousel-indicators').find('li').click(function(){
        clearInterval(timerHdle);
        var index = $(this).index();
        $(this).parent().find('.active').removeClass('active');
        $(this).parent().find('li').eq(index).addClass('active');

        $(this).parent().parent().find('.carousel-inner .item.active').removeClass('active');
        $(this).parent().parent().find('.carousel-inner .item').eq(index).addClass('active');

        $(this).parent().parent().find('.carousel-inner .main-slider__promo.active').removeClass('active');
        $(this).parent().parent().find('.carousel-inner .main-slider__promo').eq(index).addClass('active');

        timerHdle = call_timer();
    });

    $('.providers__toggler').click(function(){
        $('.providers__dropdown').toggleClass('ng-hide');
    });
    </script>
@endsection


@stop
