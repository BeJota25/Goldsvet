<script type="text/javascript">

    @if((isset ($errors) && count($errors) > 0) || Session::get('success', false))
    show_notifications();
    @endif

    $('body').on('click', '#send', function(event){
        var pincode = $('#inputPin').val();
        $.ajax({
            url: "{{ route('frontend.profile.pincode') }}",
            type: "GET",
            data: {pincode : pincode},
            dataType: "json",
            success: function(data){
                if( data.fail ){
                    $('.modal__notifications-block').html('<div class="alert alert-danger"><h4>Error</h4><p>' + data.error + '</p></div>');
                    show_notifications();
                }
                if( data.success ){
                    window.location.reload();
                }
            }
        });
    });

    $('body').on('click', '#verifyMyPhone', function(event){
        var phone = $('#myPhone').val();
        $.ajax({
            url: "{{ route('frontend.profile.phone') }}",
            type: "GET",
            data: {phone : phone},
            dataType: "json",
            success: function(data){
                if( data.fail ){
                    $('#verifyMyPhone').parents('.modal').find('.error-message').html(data.text).show();
                }
                if( data.success ){
                    show_modal('modal-invite-2');
                }
            }
        });
    });


    $('body').on('click', '#ckeckCode', function(event){
        var code = $('#myCode').val();
        $.ajax({
            url: "{{ route('frontend.profile.code') }}",
            type: "GET",
            data: {code : code},
            dataType: "json",
            success: function(data){
                $('#inputPhone').val('');
                if( data.fail ){
                    $('#ckeckCode').parents('.modal').find('.error-message').html(data.text).show();
                }
                if( data.success ){
                    window.location.reload();
                }
            }
        });
    });

    $('body').on('click', '#sendPhone', function(event){
        var phone = $('#inputPhone').val();
        $.ajax({
            url: "{{ route('frontend.profile.sms') }}",
            type: "GET",
            data: {phone : phone},
            dataType: "json",
            success: function(data){
                $('#inputPhone').val('');
                if( data.fail ){
                    $('#sendPhone').parents('.modal').find('.error-message').html(data.text).show();
                }
                if( data.success ){

                    if( !$('.modal__invite-phones').length){
                        $('.modal__invite-title').text('Invited friends');
                        $('.modal__invite-subtitle').remove();
                        $('.modal__invite-place').addClass('modal__invite-phones').removeClass('modal__invite-place');
                    }

                    $('.modal__invite-phones').append(
                        '<div class="modal__invite-row">' +
                        '<div class="modal__invite-info">' +
                        '<div class="modal__invite-date">'+ data.data.created +'</div>' +
                        '<span class="modal__invite-valid">Until '+ data.data.until +'</span>' +
                        '<div class="modal__invite-phones-value">'+ data.data.phone +'</div>' +
                        '</div>' +
                        '</div>'
                    );



                }
            }
        });
    });

    $('body').on('click', '.take_reward', function(event){
        var reward_id = $(event.target).data('id');
        console.log(reward_id);

        $.ajax({
            url: "{{ route('frontend.profile.reward') }}",
            type: "GET",
            data: {reward_id : reward_id},
            dataType: "json",
            success: function(data){
                console.log(data);
                if( data.fail ){
                    $(event.target).parents('.modal__invite-row').find('.error-message').html(data.text).show();
                }
                if( data.success ){
                    /*
                    $('.close-btn').click();
                    var popup = $('div.popup-1');
                    popup.find('.popup__value').attr('data-attr', parseInt(data.value));
                    popup.find('.popup__value').html(parseInt(data.value));
                    popup.addClass('active');
                    */
                    $('#reward' + reward_id).remove();
                }
            }
        });

    });


    $(document).on('click', '#refunds', function(e) {
        e.preventDefault();
        $.get('{{ route('frontend.profile.refunds')  }}', function(data) {
            if (data.success) {

                if(data.value){
                    $('.close-btn').click();

                    var popup = $('div.popup-1');

                    popup.find('.popup__value').attr('data-attr', parseInt(data.value));
                    popup.find('.popup__value').html(parseInt(data.value));
                    popup.addClass('active');

                    $('.overlay').toggle();
                    $('body').toggleClass('locked');

                    $('.balanceValue').text(data.balance + ' ' + data.currency);
                    $('.count_refund').text(data.count_refund + ' ' + data.currency);
                    $('.refunds-icon').addClass('disabled');

                    $('.count_refund').attr('id', '');
                }

            }
            if (data.fail) {
                $('.modal__notifications-block').html('<div class="alert alert-danger"><h4>Error</h4><p>' + data.text + '</p></div>');
                show_notifications();
            }
        }, 'json');
    });

    $(document).on('keyup', '.search', function() {
        var query = $(this).val().toLowerCase();
        if(query.length > 2)doSearch(query);
    });

    function OnSearch(input) {
        var query = input.value.toLowerCase();
        doSearch(query);
    }

    function doSearch(query){
        $.getJSON('{{ route('frontend.game.search')  }}?category1={{ $category1 }}&q=' + query, function(data) {
			$('#woocasino > section > main > div.ng-scope > div > section > .games-list__title-wrp > h1').html(query + ' Search Results');
			$('#woocasino > section > main > div.ng-scope > div > section > div.games-list__wrap.ng-scope').html(data.data);
        });
    }

    function show_notifications() {
        $('.close-btn').click();
        $('div.modal-notifications').addClass('active');
        $('.overlay').show();
        $('body').addClass('locked');
    }

    function show_modal(modal) {
        $('.close-btn').click();
        $('div.' + modal).addClass('active');
        $('.overlay').show();
        $('body').addClass('locked');
    }

    setTimeout(function () {
        $('form#payment_form').submit();
    }, 5000);

