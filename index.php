<?php
$amp = ["have"=>false, "page"=>"index"];
$pageInfo = ["headline"=>"Экскурсии вместе <br>с MegaTour","description"=>"Выберите тур и получите больше ярких эмоций"];
include "view/header.php";
?>

        <section class="section section_about" itemscope itemtype="http://schema.org/Article">
            <meta itemprop="inLanguage" content="ru" />
            <div class="container" itemprop="articleBody">
                <div class="row">
                    <div class="col-xs-12 col-lg-8 textBox" itemprop="text">
                        <h2 class="textBox_title upper" itemprop="headline">Костюмированный туризм – это незабываемо!</h2>
                        <p>Нет, наверное, на свете человека, который бы не хотел повидать мир. Получить яркие эмоции и незабываемые впечатления - не об этом ли мечтает каждый турист? И можно только представить себе разочарование, когда вместо этого приходится участвовать в набивших оскомину однообразных экскурсиях. Стоит ли удивляться тому, что их стали часто игнорировать?</p>
                        <p>Мы, агентство Megatour, предлагаем совершенно другой подход в организации путешествий! В основе каждой экскурсии - свежие идеи и задумки, над которыми неустанно работает наша молодая, дружная и креативная команда. Вы заинтригованы? Тогда самое время узнать о том, в каком необычном свете предстанет перед глазами своих гостей Чехия, одна из красивейших европейских стран с богатой и самобытной историей.</p>
                        <h3 class="textBox_title agora"><i>В основе каждой экскурсии - свежие идеи и задумки, над которыми неустанно работает наша молодая, дружная
                        и креативная команда.</i></h3>
                        <p>Агентство Megatour успешно практикует в своей деятельности новое направление – костюмированный туризм.
                        Наш экскурсовод по Праге никогда не будет монотонно излагать заранее заученные тексты. Он предстанет перед
                        вами в одном из исторических или карнавальных костюмов, предложив совершить увлекательное путешествие
                        в разные эпохи.</p>
                    </div>
                    <div class="col-xs-12 col-lg-4">
                        <div class="row">
                            <div class="col-xs-6 section_about_img" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                                <img itemprop="contentUrl" src="style/img/pic1.jpg">
                                <link itemprop="url" href="style/img/pic1.jpg">
                                <meta itemprop="width" content="476">
                                <meta itemprop="height" content="258">
                            </div>
                            <div class="col-xs-6 section_about_img" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                                <img itemprop="contentUrl" src="style/img/pic2.jpg">
                                <link itemprop="url" href="style/img/pic2.jpg">
                                <meta itemprop="width" content="476">
                                <meta itemprop="height" content="258">
                            </div>
                            <div class="col-xs-12 section_about_img" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                                <img itemprop="contentUrl" src="style/img/pic3.jpg">
                                <link itemprop="url" href="style/img/pic3.jpg">
                                <meta itemprop="width" content="476">
                                <meta itemprop="height" content="258">
                            </div>
                            <div class="col-xs-12 section_about_text">
                                <p>
                                    Даже Андрей Бедняков не остался
                                    равнодушен! А он видал многое...
                                </p>
                                <img src="style/img/oryol_i_reshka_logo.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                    <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                        <img itemprop="contentUrl" src="style/img/logo.png" alt="">
                        <img itemprop="url" src="style/img/logo.png" alt="">
                        <meta itemprop="width" content="600">
                        <meta itemprop="height" content="60">
                    </div>
                    <meta itemprop="name" content="Мегатур">
                    <meta itemprop="telephone" content="+ (420) 776 284 307">
                    <meta itemprop="address" content="11000, Вацлавская площадь 846/1">
                </div>
                <meta itemprop="author" content="Мегатур">
                <meta itemprop="dateModified" content="2016-05-08">
                <meta itemprop="datePublished" content="2016-05-08">
                <meta itemprop="mainEntityOfPage" content="http://www.megatour.cz/">
            </div>
        </section>

        <section class="section section_reviews pinkBg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 textBox">
                        <h3 class="textBox_title upper">Отзывы</h3>
                        <ul class="section_reviews_list owl-carousel js" id="section_reviews">
                            <?php for($i=0;$i<10;$i++): ?>
                                <li itemscope itemtype="http://schema.org/Review">
                                    <link itemprop="url" href="www.megatour.cz/">
                                    <div class="hidden" itemprop="itemReviewed" itemscope itemtype="http://schema.org/Organization">
                                        <p itemprop="name">Туристическое агентство MegaTour®</p>
                                        <p><strong><span itemprop="telephone">+ (420) 776 284 307</span>, Николай Кравчук</strong></p>
                                        <p><strong>Работаем каждый день с 8:30 до 19:00</strong></p>
                                        <p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                                            <strong>
                                                <span itemprop="postalCode">11000</span>, <span itemprop="streetAddress">Вацлавская площадь 846/1</span> <span itemprop="areaServed">(внутри пассажа, вход "B", в лифте кнопка"1", офис № 100)</span>, <span itemprop="addressLocality">Прага</span>
                                            </strong>
                                        </p>
                                    </div>
                                    <p class="textBox_title agora" itemprop="reviewBody">
                                        <i itemprop="description">
                                            "Megatour - супер экскурсионное бюро. Никаких проблем, всегда отличный сервис. <br>Николай - супер гид. Рекомендую всем пользоваться услугами этой компании. От экскурсий остались незабываемые впечатления. Николай спасибо огромное от меня и супруги."
                                        </i>
                                    </p>
                                    <p><span itemprop="author">Сергей Лебедь</span> <meta itemprop="datePublished" content="2012-11-19">19.11.2012</p>
                                    <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="hidden">
                                        <meta itemprop="worstRating" content = "1">
                                        <span itemprop="ratingValue">1</span>/
                                        <span itemprop="bestRating">5</span>stars
                                    </div>
                                </li>
                            <?php endfor; ?>
                        </ul>
                        <p class="section_reviews_more"><a href="#" class="yellow_btn">Все отзывы</a></p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section_why" itemscope itemtype="http://schema.org/Article">
            <meta itemprop="inLanguage" content="ru" />
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 textBox" itemprop="articleBody">
                        <h3 class="textBox_title upper" itemprop="headline">Почему именно Megatour?</h3>
                        <div class="row">
                            <div class="col-xs-12 col-lg-6">
                                <p>Потому что кроме неповторимых костюмированных экскурсий мы предлагаем еще немало интересного. Вы не только соприкоснетесь с достопримечательностями столицы, но и сможете посетить другие города Чехии, которые славятся своими неповторимыми архитектурными стилями. Не исключено, что здесь вы встретите
                                    и своих кумиров, звезд Голливуда, любящих отдыхать на местных курортах.
                                    Наша быстро и динамично развивающаяся компания предложит эксклюзивные экскурсии и в соседние Австрию и Германию, тоже сохранившие неповторимый дух средневековья.</p>
                            </div>
                            <div class="col-xs-12 col-lg-6">
                                <p>Экскурсоводы Megatour способны удивить своими творческими находками даже самых искушенных туристов. Не сомневаемся, что приятно и комфортно отдохнув с нашей помощью, вы захотите и в следующий свой отпуск заказать у нас целый ряд интереснейших экскурсий – например, посетить места, где велись съемки кассовых голливудских фильмов.</p>
                                <p>Что ж, добро пожаловать в сказку, друзья!</p>
                            </div>
                        </div>
                        <ul class="advantages_list">
                            <li>
                                <div>
                                    <svg width="61" height="70">
                                        <use xlink:href="#advantages_icon_1"></use>
                                    </svg>
                                </div>
                                <div>
                                    <strong>Множество <br>впечатлений</strong>
                                    Более 250 туров
                                </div>
                            </li>
                            <li>
                                <div>
                                    <svg width="61" height="70">
                                        <use xlink:href="#advantages_icon_2"></use>
                                    </svg>
                                </div>
                                <div>
                                    <strong>Лучшая <br>цена</strong>
                                    Мы гарантируем!
                                </div>
                            </li>
                            <li>
                                <div>
                                    <svg width="61" height="70">
                                        <use xlink:href="#advantages_icon_3"></use>
                                    </svg>
                                </div>
                                <div>
                                    <strong>Быстрое и легкое <br>бронирование</strong>
                                    Заказывайте онлайн за одну минуту
                                </div>
                            </li>
                        </ul>
                        <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                            <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                                <img itemprop="contentUrl" src="style/img/logo.png" alt="">
                                <img itemprop="url" src="style/img/logo.png" alt="">
                                <meta itemprop="width" content="600">
                                <meta itemprop="height" content="60">
                            </div>
                            <meta itemprop="name" content="Мегатур">
                            <meta itemprop="telephone" content="+ (420) 776 284 307">
                            <meta itemprop="address" content="11000, Вацлавская площадь 846/1">
                        </div>
                        <meta itemprop="author" content="Мегатур">
                        <meta itemprop="dateModified" content="2016-05-08">
                        <meta itemprop="datePublished" content="2016-05-08">
                        <meta itemprop="mainEntityOfPage" content="http://www.megatour.cz/">
                        <div class="hidden" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                            <img itemprop="contentUrl" src="style/img/pic1.jpg">
                            <img itemprop="url" src="style/img/pic1.jpg" class="hidden">
                            <meta itemprop="width" content="500">
                            <meta itemprop="height" content="500">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section_tours pinkBg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="textBox_title upper">Популярные туры</h3>
                    </div>
                    <?php for($i=0;$i<4;$i++){
                        include "view/tour_item.php";
                    } ?>
                </div>
            </div>
        </section>

        <section class="section section_articles" itemscope itemtype="http://schema.org/Blog">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="textBox_title upper" itemprop="description">Интересные статьи</h3>
                    </div>
                    <?php for($i=0;$i<3;$i++){
                        include "view/section_articles_item.php";
                    }?>
                    <p class="col-xs-12 section_articles_more"><a href="#" class="yellow_btn">Перейти в блог</a></p>
                </div>
            </div>
        </section>

    <?php include "view/footer.php"; ?>

</body>
</html>