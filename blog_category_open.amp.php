<?php
$amp = ["have"=>false, "page"=>"blog_category_open"];
$pageInfo = ["headline"=>"Достопримечательности <br>Праги","description"=>"Выберите тур и получите больше ярких эмоций"];
include "view/header.php";
$breadcrumbs = ["Блог","о Праге","Достопримечательности Праги"];
include "view/breadcrumbs.php";
?>

        <section class="section section_blog" itemscope itemtype="http://schema.org/Blog">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="textBox_title upper"itemprop="description">Достопримечательности Праги</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-xl-8">
                        <?php for($i=0;$i<5;$i++){
                            include "view/blog_article_item.amp.php";
                        } ?>
                        <p class="col-xs-12 section_articles_more"><a href="#" class="yellow_btn">Показать ещё</a></p>
                    </div>
                    <div class="col-xs-12 hidden-lg-down col-xl-4">
                        <?php
                        include "view/banner_tour.amp.php";
                        include "view/ask.php";
                        ?>
                    </div>
                </div>
            </div>
        </section>
    
        <?php include "view/section_social.php"; ?>
    
        <section class="section section_tours" itemscope itemtype="http://schema.org/Blog">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="textBox_title upper" itemprop="description">Популярные туры</h3>
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