<?php
$amp = ["have"=>false, "page"=>"about"];
$pageInfo = ["headline"=>"О нас","description"=>"Выберите тур и получите больше ярких эмоций"];
include "view/header.php";
$breadcrumbs = ["О нас"];
include "view/breadcrumbs.php";
?>

        <section class="section section_about" itemscope itemtype="http://schema.org/Article">
            <meta itemprop="inLanguage" content="ru" />
            <div class="container" itemprop="articleBody">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="textBox_title upper" itemprop="headline">О компании MegaTour</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-8">
                        <div class="textBox" itemprop="text">
                            <p>Наша фирма предоставляет и развивает услуги костюмированных и театрализованных экскурсий в Праге и Чехии, организовывает индивидуальные и групповые экскурсии по Чехии, Австрии, Германии.</p>
                            <p>Наши гиды, которые отличаются креативным, творческим мышлением, хотят внести в наш грешный мир хотя бы немного гармонии, красоты и оптимизма, и помогает им в этом театр, танец, музыка, книга, сценические образы. Мы думаем, что наши гиды помогут вам, наш уважаемый турист, отдохнуть и полюбить туризм навсегда.</p>
                            <h3 class="textBox_title upper">О нас на телевидении</h3>
                            <div class="row">
                                <div class="col-xs-12 col-md-7 video">
                                    <p><iframe width="560" height="290" src="https://www.youtube.com/embed/8brt9OZNE7A" frameborder="0" allowfullscreen></iframe></p>
                                </div>
                                <div class="col-xs-12 col-md-5 videoText">
                                    <div>
                                        <h3 class="textBox_title2">Недавно наш гид-скелет принимал участие
                                            в съемках популярной туристической программы " Орел и Решка"</h3>
                                    </div>
                                </div>
                            </div>
                            <p>«Вся наша жизнь – игра, а люди в ней – актеры», – так говорил Уильям Шекспир. Талант гида заключается не только в том, чтобы доносить до слушателей информацию, он также должен передавать эмоции и чувства жителей города. Поэтому возникла идея создания костюмированных экскурсий в Чехии.Наши гиды, выступая в различных, уже полюбившихся туристам образах, не только раскрывают завесу над историей города – они открывают и его душу. Ведь творческий гид, находясь в образе, словно несет в себе отпечаток судеб других людей, когда-то проживавших в этом городе. Когда рассказ театрализованного экскурсовода пробуждает воображение слушателей, каменные здания как будто оживают на мгновение. Слушатель словно вовлекается в этот увлекательный и познавательный поток информации и эмоций, и будто летает средневековыми улицами города, заглядывает под фасады зданий, ощущая радость и боль, победу и поражение. Потому что историю города можно увидеть не только по фасадам зданий, ее можно узнать по поведению жителей города. Люди – как зеркальное отражение, они являются носителями истории: кто-то серый и угрюмый как песчаниковая скульптура, а кто-то жизнерадостный
                                и разнообразный как ренессансное граффито.</p>
                            <h4 class="textBox_title">Адрес туристического агентства MegaTour:</h4>
                            <p>Václavské namésti 1, офис в пассаже, Praha 1, 11000, Česka Republika.
                            телефон: (+420) 776 28 43 07</p>
                            <p><a href="#">Лицензии и юридическая информация туристического агентства MegaTour</a></p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <?php
                        include "view/banner_tour.php";
                        include "view/ask.php";
                        ?>
                    </div>
                </div>

                <div class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                    <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                        <img itemprop="contentUrl" src="style/img/logo.png" alt="">
                        <img itemprop="url" src="style/img/logo.png" alt="">
                        <meta itemprop="width" content="600">
                        <meta itemprop="height" content="60">
                    </div>
                    <meta itemprop="name" content="Мегатур">
                    <meta itemprop="telephone" content="+ (420) 776 284 307">
                    <meta itemprop="address" content="11000, Вацлавская площадь 846/1">
                </div>
                <meta itemprop="author" content="Мегатур">
                <meta itemprop="dateModified" content="2016-05-08">
                <meta itemprop="datePublished" content="2016-05-08">
                <meta itemprop="mainEntityOfPage" content="http://www.megatour.cz/">
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