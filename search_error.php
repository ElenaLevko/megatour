<?php
$amp = ["have"=>false, "page"=>"search_error"];
$pageInfo = ["headline"=>"Результаты поиска<br> на сайте www.megatour.cz","description"=>"Выберите тур и получите больше ярких эмоций"];
include "view/header.php";
$breadcrumbs = ["Результат поиска по запросу: Крумлов"];
include "view/breadcrumbs.php";
?>
 
        <section class="section section_search">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <img src="style/img/search_error.jpg" alt="">
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