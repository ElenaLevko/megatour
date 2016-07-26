<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->
<html <?php if($amp["have"] == true):?>amp<?php endif; ?> lang="en">
<head>
    
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="style/img/favicon.ico" type="image/x-icon">

    <style type="text/css">
        #page-preloader {
            position: fixed;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            width: 100vw;
            height: 100vh;
            background: #FFF;
            z-index: 100500;
        }
        #page-preloader .spinner {
            width: 100px;
            height: 48px;
            position: absolute;
            left: 50%;
            top: 50%;
            margin: -24px 0 0 -50px;
            color: #FFF;
            text-align: center;
        }
    </style>

    <?php if($amp["have"] == true):?>
    <link rel="amphtml" href="<?php echo $amp["page"]; ?>.amp.php">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <?php else: ?>
    <link rel="canonical" href="<?php echo $amp["page"]; ?>.php">
    <?php endif; ?>
    
    
</head>
<body>


<div id="page-preloader">
    <span class="spinner">
        <img src="style/img/712.gif" alt="">
    </span>
</div>

<!-- load combined svg file (with symbols) into body-->
<script>
    (function (doc) {
        var scripts = doc.getElementsByTagName('script');
        var script = scripts[scripts.length - 1];
        var xhr = new XMLHttpRequest();
        xhr.onload = function () {
            var div = doc.createElement('div');
            div.innerHTML = this.responseText;
            div.style.display = 'none';
            script.parentNode.insertBefore(div, script)
        };
        xhr.open('get', 'style/img/svg.svg', true);
        xhr.send()
    })(document)
</script>

