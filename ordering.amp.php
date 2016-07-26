<?php
$amp = ["have"=>true, "page"=>"ordering"];
$pageInfo = ["headline"=>"Чешский Крумлов и замок","description"=>"Выберите тур и получите больше ярких эмоций"];
include "view/header.php";
$breadcrumbs = ["Заказать экскурсию","Чешский Крумлов и замок"];
include "view/breadcrumbs.php";
?>

        <section class="section section_ordering">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 textBox">
                        <h3 class="textBox_title upper">Чешский Крумлов и замок</h3>
                        <p class="upper"><strong>Оформление заказа</strong></p>
                    </div>
                    <form class="form col-xs-12 textBox">
                        <div class="row">
                            <div class="col-xs-12 col-lg-6">
                                <div class="pinkBg">
                                    <div class="row">
                                        <p class="col-xs-6">
                                            <select>
                                                <option value="Взрослые">Взрослые</option>
                                                <option value="Взрослые">Взрослые</option>
                                                <option value="Взрослые">Взрослые</option>
                                            </select>
                                        </p>
                                        <p class="col-xs-6">
                                            <input type="text" class="date_input form_input" name="date">
                                        </p>
                                        <p class="col-xs-6">
                                            <select>
                                                <option value="Дети">Дети</option>
                                                <option value="Дети">Дети</option>
                                                <option value="Дети">Дети</option>
                                            </select>
                                        </p>
                                        <p class="col-xs-6">
                                            <select>
                                                <option value="Время">Время</option>
                                                <option value="8">8:00</option>
                                                <option value="9">9:00</option>
                                                <option value="10">10:00</option>
                                                <option value="11">11:00</option>
                                                <option value="12">12:00</option>
                                            </select>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-6">
                                <div class="section_ordering_car textBox">
                                    <div class="section_ordering_car_img">
                                        <img src="style/img/car.jpg" alt="">
                                        <div class="section_ordering_car_img_places">
                                            <?php
                                            $busy = 20;
                                            $freely = 5;
                                            for($i=0;$i<$busy;$i++){
                                                if($i<$freely){
                                                    echo "<span><img src=\"style/img/car_busy.png\" alt=\"\"></span>";
                                                } else {
                                                    echo "<span><img src=\"style/img/car_freely.png\" alt=\"\"></span>";
                                                }
                                            } ?>
                                        </div>
                                    </div>
                                    <div class="section_ordering_car_text">
                                        <div class="first">
                                            <p><strong class="upper">2 Взрослых: <span class="redDark">60€</span></strong></p>
                                            <p><strong class="upper">0 Дети (до 10 лет): <span class="redDark">0€</span></strong></p>
                                        </div>
                                        <div class="second">
                                            <p><img src="style/img/car_freely.png" alt=""> свободно</p>
                                            <p><img src="style/img/car_busy.png" alt=""> занято</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-lg-6">
                                <div class="row">
                                    <p class="col-xs-6 col-xl-4 col-xl-offset-2">
                                        <input type="submit" value="Заказать тур" class="yellow_btn">
                                    </p>
                                    <p class="col-xs-6 col-xl-4">
                                        <input type="submit" value="Предоплата" class="yellow_btn">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </form>
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
    
    
    </div>
    
    <?php include "view/footer.php"; ?>

</body>
</html>