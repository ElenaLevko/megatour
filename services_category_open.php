<?php
$amp = ["have"=>false, "page"=>"services_category_open"];
$pageInfo = ["headline"=>"Отель Оstaš","description"=>"Выберите тур и получите больше ярких эмоций"];
include "view/header.php";
$breadcrumbs = ["Услуги", "Отели в Праге", "Отель Оstaš"];
include "view/breadcrumbs.php";
?>
 
        <section class="section section_services" itemscope itemtype="http://schema.org/Service">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-xl-8">
                        <h3 class="textBox_title upper" itemprop="name">Отель Оstaš</h3>
                        <div class="row" itemprop="description">
                            <div class="col-xs-12 col-xl-6 section_services_textBox">
                                <p class="upper"><strong>Ориентировочная стоимость: 50 €</strong></p>
                                <p>Район: Прага 3</p>
                                <p>Количество звезд: 3</p>
                                <p>Адрес отеля: Orebitská 8, Прага, 13000, Чехия</p>
                                <br>
                                <p class="upper"><strong>Дата</strong></p>
                                <form class="form textBox">
                                    <div class="row">
                                        <p class="col-xs-6 dateBg">
                                            <input type="text" class="date_input form_input" name="date1">
                                        </p>
                                        <p class="col-xs-6">
                                            <input type="text" class="date_input form_input" name="date2">
                                        </p>
                                        <p class="col-xs-12 col-xl-6 btnBox"><input type="submit" value="Забронировать" class="yellow_btn"></p>
                                    </div>
                                </form>
                            </div>
                            <div class="col-xs-12 hidden-lg-down col-xl-6">
                                <?php include "view/consultant.php"; ?>
                            </div>
                            <div class="col-xs-12">
                                <div class="itemGallery js" id="itemGallery">
                                    <div class="itemGallery_firstImg" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                                        <a href="style/img/tour_open_img_1.jpg">
                                            <img itemprop="contentUrl" src="style/img/tour_open_img_1.jpg" alt="">
                                        </a>
                                        <link itemprop="url" href="style/img/tour_open_img_1.jpg">
                                        <meta itemprop="width" content="780">
                                        <meta itemprop="height" content="422">
                                    </div>
                                    <div class="row">
                                        <div class="itemGallery_img" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                                            <a href="style/img/tour_open_img_1.jpg">
                                                <img itemprop="contentUrl" src="style/img/tour_open_img_1.jpg" alt="">
                                            </a>
                                            <link itemprop="url" href="style/img/tour_open_img_1.jpg">
                                            <meta itemprop="width" content="780">
                                            <meta itemprop="height" content="422">
                                        </div>
                                        <div class="itemGallery_img" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                                            <a href="style/img/tour_open_img_1.jpg">
                                                <img itemprop="contentUrl" src="style/img/tour_open_img_1.jpg" alt="">
                                            </a>
                                            <link itemprop="url" href="style/img/tour_open_img_1.jpg">
                                            <meta itemprop="width" content="780">
                                            <meta itemprop="height" content="422">
                                        </div>
                                        <div class="itemGallery_img" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                                            <a href="style/img/tour_open_img_1.jpg">
                                                <img itemprop="contentUrl" src="style/img/tour_open_img_1.jpg" alt="">
                                            </a>
                                            <link itemprop="url" href="style/img/tour_open_img_1.jpg">
                                            <meta itemprop="width" content="780">
                                            <meta itemprop="height" content="422">
                                        </div>
                                        <div class="itemGallery_img" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                                            <a href="style/img/tour_open_img_1.jpg">
                                                <img itemprop="contentUrl" src="style/img/tour_open_img_1.jpg" alt="">
                                            </a>
                                            <link itemprop="url" href="style/img/tour_open_img_1.jpg">
                                            <meta itemprop="width" content="780">
                                            <meta itemprop="height" content="422">
                                        </div>
                                        <div class="itemGallery_img" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                                            <a href="style/img/tour_open_img_1.jpg">
                                                <img itemprop="contentUrl" src="style/img/tour_open_img_1.jpg" alt="">
                                            </a>
                                            <link itemprop="url" href="style/img/tour_open_img_1.jpg">
                                            <meta itemprop="width" content="780">
                                            <meta itemprop="height" content="422">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 textBox">
                                <p>Отель Оstaš раскинулся недалеко от исторического центра нашего города, дойти до него можно всего за 15 минут. Отель располагает 32 номерами. Общение с персоналом на языке, который выберете вы.</p>
                                <p>Номера обеспечены бeспроводным доcтупом в Интернeт (бесплaтный Wi-Fi), к вашим услугам также спутниковое телевидение. В ресторане каждый день сервируется «шведский стол» с впечатляющим меню. Кроме всего вы можете заказать обед для компании своих гостей.</p>
                                <p>Неподалеку находится трамвайная остановка Husinecká, до которой можнo дoйти за 6 минyт. До стaнции метрo Florenc всего 10 минут пешего хода,. До нее можно доехать и трамваем.</p>
                                <p class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d9290635.710903395!2d40.297852!3d55.35413500000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sru!4v1466524294448" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 hidden-lg-down col-xl-4">
                        <h3 class="textBox_title upper">Поиск отелей</h3>
                        <?php include "view/filter.php"; ?>
                    </div>
    
                </div>
            </div>
        </section>
    
        <?php include "view/section_social.php"; ?>
    
        <section class="section section_tours">
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
    
    <?php include "view/footer.php"; ?>


</body>
</html>