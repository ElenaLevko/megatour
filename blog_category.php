<?php
$amp = ["have"=>false, "page"=>"blog_category"];
$pageInfo = ["headline"=>"Megatour блог","description"=>"Выберите тур и получите больше ярких эмоций"];
include "view/header.php";
$breadcrumbs = ["Блог"];
include "view/breadcrumbs.php";
?>
    
        <section class="section section_blog" itemscope itemtype="http://schema.org/Blog">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="textBox_title upper" itemprop="description">О праге</h3>
                    </div>
                </div>
                <div class="row section_blog_catList">
                    <div class="col-xs-12">
                        <div class="section_blog_catLinks pinkBg">
                            <ul class="section_blog_catLinks_list">
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
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-8">
                        <?php for($i=0;$i<5;$i++){
                            include "view/blog_article_item.php";
                        } ?>
                        <p class="col-xs-12 section_articles_more"><a href="#" class="yellow_btn">Показать ещё</a></p>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <?php
                        include "view/banner_tour.php";
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
                        include "view/tour_item.php";
                    } ?>
                </div>
            </div>
        </section>
    
    
    <?php include "view/footer.php"; ?>


</body>
</html>