<?php
$amp = ["have"=>true, "page"=>"cart_done"];
$pageInfo = ["headline"=>"Корзина","description"=>"Выберите тур и получите больше ярких эмоций"];
include "view/header.php";
$breadcrumbs = ["Корзина"];
include "view/breadcrumbs.php";
?>
 
        <section class="section section_cart">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="textBox_title upper">Спасибо за ваш заказ №2592</h3>
                        <div class="section_cart_text first">
                            <p>Туристическое агентство MegaTour?®</p>
                            <p>адрес: Václavské náměstí 846/1</p>
                            <p>Tel: +420-776-28-43-07</p>
                            <p>E-mail: ​info@megatour.cz</p>
                            <p>URL: <a href="http://www.megatour.cz/">www.megatour.cz</a></p>
                            <div class="logo"><img src="style/img/logoBig.png" alt="logo"></div>
                        </div>
                        <div class="section_cart_text">
                            <p><strong>Имя и Фамилия всех туристов:</strong> Корольков Иван Петрович, Евтушенко Ирина Владимировна.</p>
                            <p><strong>Телефон:</strong> +38 097 345 23 45</p>
                            <p><strong>Email:</strong> petr@gmail.com</p>
                            <p><strong>Примечания:</strong> Хотим чтоб было интересно!</p>
                        </div>
                        <div class="section_cart_text">
                            <p><strong>У вас есть подарок:</strong></p>
                            <p><strong>Бесплатный трансфер "из" или "в" аэропорт</strong></p>
                            <p><strong>Свяжитесь с нами для подробностей получения подарка</strong></p>
                            <p><strong>Количество подарочных мест: 1</strong></p>
                        </div>
                        <div class="section_cart_text">
                            <p><strong>Экскурсии:</strong> Дрезден</p>
                            <p><strong>Дата:</strong> 31.05.2016</p>
                            <p><strong>Время:</strong> 08:20</p>
                            <p><strong>Кол-во человек:</strong> 12 Взрослые</p>
                            <p><strong>Цена:</strong> 8400 CZK (300 €)</p>
                            <p><strong>Дополнительная информация:</strong></p>
                            <p><strong>Продолжительность:</strong> 10,5 часа</p>
                            <p><strong>Место встречи:</strong> Вацлавская площадь, у Национального Музея (Narodní Muzeum).</p>
                            <p>У входа в Национальный Музей. Гид с табличкой MegaTour.</p>
                            <p>Во время экскурсии при себе необходимо иметь паспорт и медицинскую страховку.</p>
                        </div>
                        <div class="section_cart_text textBox">
                            <p class="textBox_title2">Итого:</p>
                            <p><strong>Полная стоимость: <span>8400 CZK (300 €)</span></strong></p>
                            <p class="btnBox"><a href="#" class="yellow_btn">Оплата картой</a></p>
                        </div>
                        <div class="row textBox">
                            <div class="col-xs-12 col-md-7">
                                <p>Ссылка на оплату действительна на протяжении 30 минут, без оплаты заказ аннулируется через 30 минут.</p>
                                <p>Этот заказ действителен с подтверждением об оплате. Подтверждением является ваучер MegaTour полученный после оплаты ( после успешной оплаты, просьба распечатать ваш ваучер и предоставить его перед началом экскурсии).</p>
                                <p>Благодарим за использование наших услуг.</p>
                            </div>
                        </div>
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
                        include "view/tour_item.amp.php";
                    } ?>
                </div>
            </div>
        </section>
    
    <?php include "view/footer.php"; ?>


</body>
</html>