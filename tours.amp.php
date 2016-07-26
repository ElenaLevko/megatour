<?php
$amp = ["have"=>false, "page"=>"tours"];
$pageInfo = ["headline"=>"Экскурсии по Чехии","description"=>"Выберите тур и получите больше ярких эмоций"];
include "view/header.php";
$breadcrumbs = ["Экскурсии по Чехии"];
include "view/breadcrumbs.php";
?>
 
        <section class="section section_tours">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-8 col-xl-9">
                        <h3 class="textBox_title upper">Экскурсии по Чехии</h3>
                    </div>
                    <div class="col-xs-12 col-lg-4 col-xl-3 topBtn">
                        <a href="#" class="yellow_btn">Индивидуальные экскурсии</a>
                    </div>
                </div>
                <div class="row">
                    <?php for($i=0;$i<8;$i++){
                        include "view/tour_item_detail.amp.php";
                    } ?>
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