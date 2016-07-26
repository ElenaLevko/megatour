<?php
$amp = ["have"=>false, "page"=>"contact"];
$pageInfo = ["headline"=>"Контакты","description"=>"Выберите тур и получите больше ярких эмоций"];
include "view/header.php";
$breadcrumbs = ["Контакты"];
include "view/breadcrumbs.php";
?>

        <section class="section section_contact" itemscope itemtype="http://schema.org/Organization">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="textBox_title upper">
                            Контакты
                        </h3>
                    </div>
                    <div class="col-xs-12 col-md-6 textBox">
                        <div class="pinkBg">
                            <p itemprop="name">Туристическое агентство MegaTour®</p>
                            <p><strong><span itemprop="telephone">+ (420) 776 284 307</span>, Николай Кравчук</strong></p>
                            <p><strong>Работаем каждый день с 8:30 до 19:00</strong></p>
                            <p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                                <strong>
                                    <span itemprop="postalCode">11000</span>, <span itemprop="streetAddress">Вацлавская площадь 846/1</span> <span itemprop="areaServed">(внутри пассажа, вход "B", в лифте кнопка"1", офис № 100)</span>, <span itemprop="addressLocality">Прага</span>
                                </strong>
                            </p>
                            <p><a href="#map" class="scroll">Офис на карте, смотреть внизу страницы</a></p>
                            <p>
                                <strong>
                                    Идентификационный номер фирмы: <span itemprop="taxID">28881311</span><br>
                                    Идентификационный номер налогоплательщика: <span itemprop="vatID">CZ7905224041</span>
                                </strong>
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 textBox">
                        <p class="video">
                            <iframe width="560" height="345" src="https://www.youtube.com/embed/8brt9OZNE7A" frameborder="0" allowfullscreen></iframe>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-6 textBox">
                        <div class="section_contact_text">
                            <p>Торговая марка MegaTour зарегистрирована в отделе по охране торговых марок.<br>
                                Номер записи (Číslo zápisu) - 328405.<br>
                                Проверить по номеру записи можно здесь:<br>
                                <a href="#" itemscope="url">http://isdv.upv.cz/portal/pls/portal/portlets.ozs.frm</a></p>
                            <p>
                                <strong>Лицензия на деятельность туристического агентства</strong><br>
                                (provozování cestovní agentury a průvodcovská činnost v oblasti cestovního ruchu)<br>
                                živ 2Op036/1020 VYP0240/032 от 15.04.2009.
                            </p>
                            <p><strong>Юридический адрес:<br>
                                    Cimburkova 588/11, 13000, Praha.</strong></p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 textBox">
                        <h3 class="textBox_title2 upper">Написать нам</h3>
                        <form class="row form">
                            <p class="col-xs-12 col-md-6">
                                <input class="form_input" type="text" placeholder="Имя*">
                            </p>
                            <p class="col-xs-12 col-md-6">
                                <input class="form_input" type="email" placeholder="Email*">
                            </p>
                            <p class="col-xs-12">
                                <textarea class="form_textarea" placeholder="Отзыв"></textarea>
                            </p>
                            <p class="col-xs-12"><button class="yellow_btn">Оставить отзыв</button></p>
                        </form>
                    </div>
                    <div class="col-xs-12 map" id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d9290635.710903395!2d40.297852!3d55.35413500000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sru!4v1466524294448" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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