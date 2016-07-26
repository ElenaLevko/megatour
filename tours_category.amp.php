<?php
$amp = ["have"=>true, "page"=>"tours_category"];
$pageInfo = ["headline"=>"Индивидуальные экскурсии <br>по Чехии","description"=>"Выберите тур и получите больше ярких эмоций"];
include "view/header.php";
$breadcrumbs = ["Индивидуальные экскурсии по Чехии"];
include "view/breadcrumbs.php";
?>
 
        <section class="section section_tours">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-9">
                        <h3 class="textBox_title upper">Индивидуальные экскурсии по Чехии</h3>
                    </div>
                    <div class="col-xs-12 col-lg-3 topBtn">
                        <a href="#" class="yellow_btn">Групповые экскурсии</a>
                    </div>
                </div>
                <div class="col-xs-12 menuCat">
                    <div class="col-xs-12 col-md-4 menuCat_item">
                        <a href="#">Индивидуальные экскурсии по Праге</a>
                    </div>
                    <div class="col-xs-12 col-md-4 menuCat_item">
                        <a href="#">Индивидуальные экскурсии по Чехии</a>
                    </div>
                    <div class="col-xs-12 col-md-4 menuCat_item">
                        <a href="#">Индивидуальные экскурсии по Европе</a>
                    </div>
                </div>
                <div class="row">
                    <?php for($i=0;$i<8;$i++){
                        include "view/tour_item_detail.amp.php";
                    } ?>
                </div>
                <div class="row" itemscope itemtype="http://schema.org/Article">
                    <meta itemprop="inLanguage" content="ru" />
                    <div class="col-xs-12 textBox" itemprop="articleBody">
                        <meta itemprop="headline" content="Индивидуальные экскурсии по Чехии">
                        <br>
                        <div itemprop="text">
                            <p>Дорогие друзья! Как вы уже успели заметить, компания MegaTour никогда не останавливается на достигнутом. Наша креативная команда ищет и находит новые идеи, которые затем воплощает в новые возможности для вас. И мы рады сегодня предложить всем любителям путешествий индивидуальные экскурсии по Чехии на русском языке.
                                Вы, несомненно, заинтересовались! В таком случае не будем хранить ненужную интригу – расскажем о них более подробно.</p>
                            <h4 class="textBox_title2">Что такое индивидуальные экскурсии?</h4>
                            <p>Сразу хотим оговориться: мы вовсе не хотим противопоставить индивидуальные экскурсии из Праги традиционным групповым турам. Среди многочисленных туристов оба эти направления пользуются интересом и неизменным спросом. Просто индивидуальные экскурсии немного другие, и в глазах многих путешественников имеют ряд очевидных преимуществ.</p>
                            <p>Они в большей степени ориентированы на тех, кто любит путешествовать с семьей, с близкими родственниками, с немногочисленной компанией друзей. То есть обычные групповые походы по достопримечательностям не соответствуют запросам данной категории туристов.</p>
                            <p>Во время индивидуальной экскурсии человек находится, что называется, среди самых близких людей. А таковых обычно слишком много не бывает. Данное обстоятельство облегчает и работу персонального гида, который сопровождает группу. Он получает возможность больше внимания уделять каждому туристу, обстоятельно отвечать на все вопросы.</p>
                            <h4 class="textBox_title2">Никаких посредников, никаких переплат!</h4>
                            <p>Кто-то сейчас наверняка подумал: группа небольшая, гид персональный – значит, индивидуальная экскурсия слишком дорогое удовольствие. Не спешите с выводами. Компания MegaTour работает без посредников, поэтому любые переплаты исключены.</p>
                            <p>Заказать индивидуальные экскурсии по Чешской Республике можно непосредственно на нашем сайте, позвонив нам по телефону или обратившись непосредственно в офис компании. Вы будете приятно удивлены демократичностью наших цен. Не говоря уже о незабываемых впечатлениях, которые останутся у вас после экскурсии по нашей очень компактной по территории, но бесконечно красивой стране.</p>
                            <p>Чешский Крумлов и замок Глубока, Карловы Вары, Кутна гора и Чешский Штернберг, Моравский Крас и замок Пернштейн, Детенице, Карлштейн, Замок Кост и замок Сихров – мы осуществляем индивидуальные экскурсии по всем этим популярным направлениям.</p>
                            <p>рисоединяйтесь к нам уже сегодня!</p>
                        </div>
                        <div class="hidden" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                            <img itemprop="contentUrl" src="style/img/pic3.jpg" class="hidden">
                            <link href="style/img/pic3.jpg" itemprop="url">
                            <meta itemprop="width" content="476">
                            <meta itemprop="height" content="258">
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