</script>
<link rel="stylesheet" href="/woocasino/css/appef20.css">
<style type="text/css">
.info-value {
	color:grey;
}
.table__date{
	color:grey;
}
.table__game{
	color:grey;
}
.table__bet {
	color:grey;
}

.table__win{
	color:grey;
}

.table__deposit {
	color:grey;
}

.table__status{
	color:grey;
}
.table__num{
	color:grey;
}

</style>

<header class="header">
    <div class="header__mob-container">
        <div class="header__logo">
            <a class="header__logo-link" scroll-up="" href="#">
                <img class="header__logo-img" src="/woocasino/resources/images/logo.png" alt="WooCasino">
            </a>
        </div>
        <div class="header__mob-wrp">
            <!-- Información del usuario (solo para móviles) -->
            @if(auth()->check())
                <div class="header__user-info">
                    <span class="header__username"> {{ auth()->user()->username }}</span>
                    <span class="header__balance">@lang('Saldo: ') 
                        {{ number_format(auth()->user()->balance, 2, '.', ',') }} 
                        {{ isset($currency) ? $currency : 'USD' }}
                    </span>
                </div>
            @endif

            <!-- Botón de logout -->
            <a class="header__mob-btn button button-secondary button-small" href="/logout">
                @lang('SALIR')
            </a>

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

<div class="modal" id="my-account" style="display: none;">
    <header class="modal__header">
        <span ng-click="closeModal($event)" class="modal__icon icon icon_cancel js-close-popup"></span>
    </header>
    <div class="popup2">
        <div class="popup2__body">
            <!-- Contenido del modal -->
            <div class="modal__content" style="padding: 20px; text-align: center;">
                <p class="text-center" style="font-size: 1.5rem; color: #fff; margin-bottom: 10px;">
                    Welcome, {{ auth()->user()->username }}!
                </p>
                <p class="text-center" style="font-size: 1.2rem; color: #d7e83f;">
                    Your balance: {{ number_format(auth()->user()->balance, 2, '.', '') }} {{ isset($currency) ? $currency : 'USD' }}
                </p>
            </div>
        </div>
    </div>
</div>

