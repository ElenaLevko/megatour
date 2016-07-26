<?php
$amp = ["have"=>true, "page"=>"blog"];
$pageInfo = ["headline"=>"Megatour блог","description"=>"Выберите тур и получите больше ярких эмоций"];
include "view/header.php";
$breadcrumbs = ["Блог"];
include "view/breadcrumbs.php";
?>
        <section class="section section_blog" itemscope itemtype="http://schema.org/Blog">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="textBox_title upper" itemprop="description">Megatour блог</h3>
                    </div>
                </div>
                <div class="row section_blog_catList">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="section_blog_category pinkBg">
                            <h4 class="textBox_title2 upper">Культура</h4>
                            <ul class="section_blog_category_list">
                                <li><a href="#">Архитектура</a></li>
                                <li><a href="#">Знаменитые личности</a></li>
                                <li><a href="#">Кино и Музыка</a></li>
                                <li><a href="#">Литература</a></li>
                                <li><a href="#">Мультипликация</a></li>
                                <li><a href="#">Спорт</a></li>
                                <li><a href="#">Театр</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="section_blog_category pinkBg">
                            <h4 class="textBox_title2 upper">Легенды праги</h4>
                            <ul class="section_blog_category_list">
                                <li><a href="#">Домовые знаки Праги</a></li>
                                <li><a href="#">Легенды Вышеграда</a></li>
                                <li><a href="#">Легенды малой страны и градчан</a></li>
                                <li><a href="#">Легенды нового города</a></li>
                                <li><a href="#">Легенды старого города</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="section_blog_category pinkBg">
                            <h4 class="textBox_title2 upper">О Праге</h4>
                            <ul class="section_blog_category_list">
                                <li><a href="#">Достопримечательности Праги</a></li>
                                <li><a href="#">Музеи</a></li>
                                <li><a href="#">Недвижимость в Праге</a></li>
                                <li><a href="#">Необычные скульптуры</a></li>
                                <li><a href="#">Пивные Праги</a></li>
                                <li><a href="#">Прага для детей</a></li>
                                <li><a href="#">Районы Праги</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="section_blog_category pinkBg">
                            <h4 class="textBox_title2 upper">О чехии</h4>
                            <ul class="section_blog_category_list">
                                <li><a href="#">Города Чехии</a></li>
                                <li><a href="#">Достопримечательности</a></li>
                                <li><a href="#">Замки и дворцы</a></li>
                                <li><a href="#">История</a></li>
                                <li><a href="#">Курорты</a></li>
                                <li><a href="#">Погода в Чехии</a></li>
                                <li><a href="#">Праздники</a></li>
                                <li><a href="#">Религия</a></li>
                                <li><a href="#">Сделано в Чехии</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="section_blog_category pinkBg">
                            <h4 class="textBox_title2 upper">Полезное</h4>
                            <ul class="section_blog_category_list">
                                <li><a href="#">Cвадьба в Чехии</a></li>
                                <li><a href="#">Виза в Чехию</a></li>
                                <li><a href="#">Свежие новости</a></li>
                                <li><a href="#">Словарь чешских слов</a></li>
                                <li><a href="#">Транспорт</a></li>
                                <li><a href="#">Чешская кухня</a></li>
                                <li><a href="#">Шопинг</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-8">
                        <?php for($i=0;$i<5;$i++){
                            include "view/blog_article_item.amp.php";
                        } ?>
                        <p class="col-xs-12 section_articles_more"><a href="#" class="yellow_btn">Показать ещё</a></p>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <?php
                            include "view/banner_tour.amp.php";
                            include "view/ask.php";
                        ?>
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