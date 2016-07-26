<?php
$amp = ["have"=>true, "page"=>"services_category"];
$pageInfo = ["headline"=>"Отели в Праге","description"=>"Выберите тур и получите больше ярких эмоций"];
include "view/header.php";
$breadcrumbs = ["Услуги", "Отели в Праге"];
include "view/breadcrumbs.php";
?>

        <section class="section section_services" itemscope itemtype="http://schema.org/Article">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-8" itemprop="articleBody">
                        <h3 class="textBox_title upper" itemprop="headline">Отели в Праге</h3>
                        <div class="row section_services_list">
                            <?php for($i=0;$i<6;$i++){ 
                                include "view/services_item.amp.php";
                            } ?>
                        </div>
                        <p class="col-xs-12 section_services_more"><a href="#" class="yellow_btn">Показать ещё</a></p>
                        <div class="textBox" itemprop="description">
                            <p>Отправляясь в далекое путешествие нужно заранее позаботиться о месте проживания. Но как же найти подходящую гостиницу в незнакомом городе? MegaTour облегчит вам эту задачу.</p>
                            <p>Заказать отель в Праге или любом другом городе вы можете на нашем сайте, Воспользовавшись услугой онлайн бронирования. Для выбора и заказа гостиницы в Праге нужно знать Лишь несколько несложных принципов. Качество услуг, предоставляемых тем или иным отелем, а соответственно и цена, определяется количеством звезд и расположением.</p>
                            <p>Трехзвездочные гостиницы предлагают своим гостям стандартный набор услуг и сервисов. Сюда, как правило, входят телевизор, санузел, кондиционер и мини-бар. Список дополнительных услуг часто включает бассейн, спортивный зал, прачечную и прочее. В стоимость проживания чаще включено и питание, либо только завтрак.</p>
                            <p>Тип питания может быть различным. Если же к стандартному набору прибавляются специальные сервисы или эксклюзивные услуги (спа-салоны, рестораны, бары, круглосуточной обслуживание), речь идет о гостиницах более высокого уровня четырех или пяти звезд. Соответственно повышается и стоимость проживания.</p>
                            <p>Сказывается на стоимости отеля и его расположение. Самыми дорогими являются гостиницы и отели, Расположенный в центре города, в непосредственной близости к основным достопримечательностям. Выбрать отель можно в любом районе Праги. Для вашего удобства при онлайн бронировании на сайте есть карта расположения отеля. Гостиница в центре города, безусловно, привлекательна чудесным видом из окна. Но даже если вы поселитесь в отеле, несколько удаленных от центра, а не огорчайтесь. Общественный транспорт в Праге функционирует прекрасно.</p>
                            <p>Заказывая отель в Праге вы ознакомитесь со всей необходимой информацией. Узнаете перечень услуг, стоимость проживания и посмотрите фотографии комнат. Таким образом, вы сможете быть уверены, что сделали правильный выбор, и уже ничто НЕ испортит вашего отдыха.</p>
                            <p>Заказ отелей на сайте компании MegaTour поможет вам выбрать, сравнить, рассмотреть различные варианты, соизмерять условия со стоимостью и, наконец, найти то, что вам подойдет лучше всего. Прага - город туристов, поэтому конкуренция между отелями здесь невероятно высока. Благодаря этому цены являются доступными, а услуги качественными.</p>
                        </div>
                        <div class=hidden" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                            <amp-img src="style/img/pic1.jpg" width="476" height="258" itemprop="contentUrl" layout="responsive" alt=""></amp-img>
                            <link itemprop="url" href="style/img/pic1.jpg">
                            <meta itemprop="width" content="476">
                            <meta itemprop="height" content="258">
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
                    <div class="col-xs-12 hidden-lg-down col-xl-4">
                        <h3 class="textBox_title upper">Поиск отелей</h3>
                        <?php include "view/filter.php"; ?>
                    </div>
                </div>
            </div>
        </section>

        <?php include "view/section_social.php"; ?>

        <section class="section section_guide hidden-md-down">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="textBox_title upper">Все гиды</h3>
                    </div>
                </div>
                <div class="section_guide_row">
                    <div class="section_guide_item">
                        <a href="#">
                            <span class="section_guide_item_img">
                                <amp-img src="style/img/guide_1.jpg" width="140" height="140" itemprop="contentUrl" layout="responsive" alt=""></amp-img>
                            </span>
                            <span class="section_guide_item_text">
                                Гид король
                            </span>
                        </a>
                    </div>
                    <div class="section_guide_item">
                        <a href="#">
                            <span class="section_guide_item_img">
                                <amp-img src="style/img/guide_2.jpg" width="140" height="140" itemprop="contentUrl" layout="responsive" alt=""></amp-img>
                            </span>
                            <span class="section_guide_item_text">
                                Гид королева
                            </span>
                        </a>
                    </div>
                    <div class="section_guide_item">
                        <a href="#">
                            <span class="section_guide_item_img">
                                <amp-img src="style/img/guide_3.jpg" width="140" height="140" itemprop="contentUrl" layout="responsive" alt=""></amp-img>
                            </span>
                            <span class="section_guide_item_text">
                                Гид рыцарь
                            </span>
                        </a>
                    </div>
                    <div class="section_guide_item">
                        <a href="#">
                            <span class="section_guide_item_img">
                                <amp-img src="style/img/guide_4.jpg" width="140" height="140" itemprop="contentUrl" layout="responsive" alt=""></amp-img>
                            </span>
                            <span class="section_guide_item_text">
                                Гид скелет
                            </span>
                        </a>
                    </div>
                    <div class="section_guide_item">
                        <a href="#">
                            <span class="section_guide_item_img">
                                <amp-img src="style/img/guide_5.jpg" width="140" height="140" itemprop="contentUrl" layout="responsive" alt=""></amp-img>
                            </span>
                            <span class="section_guide_item_text">
                                Гид пиво
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section_tours pinkBg whiteMobile">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="textBox_title upper">Популярные туры</h3>
                    </div>
                    <?php for($i=0;$i<4;$i++){
                        include "view/tour_item.amp.php";
                    } ?>
                </div>
            </div>
        </section>
    
    <?php include "view/footer.php"; ?>

</body>
</html>