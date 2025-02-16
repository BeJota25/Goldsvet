<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>{{ $game->title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <base href="/games/LuckyCountAT/" target="_blank">
    <meta name="msapplication-TileColor" content="#db5c4c">
    <meta name="theme-color" content="#db5c4c">
    <link rel="stylesheet" href="_css/reset.css" type="text/css">
    <link rel="stylesheet" href="_css/style.css" type="text/css">
    <script type="text/javascript" src="_js/jquery-2.1.3.min.js"></script>
    <style>

        /* Botón de inicio */
        #start-button {
            position: absolute;
            bottom: 20%;
            left: 50%;
            transform: translateX(-50%);
            z-index: 2;
            cursor: pointer;
            width: 150px;
            height: 50px;
        }

        #start-button img {
            width: 100%;
            height: auto;
            animation: glow 2s infinite;
        }

        @keyframes glow {
            0% {
                filter: drop-shadow(0 0 10px #FFD700);
            }
            50% {
                filter: drop-shadow(0 0 20px #FFD700);
            }
            100% {
                filter: drop-shadow(0 0 10px #FFD700);
            }
        }

        /* Ocultar el contenedor del juego inicialmente */
        #gameDiv {
            display: none;
        }
    </style>
</head>
<body>
    <!-- Video de fondo -->
    <video id="intro-video" autoplay muted loop playsinline>
        <source id="video-source" src="/games/LuckyCountAT/aristocrat/lucky_count/images/intro/intro.mp4" type="video/mp4">
        Tu navegador no soporta videos HTML5.
    </video>

    <!-- Botón de inicio -->
    <div id="start-button">
        <img src="/games/LuckyCountAT/aristocrat/lucky_count/images/intro/boton0.png" alt="Iniciar Juego">
    </div>

    <!-- Contenedor del juego -->
    <div id="gameDiv" style="width:100%;height:100%;background:#000;"></div>

    <!-- Scripts -->
    <script>
        const isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
        const videoSource = document.getElementById('video-source');
        const video = document.getElementById('intro-video');

        // Cambiar video para móviles
        if (isMobile) {
            videoSource.src = "/games/LuckyCountAT/aristocrat/lucky_count/images/intro/intromv.mp4";
            video.load();
        }

        // Asegurar autoplay
        video.play().catch((e) => {
            console.error("Error en autoplay:", e);
            document.body.addEventListener('click', () => video.play());
        });

        // Evento del botón Start
        document.getElementById('start-button').addEventListener('click', function () {
            video.pause(); // Pausar video
            video.style.display = 'none'; // Ocultar video
            this.style.display = 'none'; // Ocultar botón de inicio
            document.getElementById('gameDiv').style.display = 'block'; // Mostrar el juego

            // Inicializar el juego
            $('<script type="text/javascript" src="_js/loader.js"></' + 'script>').appendTo(document.body);
            loader.init({
                server: location.hostname + '/game/LuckyCountAT/server?sessionId=' + sessionStorage.getItem('sessionId'),
                gameDiv: 'gameDiv',
                closeButton: false
            });
        });
    </script>
</body>
</html>

