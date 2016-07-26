    
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-12 col-lg-offset-0 col-xl-10 col-xl-offset-1">
                    <div class="row">
                        <div class="hidden-xs-down col-sm-12 col-lg-6">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <h3 class="footer_title">Туры</h3>
                                    <ul class="footer_menu">
                                        <li><a href="#">Прага</a></li>
                                        <li><a href="#">Чехия</a></li>
                                        <li><a href="#">Европа</a></li>
                                        <li><a href="#">Индивидуальные экскурсии</a></li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <h3 class="footer_title">Информация</h3>
                                    <ul class="footer_menu">
                                        <li><a href="#">Блог</a></li>
                                        <li><a href="#">Условия</a></li>
                                        <li><a href="#">Карта сайта</a></li>
                                        <li><a href="#">Видео</a></li>
                                        <li><a href="#">Наши партнёры</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-6">
                            <div class="footer_pay">
                                <h3 class="footer_title">Способы оплаты</h3>
                                <ul class="footer_pay_list">
                                    <li>
                                        <svg width="42" height="25">
                                            <use xlink:href="#pay_1"></use>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg width="46" height="25">
                                            <use xlink:href="#pay_2"></use>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg width="100" height="25">
                                            <use xlink:href="#pay_3"></use>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg width="96" height="25">
                                            <use xlink:href="#pay_4"></use>
                                        </svg>
                                    </li>
                                    <li>
                                        <img style="width: 95px; height: 25px;" src="style/img/pay_5.png" alt="">
                                    </li>
                                </ul>
                            </div>
                            <div class="footer_mailing">
                                <h3 class="footer_title">Будь всегда в курсе событий</h3>
                                <form class="footer_mailing_form">
                                    <input class="col-xs-8 footer_mailing_form_input" type="text" placeholder="Ваша почта">
                                    <a href="#" class="col-xs-4 footer_mailing_form_btn">Подписаться</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-12 col-lg-offset-0 col-xl-10 col-xl-offset-1 footer_copyright">
                    <p>© 2001—2016 <a href="#">Мегатур</a>. Все права защищены.</p>
                </div>
            </div>
        </div>
    </footer>
    
    </div><!-- END wrapper -->
    
    <!-- Login modal -->
    <div id="login-modal" class="mfp-hide modal modal_white">
        <div>
            <p class="modal_title">
                Войти
                <a href="#reg-modal" class="modal_tabLink open-popup-link">Регистрация</a>
            </p>
            <form class="form textBox">
                <p><input class="form_input" type="email" placeholder="Електронная почта"></p>
                <p><input class="form_input" type="password" placeholder="Пароль"></p>
                <p><label><input type="checkbox"> Запомнить меня</label></p>
                <p class="btnBox"><input type="submit" value="Войти" class="yellow_btn"></p>
            </form>
        </div>
    </div>

    <!-- Login modal -->
    <div id="reg-modal" class="mfp-hide modal modal_white">
        <div>
            <p class="modal_title">
                Регистрация
                <a href="#login-modal" class="modal_tabLink open-popup-link">Войти</a>
            </p>
            <p class="modal_desc">Все поля обязательны к заполнению</p>
            <p class="modal_desc">Вся введённая вами информация<br> надёжно защищена от третьих лиц</p>
            <br>
            <form class="form textBox">
                <p><input class="form_input" type="text" placeholder="ФИО"></p>
                <p><input class="form_input" type="tel" placeholder="Телефон"></p>
                <p><input class="form_input" type="text" placeholder="Назваине организации"></p>
                <p><input class="form_input" type="text" placeholder="Адрес"></p>
                <p><input class="form_input" type="text" placeholder="ИНН"></p>
                <p><input class="form_input" type="email" placeholder="Електронная почта"></p>
                <p><input class="form_input" type="password" placeholder="Пароль"></p>
                <p><input class="form_input" type="password" placeholder="Подтверждение пароля"></p>
                <p><label><input type="checkbox"> я прочитал <a href="#" target="_blank">информацию для партнёров</a></label></p>
                <p class="btnBox"><input type="submit" value="Зарегистрироваться" class="yellow_btn"></p>
            </form>
        </div>
    </div>

    <!-- Welcome modal -->
    <div id="welcome-modal" class="mfp-hide modal modal_white">
        <div>
            <p class="modal_logo"><img src="style/img/mega-retro-black-yo.png" alt=""></p>
            <p class="modal_title">Добро пожаловать!</p>
            <p class="modal_text">Благодарим за то, что вы с нами!</p>
        </div>
    </div>

    <!-- Menu modal -->
    <div id="menu-modal" class="mfp-hide modal modal_black">
        <div>
            <form class="modal_search">
                <input class="modal_search_input" type="text" placeholder="Поиск">
                <button class="modal_search_btn" type="button"></button>
            </form>
            <ul class="modal_menu yellow">
                <li><a href="#">Новости и акции</a></li>
                <li><a href="#">Расчёт тура</a></li>
                <li><a href="#">Отзывы</a></li>
            </ul>
            <ul class="modal_menu">
                <li><a href="#">Услуги</a></li>
                <li><a href="#">Экскурсии</a></li>
                <li><a href="#">О нас</a></li>
                <li><a href="#">Блог</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>
            <div class="modal_link">
                <?php
                $login = true;
                if($login){ ?>
                    <a href="#login-modal" class="open-popup-link">Вход для партнёров</a>
                <?php } else { ?>
                    <a href="#login-modal" class="open-popup-link">Мой профиль</a>
                <?php } ?>
            </div>
        </div>
    </div>

    <!--[if lt IE 9]>
    <script src="libs/html5shiv/es5-shim.min.js"></script>
    <script src="libs/html5shiv/html5shiv.min.js"></script>
    <script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
    <script src="libs/respond/respond.min.js"></script>
    <![endif]-->

    <!-- Load CSS -->
    <script>
        function loadCSS(hf) {
            var ms=document.createElement("link");ms.rel="stylesheet";
            ms.href=hf;document.getElementsByTagName("body")[0].appendChild(ms);
        }
        loadCSS("style/css/bs4_grid.css");
        loadCSS("style/libs/jQueryFormStyler-master/jquery.formstyler.min.css");
        loadCSS("style/libs/jquery-ui-1.11.4/jquery-ui.min.css");
        loadCSS("style/libs/owl.carousel.2.0.0-beta.2.4/owl.carousel.min.css");
        loadCSS("style/libs/Magnific-Popup/magnific-popup.min.css");
        loadCSS("style/css/style.min.css");
    </script>
    
    <!-- Load Scripts -->
    <script>var scr = {"scripts":[
            {"src" : "style/libs/jquery/jquery-3.0.0.min.js", "async" : false},
            {"src" : "style/libs/jquery/jquery-migrate-1.4.1.min.js", "async" : false},
            {"src" : "style/libs/jquery-ui-1.11.4/jquery-ui.min.js", "async" : false},
            {"src" : "style/libs/jquery-ui-1.11.4/jquery.ui.touch-punch.min.js", "async" : false},
            {"src" : "style/libs/owl.carousel.2.0.0-beta.2.4/owl.carousel.min.js", "async" : false},
            {"src" : "style/libs/Magnific-Popup/jquery.magnific-popup.min.js", "async" : false},
            {"src" : "style/libs/jQueryFormStyler-master/jquery.formstyler.min.js", "async" : false},
            {"src" : "style/libs/inputmask/jquery.maskedinput.min.js", "async" : false},
            {"src" : "style/js/my_scripts.js", "async" : false},
        ]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);</script>