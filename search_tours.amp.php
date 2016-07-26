<?php
$amp = ["have"=>true, "page"=>"tours"];
$pageInfo = ["headline"=>"Поиск туров из Праги","description"=>"Выберите тур и получите больше ярких эмоций"];
include "view/header.php";
$breadcrumbs = ["Поиск туров из Праги"];
include "view/breadcrumbs.php";
?>

        <section class="section section_search">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 textBox">
                        <h3 class="textBox_title upper">Поиск туров из Праги</h3>
                    </div>
                    <form class="col-xs-12 form textBox">
                        <div class="section_search_grayBox">
                            <div class="row">
                                <div class="col-xs-6 col-md-4">
                                    <select>
                                        <option>Все туры</option>
                                        <option>Тур 1</option>
                                        <option>Тур 2</option>
                                        <option>Тур 3</option>
                                        <option>Тур 4</option>
                                    </select>
                                </div>
                                <div class="col-xs-6 col-md-2">
                                    <input type="text" class="form_input date_input">
                                </div>
                            </div>
                        </div>
                        <p class="textBox_title2 upper section_search_date">10.05.2016, Вторник</p>
                        <div class="section_search_grayBox">
                            <div class="section_search_row">
                                <div class="col_1">
                                    <svg width="22" height="20">
                                        <use xlink:href="#search_star"></use>
                                    </svg>
                                </div>
                                <div class="col_2">
                                    Время
                                </div>
                                <div class="col_3">
                                    Тур
                                </div>
                                <div class="col_4">
                                    <svg width="22" height="20">
                                        <use xlink:href="#search_man"></use>
                                    </svg>
                                </div>
                                <div class="col_5">
                                    <svg width="22" height="20">
                                        <use xlink:href="#search_baby"></use>
                                    </svg>
                                </div>
                                <div class="col_6">
                                    <img src="style/img/ISIC.png" alt="">
                                </div>
                                <div class="col_7">
                                    Свободные места
                                </div>
                                <div class="col_8">
                                    Заказать
                                </div>
                            </div>
                        </div>
                        <div class="section_search_resultList">
                            <div>
                                <div class="section_search_row">
                                    <div class="col_1">
                                        <img src="style/img/search_icon_1.png" alt="">
                                    </div>
                                    <div class="col_2">
                                        17.30
                                    </div>
                                    <div class="col_3">
                                        <a href="#">Обзорная экскурсия в Праге + Кораблик</a>
                                    </div>
                                    <div class="col_4">
                                        120€
                                    </div>
                                    <div class="col_5">
                                        100€
                                    </div>
                                    <div class="col_6">
                                        115€
                                    </div>
                                    <div class="col_7">
                                        <div class="places">
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
                                    <div class="col_8">
                                        <a href="#" class="yellow_btn">Заказать тур</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="section_search_row">
                                    <div class="col_1">
                                        <img src="style/img/search_icon_2.png" alt="">
                                    </div>
                                    <div class="col_2">
                                        17.30
                                    </div>
                                    <div class="col_3">
                                        <a href="#">Обзорная экскурсия в Праге + Кораблик</a>
                                    </div>
                                    <div class="col_4">
                                        120€
                                    </div>
                                    <div class="col_5">
                                        100€
                                    </div>
                                    <div class="col_6">
                                        115€
                                    </div>
                                    <div class="col_7">
                                        <div class="places">
                                            <?php
                                            $busy = 18;
                                            $freely = 3;
                                            for($i=0;$i<$busy;$i++){
                                                if($i<$freely){
                                                    echo "<span><img src=\"style/img/car_busy.png\" alt=\"\"></span>";
                                                } else {
                                                    echo "<span><img src=\"style/img/car_freely.png\" alt=\"\"></span>";
                                                }
                                            } ?>
                                        </div>
                                    </div>
                                    <div class="col_8">
                                        <a href="#" class="yellow_btn">Заказать тур</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="section_search_row">
                                    <div class="col_1">
                                        <img src="style/img/search_icon_3.png" alt="">
                                    </div>
                                    <div class="col_2">
                                        17.30
                                    </div>
                                    <div class="col_3">
                                        <a href="#">Обзорная экскурсия в Праге + Кораблик</a>
                                    </div>
                                    <div class="col_4">
                                        120€
                                    </div>
                                    <div class="col_5">
                                        100€
                                    </div>
                                    <div class="col_6">
                                        115€
                                    </div>
                                    <div class="col_7">
                                        <div class="places">
                                            <?php
                                            $busy = 16;
                                            $freely = 10;
                                            for($i=0;$i<$busy;$i++){
                                                if($i<$freely){
                                                    echo "<span><img src=\"style/img/car_busy.png\" alt=\"\"></span>";
                                                } else {
                                                    echo "<span><img src=\"style/img/car_freely.png\" alt=\"\"></span>";
                                                }
                                            } ?>
                                        </div>
                                    </div>
                                    <div class="col_8">
                                        <a href="#" class="yellow_btn">Заказать тур</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="section_search_row">
                                    <div class="col_1">
                                    </div>
                                    <div class="col_2">
                                        17.30
                                    </div>
                                    <div class="col_3">
                                        <a href="#">Обзорная экскурсия в Праге + Кораблик</a>
                                    </div>
                                    <div class="col_4">
                                        120€
                                    </div>
                                    <div class="col_5">
                                        100€
                                    </div>
                                    <div class="col_6">
                                        115€
                                    </div>
                                    <div class="col_7">
                                        <div class="places">
                                            <?php
                                            $busy = 16;
                                            $freely = 10;
                                            for($i=0;$i<$busy;$i++){
                                                if($i<$freely){
                                                    echo "<span><img src=\"style/img/car_busy.png\" alt=\"\"></span>";
                                                } else {
                                                    echo "<span><img src=\"style/img/car_freely.png\" alt=\"\"></span>";
                                                }
                                            } ?>
                                        </div>
                                    </div>
                                    <div class="col_8">
                                        <a href="#" class="yellow_btn">Заказать тур</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="section_search_row">
                                    <div class="col_1">
                                        <img src="style/img/search_icon_1.png" alt="">
                                    </div>
                                    <div class="col_2">
                                        17.30
                                    </div>
                                    <div class="col_3">
                                        <a href="#">Обзорная экскурсия в Праге + Кораблик</a>
                                    </div>
                                    <div class="col_4">
                                        120€
                                    </div>
                                    <div class="col_5">
                                        100€
                                    </div>
                                    <div class="col_6">
                                        115€
                                    </div>
                                    <div class="col_7">
                                        <div class="places">
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
                                    <div class="col_8">
                                        <a href="#" class="yellow_btn">Заказать тур</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="section_search_row">
                                    <div class="col_1">
                                        <img src="style/img/search_icon_2.png" alt="">
                                    </div>
                                    <div class="col_2">
                                        17.30
                                    </div>
                                    <div class="col_3">
                                        <a href="#">Обзорная экскурсия в Праге + Кораблик</a>
                                    </div>
                                    <div class="col_4">
                                        120€
                                    </div>
                                    <div class="col_5">
                                        100€
                                    </div>
                                    <div class="col_6">
                                        115€
                                    </div>
                                    <div class="col_7">
                                        <div class="places">
                                            <?php
                                            $busy = 18;
                                            $freely = 3;
                                            for($i=0;$i<$busy;$i++){
                                                if($i<$freely){
                                                    echo "<span><img src=\"style/img/car_busy.png\" alt=\"\"></span>";
                                                } else {
                                                    echo "<span><img src=\"style/img/car_freely.png\" alt=\"\"></span>";
                                                }
                                            } ?>
                                        </div>
                                    </div>
                                    <div class="col_8">
                                        <a href="#" class="yellow_btn">Заказать тур</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="section_search_row">
                                    <div class="col_1">
                                        <img src="style/img/search_icon_3.png" alt="">
                                    </div>
                                    <div class="col_2">
                                        17.30
                                    </div>
                                    <div class="col_3">
                                        <a href="#">Обзорная экскурсия в Праге + Кораблик</a>
                                    </div>
                                    <div class="col_4">
                                        120€
                                    </div>
                                    <div class="col_5">
                                        100€
                                    </div>
                                    <div class="col_6">
                                        115€
                                    </div>
                                    <div class="col_7">
                                        <div class="places">
                                            <?php
                                            $busy = 16;
                                            $freely = 10;
                                            for($i=0;$i<$busy;$i++){
                                                if($i<$freely){
                                                    echo "<span><img src=\"style/img/car_busy.png\" alt=\"\"></span>";
                                                } else {
                                                    echo "<span><img src=\"style/img/car_freely.png\" alt=\"\"></span>";
                                                }
                                            } ?>
                                        </div>
                                    </div>
                                    <div class="col_8">
                                        <a href="#" class="yellow_btn">Заказать тур</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="section_search_row">
                                    <div class="col_1">
                                    </div>
                                    <div class="col_2">
                                        17.30
                                    </div>
                                    <div class="col_3">
                                        <a href="#">Обзорная экскурсия в Праге + Кораблик</a>
                                    </div>
                                    <div class="col_4">
                                        120€
                                    </div>
                                    <div class="col_5">
                                        100€
                                    </div>
                                    <div class="col_6">
                                        115€
                                    </div>
                                    <div class="col_7">
                                        <div class="places">
                                            <?php
                                            $busy = 16;
                                            $freely = 10;
                                            for($i=0;$i<$busy;$i++){
                                                if($i<$freely){
                                                    echo "<span><img src=\"style/img/car_busy.png\" alt=\"\"></span>";
                                                } else {
                                                    echo "<span><img src=\"style/img/car_freely.png\" alt=\"\"></span>";
                                                }
                                            } ?>
                                        </div>
                                    </div>
                                    <div class="col_8">
                                        <a href="#" class="yellow_btn">Заказать тур</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="section_search_row">
                                    <div class="col_1">
                                        <img src="style/img/search_icon_3.png" alt="">
                                    </div>
                                    <div class="col_2">
                                        17.30
                                    </div>
                                    <div class="col_3">
                                        <a href="#">Обзорная экскурсия в Праге + Кораблик</a>
                                    </div>
                                    <div class="col_4">
                                        120€
                                    </div>
                                    <div class="col_5">
                                        100€
                                    </div>
                                    <div class="col_6">
                                        115€
                                    </div>
                                    <div class="col_7">
                                        <div class="places">
                                            <?php
                                            $busy = 16;
                                            $freely = 10;
                                            for($i=0;$i<$busy;$i++){
                                                if($i<$freely){
                                                    echo "<span><img src=\"style/img/car_busy.png\" alt=\"\"></span>";
                                                } else {
                                                    echo "<span><img src=\"style/img/car_freely.png\" alt=\"\"></span>";
                                                }
                                            } ?>
                                        </div>
                                    </div>
                                    <div class="col_8">
                                        <a href="#" class="yellow_btn">Заказать тур</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="textBox_title2 upper section_search_date">11.05.2016, Среда</p>
                        <div class="section_search_grayBox">
                            <div class="section_search_row">
                                <div class="col_1">
                                    <svg width="22" height="20">
                                        <use xlink:href="#search_star"></use>
                                    </svg>
                                </div>
                                <div class="col_2">
                                    Время
                                </div>
                                <div class="col_3">
                                    Тур
                                </div>
                                <div class="col_4">
                                    <svg width="22" height="20">
                                        <use xlink:href="#search_man"></use>
                                    </svg>
                                </div>
                                <div class="col_5">
                                    <svg width="22" height="20">
                                        <use xlink:href="#search_baby"></use>
                                    </svg>
                                </div>
                                <div class="col_6">
                                    <img src="style/img/ISIC.png" alt="">
                                </div>
                                <div class="col_7">
                                    Свободные места
                                </div>
                                <div class="col_8">
                                    Заказать
                                </div>
                            </div>
                        </div>
                        <div class="section_search_resultList">
                            <div>
                                <div class="section_search_row">
                                    <div class="col_1">
                                        <img src="style/img/search_icon_1.png" alt="">
                                    </div>
                                    <div class="col_2">
                                        17.30
                                    </div>
                                    <div class="col_3">
                                        <a href="#">Обзорная экскурсия в Праге + Кораблик</a>
                                    </div>
                                    <div class="col_4">
                                        120€
                                    </div>
                                    <div class="col_5">
                                        100€
                                    </div>
                                    <div class="col_6">
                                        115€
                                    </div>
                                    <div class="col_7">
                                        <div class="places">
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
                                    <div class="col_8">
                                        <a href="#" class="yellow_btn">Заказать тур</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="section_search_row">
                                    <div class="col_1">
                                        <img src="style/img/search_icon_2.png" alt="">
                                    </div>
                                    <div class="col_2">
                                        17.30
                                    </div>
                                    <div class="col_3">
                                        <a href="#">Обзорная экскурсия в Праге + Кораблик</a>
                                    </div>
                                    <div class="col_4">
                                        120€
                                    </div>
                                    <div class="col_5">
                                        100€
                                    </div>
                                    <div class="col_6">
                                        115€
                                    </div>
                                    <div class="col_7">
                                        <div class="places">
                                            <?php
                                            $busy = 18;
                                            $freely = 3;
                                            for($i=0;$i<$busy;$i++){
                                                if($i<$freely){
                                                    echo "<span><img src=\"style/img/car_busy.png\" alt=\"\"></span>";
                                                } else {
                                                    echo "<span><img src=\"style/img/car_freely.png\" alt=\"\"></span>";
                                                }
                                            } ?>
                                        </div>
                                    </div>
                                    <div class="col_8">
                                        <a href="#" class="yellow_btn">Заказать тур</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="section_search_row">
                                    <div class="col_1">
                                        <img src="style/img/search_icon_3.png" alt="">
                                    </div>
                                    <div class="col_2">
                                        17.30
                                    </div>
                                    <div class="col_3">
                                        <a href="#">Обзорная экскурсия в Праге + Кораблик</a>
                                    </div>
                                    <div class="col_4">
                                        120€
                                    </div>
                                    <div class="col_5">
                                        100€
                                    </div>
                                    <div class="col_6">
                                        115€
                                    </div>
                                    <div class="col_7">
                                        <div class="places">
                                            <?php
                                            $busy = 16;
                                            $freely = 10;
                                            for($i=0;$i<$busy;$i++){
                                                if($i<$freely){
                                                    echo "<span><img src=\"style/img/car_busy.png\" alt=\"\"></span>";
                                                } else {
                                                    echo "<span><img src=\"style/img/car_freely.png\" alt=\"\"></span>";
                                                }
                                            } ?>
                                        </div>
                                    </div>
                                    <div class="col_8">
                                        <a href="#" class="yellow_btn">Заказать тур</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="section_search_row">
                                    <div class="col_1">
                                    </div>
                                    <div class="col_2">
                                        17.30
                                    </div>
                                    <div class="col_3">
                                        <a href="#">Обзорная экскурсия в Праге + Кораблик</a>
                                    </div>
                                    <div class="col_4">
                                        120€
                                    </div>
                                    <div class="col_5">
                                        100€
                                    </div>
                                    <div class="col_6">
                                        115€
                                    </div>
                                    <div class="col_7">
                                        <div class="places">
                                            <?php
                                            $busy = 16;
                                            $freely = 10;
                                            for($i=0;$i<$busy;$i++){
                                                if($i<$freely){
                                                    echo "<span><img src=\"style/img/car_busy.png\" alt=\"\"></span>";
                                                } else {
                                                    echo "<span><img src=\"style/img/car_freely.png\" alt=\"\"></span>";
                                                }
                                            } ?>
                                        </div>
                                    </div>
                                    <div class="col_8">
                                        <a href="#" class="yellow_btn">Заказать тур</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="section_search_row">
                                    <div class="col_1">
                                        <img src="style/img/search_icon_1.png" alt="">
                                    </div>
                                    <div class="col_2">
                                        17.30
                                    </div>
                                    <div class="col_3">
                                        <a href="#">Обзорная экскурсия в Праге + Кораблик</a>
                                    </div>
                                    <div class="col_4">
                                        120€
                                    </div>
                                    <div class="col_5">
                                        100€
                                    </div>
                                    <div class="col_6">
                                        115€
                                    </div>
                                    <div class="col_7">
                                        <div class="places">
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
                                    <div class="col_8">
                                        <a href="#" class="yellow_btn">Заказать тур</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="section_search_row">
                                    <div class="col_1">
                                        <img src="style/img/search_icon_2.png" alt="">
                                    </div>
                                    <div class="col_2">
                                        17.30
                                    </div>
                                    <div class="col_3">
                                        <a href="#">Обзорная экскурсия в Праге + Кораблик</a>
                                    </div>
                                    <div class="col_4">
                                        120€
                                    </div>
                                    <div class="col_5">
                                        100€
                                    </div>
                                    <div class="col_6">
                                        115€
                                    </div>
                                    <div class="col_7">
                                        <div class="places">
                                            <?php
                                            $busy = 18;
                                            $freely = 3;
                                            for($i=0;$i<$busy;$i++){
                                                if($i<$freely){
                                                    echo "<span><img src=\"style/img/car_busy.png\" alt=\"\"></span>";
                                                } else {
                                                    echo "<span><img src=\"style/img/car_freely.png\" alt=\"\"></span>";
                                                }
                                            } ?>
                                        </div>
                                    </div>
                                    <div class="col_8">
                                        <a href="#" class="yellow_btn">Заказать тур</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="section_search_row">
                                    <div class="col_1">
                                        <img src="style/img/search_icon_3.png" alt="">
                                    </div>
                                    <div class="col_2">
                                        17.30
                                    </div>
                                    <div class="col_3">
                                        <a href="#">Обзорная экскурсия в Праге + Кораблик</a>
                                    </div>
                                    <div class="col_4">
                                        120€
                                    </div>
                                    <div class="col_5">
                                        100€
                                    </div>
                                    <div class="col_6">
                                        115€
                                    </div>
                                    <div class="col_7">
                                        <div class="places">
                                            <?php
                                            $busy = 16;
                                            $freely = 10;
                                            for($i=0;$i<$busy;$i++){
                                                if($i<$freely){
                                                    echo "<span><img src=\"style/img/car_busy.png\" alt=\"\"></span>";
                                                } else {
                                                    echo "<span><img src=\"style/img/car_freely.png\" alt=\"\"></span>";
                                                }
                                            } ?>
                                        </div>
                                    </div>
                                    <div class="col_8">
                                        <a href="#" class="yellow_btn">Заказать тур</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="section_search_row">
                                    <div class="col_1">
                                    </div>
                                    <div class="col_2">
                                        17.30
                                    </div>
                                    <div class="col_3">
                                        <a href="#">Обзорная экскурсия в Праге + Кораблик</a>
                                    </div>
                                    <div class="col_4">
                                        120€
                                    </div>
                                    <div class="col_5">
                                        100€
                                    </div>
                                    <div class="col_6">
                                        115€
                                    </div>
                                    <div class="col_7">
                                        <div class="places">
                                            <?php
                                            $busy = 16;
                                            $freely = 10;
                                            for($i=0;$i<$busy;$i++){
                                                if($i<$freely){
                                                    echo "<span><img src=\"style/img/car_busy.png\" alt=\"\"></span>";
                                                } else {
                                                    echo "<span><img src=\"style/img/car_freely.png\" alt=\"\"></span>";
                                                }
                                            } ?>
                                        </div>
                                    </div>
                                    <div class="col_8">
                                        <a href="#" class="yellow_btn">Заказать тур</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="col-xs-12 textBox">
                        <h3 class="textBox_title upper">Ближайшие экскурсии из Праги</h3>
                        <p>Компания MegaTour предлагает своим клиентам удобную систему бронирования туров из Праги по самым разным направлениям. Отныне заказать экскурсии из Праги стало намного легче. Для этого вам нет необходимости обращаться к нам непосредственно в офис. Достаточно включить дома компьютер, зайти в Интернет и ознакомиться на нашем сайте со страничкой, где отображаются все направления на ближайшие дни.</p>
                        <p>Для вашего удобства вся требуемая информация выставлена в виде таблицы. В ней отображены время и дата отправления, направление экскурсии (например, Чешский Крумлов и замок Глубока или страны Бенилюкса), стоимость экскурсии, количество свободных мест на текущий момент. Главное преимущество бронирования в режиме онлайн заключается в следующем: вы, не выходя из дома либо своего офиса и не наводя справок по телефону, можете видеть количество свободных мест в автобусе. Тем более, что информация постоянно обновляется.</p>
                        <p>После выбора нужного направления нужно зайти в меню «Заказать места». Здесь вам будет предложено детализировать свой заказ, указав количество бронируемых взрослых и детских мест – ведь у нас можно заказать не только индивидуальные (личные), но и групповые экскурсии из Праги. Проставив соответствующие цифры, теперь определитесь с тем, как будете оплачивать выбранную экскурсию: сделаете предоплату или внесете полную сумму. Наша компания предусмотрела обе эти возможности.</p>
                        <p>После этого вы переходите в «корзину заказа», где вы увидите электронную квитанцию с указанием выбранного направления (или направлений), количества персон, датыи времени отправления и предназначенной к оплате суммы. Выбрав способ оплаты – через системы PayPal, WebMoney или посредством банковского перевода – вы указываете информацию о себе (фамилия и имя, e-mail, телефон), соглашаетесь, поставив «галочку», с правилами использования услуг турагентства MegaTour и нажимаете «Оплатить».</p>
                        <p>Всё! На этом требования к оформлению заказа исчерпываются. Даже описание всех преимуществ онлайн-системы бронирования экскурсий заняло больше времени, чем уйдет на непосредственное оформление заказа. Попробуйте и сами в этом убедитесь!</p>
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