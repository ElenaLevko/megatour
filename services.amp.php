<?php
$amp = ["have"=>true, "page"=>"services"];
$pageInfo = ["headline"=>"Услуги","description"=>"Выберите тур и получите больше ярких эмоций"];
include "view/header.php";
$breadcrumbs = ["Услуги"];
include "view/breadcrumbs.php";
?>

        <section class="section section_services">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="textBox_title upper">Услуги</h3>
                    </div>
                </div>
                <div class="centerRow">
                    <?php for($i=0;$i<6;$i++){
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