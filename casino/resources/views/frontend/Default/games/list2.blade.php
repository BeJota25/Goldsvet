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
    <!-- BLOCK WITH GAMES -->
    <main class="carcass__body">
        <div class="main-content">
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
            <div class="image-carousel" style="overflow: hidden; position: relative; width: 100%; max-width: 900px; height: auto; margin: 20px auto;">
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
transform: translate(-50%, -10%);
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

/* Efecto hover para cambiar entre imágenes */
.custom-cell:hover img.custom-img-1 {
transform: translate(-50%, -50%) scale(1.2);
opacity: 0;
}
.custom-cell:hover img.custom-img-2 {
transform: translate(-50%, -85%) scale(1);
opacity: 1;
}

/* Botón en la parte inferior */
.custom-button {
position: absolute;
bottom: 10px;
left: 50%;
transform: translateX(-50%);
z-index: 3;
padding: 10px 20px;
font-size: 16px;
background-color: #ffcc00;
border: none;
border-radius: 5px;
cursor: pointer;
transition: background-color 0.3s;
}
.custom-button:hover {
background-color: #ffaa00;
}

/* Estilo responsive para móviles */
@media (max-width: 768px) {
.custom-interactive-cells {
    flex-direction: column; /* Cambia el diseño a columnas */
    align-items: center; /* Centra las celdas */
}

.custom-cell {
    width: 90%; /* Ajusta el ancho de las celdas en móviles */
    height: 300px; /* Reduce la altura de las celdas en móviles */
}
}
</style>

<div class="custom-interactive-cells">
<!-- Celda 1 -->
<div class="custom-cell">
    <img src="/woocasino/celda1-1.png" alt="Celda 1 Imagen 1" class="custom-img-1">
    <img src="/woocasino/celda1-2.png" alt="Celda 1 Imagen 2" class="custom-img-2">
    <button class="custom-button">Boton</button>
</div>
<!-- Celda 2 -->
<div class="custom-cell">
    <img src="/woocasino/celda2-1.png" alt="Celda 2 Imagen 1" class="custom-img-1">
    <img src="/woocasino/celda2-2.png" alt="Celda 2 Imagen 2" class="custom-img-2">
    <button class="custom-button">Boton</button>
</div>
<!-- Celda 3 -->
<div class="custom-cell">
    <img src="/woocasino/celda3-1.png" alt="Celda 3 Imagen 1" class="custom-img-1">
    <img src="/woocasino/celda3-2.png" alt="Celda 3 Imagen 2" class="custom-img-2">
    <button class="custom-button">Boton</button>
</div>
<!-- Celda 4 -->
<div class="custom-cell">
    <img src="/woocasino/celda4-1.png" alt="Celda 4 Imagen 1" class="custom-img-1">
    <img src="/woocasino/celda4-2.png" alt="Celda 4 Imagen 2" class="custom-img-2">
    <button class="custom-button">Boton</button>
</div>
</div>
        </div>
        <!-- uiView: -->
        <div class="ng-scope">
            <!-- uiView: -->
            <div class="contain ng-scope">
                <section class="games-list ng-isolate-scope">
                    <div class="games-list__title-wrp">
                        <h1 class="games-list__title ng-scope"></h1>
                    </div>
                    <div class="games-list__wrap ng-scope">
                        @if ($games && count($games))
                        @php
                            $games = $games->shuffle(); // Mezcla los juegos de forma aleatoria
                        @endphp
                        @foreach ($games as $key => $game)
                        <div class="game-item ng-scope">
                            <div class="game-item game-item--overflow ng-scope">
                                <div class="game-item__block">
                                    <img class="game-item__img" src="{{ $game->name ? '/frontend/Default/ico/' . $game->name . '.jpg' : '' }}" casino-lazy-src="{{ $game->name ? '/frontend/Default/ico/' . $game->name . '.jpg' : '' }}" alt="{{ $game->title }}" loading="true" style="opacity: 1;">

                                    <!-- ngIf: game | gameJackpotByCurrency : $root.data.user.currency : 'ARS' -->
                                </div>

                                    <div class="game-item__labels">
                                        @if($game->label)
                                        <div class="game-item__label game-item__label--hot ng-binding ng-scope">{{ mb_strtoupper($game->label) }}</div>
                                        @endif
                                        <div class="game-item__label game-item__label--bitcoin ng-scope"></div>
                                    </div>
                                    <div class="game-item__label-live ng-scope"> <span class="game-item__label-live-txt">Active</span> </div>
                                    <div class="game-item__overlay ng-scope">
                                        <div class="game-item__actions">
                                           @if(isset(auth()->user()->username) && auth()->user()->balance > 0)
                                                <a href="{{ route('frontend.game.go', $game->name) }}?api_exit=/" class="button button-primary ng-scope ng-binding">@lang('app.play_now')</a>
                                            @elseif(isset(auth()->user()->username) && auth()->user()->balance == 0)

                                            @else
                                                <a href="{{ route('frontend.game.go', $game->name) }}/prego?api_exit=/" class="button button-primary ng-scope ng-binding">Demo</a>
											<br>
                                                <a href="javascript:;" class="button button-primary ng-scope ng-binding" ng-click="openModal($event, '#login-modal')">@lang('app.login')</a>
                                            @endif
                                            <!-- <button class="button button-primary ng-scope ng-binding">@lang('play_now')</button> -->
                                        </div>
                                    </div>
                                    <div class="game-item__panel">
                                        <p class="game-item__panel-title ng-binding">{{ $game->title }}</p>
                                        <!-- ngIf: $root.data.user.email && $root.data.device === 'mobile' -->
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                    </div>
            </div>
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
    
@stop

@section('scripts')
@stop
