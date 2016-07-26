<?php
$amp = ["have"=>false, "page"=>"cart"];
$pageInfo = ["headline"=>"Корзина","description"=>"Выберите тур и получите больше ярких эмоций"];
include "view/header.php";
$breadcrumbs = ["Корзина"];
include "view/breadcrumbs.php";
?>

        <section class="section section_cart">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="textBox_title upper">Корзина</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <form class="pinkBg section_cart_gift">
                            <p class="section_cart_gift_desc">Вы можете выбрать любой подарок (для уточнения деталей получения подарка обращайтесь к нам после оплаты)</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-4">
                                    <label>
                                        <div class="section_cart_gift_input">
                                            <input type="radio" name="gift" value="Бесплатный трансфер из или в аэропорт">
                                        </div>
                                        <div class="section_cart_gift_img">
                                            <svg width="68" height="68">
                                                <use xlink:href="#coast_car"></use>
                                            </svg>
                                        </div>
                                        <div class="section_cart_gift_text">
                                            <span>Бесплатный трансфер <br>"из" или "в" аэропорт</span>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-xs-12 col-md-4">
                                    <label>
                                        <div class="section_cart_gift_input">
                                            <input type="radio" name="gift" value="Бесплатная прогулка на корабле в Праге с ужином">
                                        </div>
                                        <div class="section_cart_gift_img">
                                            <svg width="68" height="68">
                                                <use xlink:href="#coast_boat"></use>
                                            </svg>
                                        </div>
                                        <div class="section_cart_gift_text">
                                            <span>Бесплатная прогулка <br>на корабле <br>в Праге с ужином</span>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-xs-12 col-md-4">
                                    <label>
                                        <div class="section_cart_gift_input">
                                            <input type="radio" name="gift" value="Бесплатная Мистическая Прага">
                                        </div>
                                        <div class="section_cart_gift_img">
                                            <svg width="68" height="68">
                                                <use xlink:href="#coast_ghost"></use>
                                            </svg>
                                        </div>
                                        <div class="section_cart_gift_text">
                                            <span>Бесплатная <br>"Мистическая Прага"</span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </form>
                        <p class="section_cart_more"><a href="#" class="yellow_btn">Продолжить заказ экскурсий</a></p>
                    </div>
                    <div class="col-xs-12">
                        <div class="section_cart_item pinkBg">
                            <a href="#" class="section_cart_item_close">
                                <svg width="20" height="20">
                                    <use xlink:href="#close"></use>
                                </svg>
                            </a>
                            <p class="section_cart_item_title">Вышеград</p>
                            <div class="row">
                                <div class="col-xs-12 col-lg-3">
                                    <a href="#" class="section_cart_item_img block"><img class="block" src="style/img/tour_open_img_1.jpg" alt=""></a>
                                </div>
                                <div class="col-xs-12 col-lg-6 section_cart_item_info">
                                    <div>
                                        <p>
                                            <svg width="26" height="26">
                                                <use xlink:href="#cart_date"></use>
                                            </svg>
                                            28.08.16
                                        </p>
                                        <p>
                                            <svg width="26" height="26">
                                                <use xlink:href="#cart_time"></use>
                                            </svg>
                                            13:50
                                        </p>
                                    </div>
                                    <div>
                                        <p>
                                            <svg width="26" height="26">
                                                <use xlink:href="#cart_man"></use>
                                            </svg>
                                            2
                                        </p>
                                        <p>
                                            <svg width="26" height="26">
                                                <use xlink:href="#cart_child"></use>
                                            </svg>
                                            2
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-lg-3 section_cart_item_price">
                                    <div>
                                        <p>1960 CZK</p>
                                        <p>(70 €)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section_cart_item pinkBg">
                            <a href="#" class="section_cart_item_close">
                                <svg width="20" height="20">
                                    <use xlink:href="#close"></use>
                                </svg>
                            </a>
                            <p class="section_cart_item_title">Моравский Крас и замок Пернштейн</p>
                            <div class="row">
                                <div class="col-xs-12 col-lg-3">
                                    <a href="#" class="section_cart_item_img block"><img class="block" src="style/img/tour_open_img_1.jpg" alt=""></a>
                                </div>
                                <div class="col-xs-12 col-lg-6 section_cart_item_info">
                                    <div>
                                        <p>
                                            <svg width="26" height="26">
                                                <use xlink:href="#cart_date"></use>
                                            </svg>
                                            28.08.16
                                        </p>
                                        <p>
                                            <svg width="26" height="26">
                                                <use xlink:href="#cart_time"></use>
                                            </svg>
                                            13:50
                                        </p>
                                    </div>
                                    <div>
                                        <p>
                                            <svg width="26" height="26">
                                                <use xlink:href="#cart_man"></use>
                                            </svg>
                                            2
                                        </p>
                                        <p>
                                            <svg width="26" height="26">
                                                <use xlink:href="#cart_child"></use>
                                            </svg>
                                            2
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-lg-3 section_cart_item_price">
                                    <div>
                                        <p>1960 CZK</p>
                                        <p>(70 €)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section_cart_total">
                            <p>Сумма к оплате: <strong>4760 CZK (170 €)</strong></p>
                            <p>Общая сумма: <strong>4760 CZK (170 €)</strong></p>
                            <p>Доплата на месте: <strong>0 CZK (0 €)</strong></p>
                        </div>
                        <div class="section_cart_form">
                            <p class="section_cart_form_title">Информация о туристах</p>
                            <form class="row form textBox">
                                <div class="col-xs-12 col-xl-6">
                                    <div class="row">
                                        <p class="col-xs-12">
                                            <input class="form_input" type="text" placeholder="Имя и фамилия всех туристов*">
                                        </p>
                                        <p class="col-xs-6 col-md-6">
                                            <input class="form_input" type="email" placeholder="Email*">
                                        </p>
                                        <p class="col-xs-6 col-md-6">
                                            <input class="form_input" type="tel" placeholder="Телефон*">
                                        </p>
                                        <p class="col-xs-12">
                                            <textarea class="form_textarea" placeholder="Сообщение"></textarea>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-xl-6">
                                    <label class="section_cart_form_label short term">
                                        <input type="checkbox" name="term">
                                        <span>
                                            Я соглашаюсь с правилами предоставления услуг
                                            туристической компании Mega Tour <a href="#">(Условия)</a>
                                        </span>
                                    </label>
                                    <div class="row payRow">
                                        <p class="col-xs-12 textBox_title2">Способ оплаты</p>
                                        <div>
                                            <label class="section_cart_form_label">
                                                <input type="radio" name="pay" value="master">
                                                <img src="style/img/cart_pay_1.png">
                                            </label>
                                        </div>
                                        <div>
                                            <label class="section_cart_form_label">
                                                <input type="radio" name="pay" value="paypal">
                                                <img src="style/img/cart_pay_2.png">
                                            </label>
                                        </div>
                                        <div>
                                            <label class="section_cart_form_label">
                                                <input type="radio" name="pay" value="transfer">
                                                <img src="style/img/cart_pay_3.png">
                                            </label>
                                        </div>
                                        <div>
                                            <label class="section_cart_form_label">
                                                <input type="radio" name="pay" value="webmoney">
                                                <img src="style/img/cart_pay_4.png">
                                            </label>
                                        </div>
                                        <p class="col-xs-12 p"><a href="#">Инструкция по оплате платёжными системами</a></p>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6">
                                            <input class="form_input" type="text" placeholder="Купон на скидку">
                                        </div>
                                        <div class="col-xs-12 col-md-6 couponBtn">
                                            <input type="button" value="Активировать купон" class="yellow_btn">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 submitBox">
                                    <input type="submit" value="Сделать заказ" class="yellow_btn">
                                </div>
                            </form>
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