<div class="wrapper">

    <header class="header header_bg_2" itemscope itemtype="http://schema.org/WPHeader">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 header_toolbar">
                    <div class="header_logo" itemscope itemtype="http://schema.org/Organization">
                        <meta itemprop="name" content="Мегатур">
                        <meta itemprop="address" content="11000, Вацлавская площадь 846/1">
                        <meta itemprop="telephone" content="+ (420) 776 284 307">
                        <a itemprop="url" href="../index.php" class="block"><img itemprop="logo" src="style/img/logo.png" alt="logo"></a>
                    </div>
                    <ul class="header_menu hidden-lg-down">
                        <li class="active"><a href="#">Экскурсии</a></li>
                        <li><a href="#">Услуги</a></li>
                        <li><a href="#">О нас</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                    <div>
                        <div class="header_money">
                            <div>
                                <a class="active" href="#">USD</a>
                                <div class="dropdown">
                                    <ul>
                                        <li><a href="#">CZK - Чешская крон</a></li>
                                        <li><a href="#">USD - USD</a></li>
                                        <li><a href="#">EUR - Евро</a></li>
                                        <li><a href="#">RUB - Русский рубль</a></li>
                                        <li><a href="#">GBP - Фунты стерлинги</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <ul class="header_lang">
                            <div>
                                <a class="active" href="#">
                                    <span class="">RUS</span>&#160;
                        <span class="hidden-lg-down">
                            <svg width="14" height="14">
                                <use xlink:href="#lang_ru"></use>
                            </svg>
                        </span>
                                </a>
                                <div class="dropdown">
                                    <ul>
                                        <li><a href="#">Russian</a></li>
                                        <li><a href="#">Ukrainian</a></li>
                                        <li><a href="#">Czech</a></li>
                                        <li><a href="#">Spanish</a></li>
                                        <li><a href="#">Italian</a></li>
                                        <li><a href="#">German</a></li>
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">English</a></li>
                                    </ul>
                                </div>
                            </div>
                        </ul>
                    </div>
                    <div class="header_login hidden-lg-down">
                        <a href="#login-modal" class="open-popup-link">Вход для партнёров</a>
                    </div>
                    <form class="header_search hidden-lg-down">
                        <input class="header_search_input" type="text" placeholder="Поиск">
                        <button class="header_search_btn" type="button"></button>
                    </form>
                    <a href="#welcome-modal" class="header_cart open-popup-link">
                        <svg class="block" width="45" height="42">
                            <use xlink:href="#cart_icon"></use>
                        </svg>
                        <span class="header_cart_num">12</span>
                    </a>
                    <a href="#menu-modal" class="hidden-xl-up header_menuIcon open-popup-link">
                        <svg class="block" width="45" height="31">
                            <use xlink:href="#menu_icon"></use>
                        </svg>
                    </a>
                </div>
                <div class="col-xs-12 header_text">
                    <h1 class="header_text_title" itemprop="headline"><?php echo $pageInfo["headline"]; ?></h1>
                    <p itemprop="description"><?php echo $pageInfo["description"]; ?></p>
                </div>

                <div class="col-xs-12 header_nav">
                    <ul>
                        <li class="active hidden-lg-down">
                            <a href="#">
                                <svg width="48" height="48" class="header_nav_icon">
                                    <use xlink:href="#header_icon_1"></use>
                                </svg>
                                <span>Акции <br>и новости</span>
                            </a>
                        </li>
                        <li class="hidden-lg-down">
                            <a href="#">
                                <svg width="48" height="48">
                                    <use xlink:href="#header_icon_2"></use>
                                </svg>
                                <span>Отзывы</span>
                            </a>
                        </li>
                        <li class="hidden-lg-down">
                            <a href="#modal-filter" class="modalLink js">
                                <svg width="48" height="48">
                                    <use xlink:href="#header_icon_3"></use>
                                </svg>
                                <span>Расчёт <br>тура</span>
                            </a>
                        </li>
                        <li class="first-mobile">
                            <a href="#modal-filter" class="modalLink js">
                                <svg width="48" height="48">
                                    <use xlink:href="#header_icon_4"></use>
                                </svg>
                                <span>Прага</span>
                            </a>
                        </li>
                        <li>
                            <a href="#modal-filter" class="modalLink js">
                                <svg width="48" height="48">
                                    <use xlink:href="#header_icon_5"></use>
                                </svg>
                                <span>Чехия</span>
                            </a>
                        </li>
                        <li>
                            <a href="#modal-filter" class="modalLink js">
                                <svg width="48" height="48">
                                    <use xlink:href="#header_icon_6"></use>
                                </svg>
                                <span>Европа</span>
                            </a>
                        </li>
                    </ul>
                    <div id="modal-filter" class="modal_filter modal mfp-hide">
                        <form class="modal_filter_form">
                            <div class="row">
                                <div class="col-xs-12 modal_filter_nav">
                                    <div class="modal_filter_prev top">
                                        <a href="#" class="modal_filter_prev_link">
                                            <svg width="28" height="24">
                                                <use xlink:href="#filter_prev"></use>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="modal_filter_list">
                                        <ul id="modal-filter-nav-list">
                                            <li class="show">
                                                <p><strong>Куда, когда и с кем</strong></p>
                                            </li>
                                            <li>
                                                <p><strong>Тип экскурсии</strong></p>
                                            </li>
                                            <li>
                                                <p><strong>Ваш бюджет</strong></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="modal_filter_next top">
                                        <a href="#" class="modal_filter_next_link">
                                            <svg width="28" height="24">
                                                <use xlink:href="#filter_next"></use>
                                            </svg>
                                        </a>
                                        <input type="button" value="Показать туры" class="yellow_btn modal_filter_send hide">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 modal_filter_item open">
                                    <div class="row">
                                        <div class="col-xs-12 hidden-xl-up modal_filter_bottomText">
                                            <p>Выезд из праги</p>
                                        </div>
                                        <div class="col-xs-12 col-xl-10 col-xl-offset-1 verticalForm">
                                            <div class="row">
                                                <div class="col-xs-12 col-xl-4">
                                                    <input type="text" name="where" placeholder="Куда" class="modal_filter_form_input map_input">
                                                </div>
                                                <div class="col-xs-12 col-xl-4">
                                                    <input type="text" name="when" placeholder="Когда" class="modal_filter_form_input date_input">
                                                </div>
                                                <div class="col-xs-12 col-xl-4">
                                                    <input type="text" name="whom" placeholder="С кем" class="modal_filter_form_input man_input">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 hidden-lg-down modal_filter_bottomText">
                                            <p>Выезд из праги</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 modal_filter_item">
                                    <div class="row">
                                        <div class="col-xs-12 modal_filter_form">
                                            <div class="labelBox">
                                                <label><input type="checkbox" name="type" value="Пешие"> Пешие</label>
                                                <label><input type="checkbox" name="type" value="Автобусные"> Автобусные</label>
                                                <label><input type="checkbox" name="type" value="На воде"> На воде</label>
                                                <label><input type="checkbox" name="type" value="Детские"> Детские</label>
                                                <label><input type="checkbox" name="type" value="Молодёжные"> Молодёжные</label>
                                                <label><input type="checkbox" name="type" value="Познавательные"> Познавательные</label>
                                                <label><input type="checkbox" name="type" value="Вечерние"> Вечерние</label>
                                                <label><input type="checkbox" name="type" value="Популярные"> Популярные</label>
                                                <label><input type="checkbox" name="type" value="Мистические"> Мистические</label>
                                                <label><input type="checkbox" name="type" value="Индивидуальные"> Индивидуальные</label>
                                                <label><input type="checkbox" name="type" value="Груповые"> Груповые</label>
                                                <label><input type="checkbox" name="type" value="Пивной-тур"> Пивной-тур</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 modal_filter_item">
                                    <div class="row">
                                        <div class="col-xs-12 modal_filter_form">
                                            <div class="sliderBox">
                                                <p class="upper price"><span id="modal-amount"></span></p>
                                                <p class="slider"><div id="modal-slider"></div></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row hidden-xl-up">
                                <div class="btnBox">
                                    <div class="modal_filter_prev hide">
                                        <a href="#" class="modal_filter_prev_link yellow_btn back">Назад</a>
                                    </div>
                                    <div class="modal_filter_next">
                                        <a href="#" class="modal_filter_next_link yellow_btn">Далее</a>
                                        <input type="button" value="Показать туры" class="yellow_btn modal_filter_send hide">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xs-12 header_contact">
                    <p>всегда на связи <strong class="header_contact_phone">+ 420 776 28 43 07</strong></p>
                </div>
            </div>
        </div>
    </header>