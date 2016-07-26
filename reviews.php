<?php
$amp = ["have"=>false, "page"=>"reviews"];
$pageInfo = ["headline"=>"Отзывы","description"=>"Выберите тур и получите больше ярких эмоций"];
include "view/header.php";
$breadcrumbs = ["Отзывы"];
include "view/breadcrumbs.php";
?>

        <section class="section section_tours" itemscope itemtype="http://schema.org/Article">
            <meta itemprop="inLanguage" content="ru" />
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="textBox_title upper" itemprop="headline">Отзывы</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-lg-8" itemprop="articleBody">
                        <div class="textBox">
                            <p><strong>Чехия, Прага, отзывы об экскурсиях от компании MegaTour.</strong></p>
                            <p>В море современных товаров и услуг можно если и не утонуть, то очень сильно растеряться или, что еще хуже, сделать выбор в пользу не самого лучшего. Сфера туризма в данном случае не исключение. Огромное количество турфирм сегодня предлагает свои услуги, зазывая клиентов и на все лады расхваливая свой товар. Кому же верить? Как сделать правильный выбор? Можно ли избежать обмана и подвоха со стороны искателей легкой наживы?</p>
                            <p>Самый надежный источник информации – это сами туристы. Те, кто уже посетил какую-нибудь далекую страну, воспользовавшись услугами той или иной турфирмы, не обманут. В отзывах об экскурсиях путешественники открыто высказывают либо свою искреннюю благодарность, либо свой праведный гнев. И здесь уже ничего не утаишь!</p>
                            <p>Поэтому мы приглашаем вас, дорогие туристы, делиться своими впечатлениями о Праге, отзывайтесь об экскурсиях, об отношении туристических фирм к своим клиентам, о методике проведения экскурсий, о транспорте и гидах.</p>
                            <p>Если вы уже воспользовались услугами MegaTour, расскажите тем, кто только собирается отправиться в путешествие о том, что их ожидает. Какая из предлагаемых нами экскурсий понравилась вам больше всего?</p>
                                Если вы заметили какие-либо недочеты в нашей работе, пишите и о них в своих отзывах. Это поможет нам улучшить качество предоставляемых услуг, учесть и исправить все возможные недостатки.</p>
                            <p>У этой важной работы есть и еще одна полезная сторона. Допустим, вы решили воспользоваться нашими услугами, прочитав отзывы других людей. В итоге остались довольны и провели прекрасное время в Праге или других городах Чехии и Европы. На этом доброе дело не должно прекратиться, помогите и другим путешественникам сделать правильный выбор и не попасть впросак.</p>
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
                        <div class=hidden" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                            <img itemprop="contentUrl" src="style/img/pic1.jpg">
                            <img itemprop="url" src="style/img/pic1.jpg" class="hidden">
                            <meta itemprop="width" content="476">
                            <meta itemprop="height" content="258">
                        </div>
                    </div>
                    <div class="col-xs-12 hidden-md-down col-lg-4">
                        <?php
                        include "view/banner_tour.php";
                        include "view/consultant.php";
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <?php
        include "view/section_social.php";
        include "view/section_reviews.php";
        ?>
    
    
        <section class="section section_tours pinkBg">
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