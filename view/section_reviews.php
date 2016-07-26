<section class="section section_reviews">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 textBox">
                <h3 class="textBox_title2 upper">Отзывы</h3>
                <br>
                <ul class="section_reviews_list">
                    <?php for($i=0;$i<3;$i++): ?>
                        <li class="row section_reviews_list_item" itemscope itemtype="http://schema.org/Review">
                            <link itemprop="url" href="www.megatour.cz/">
                            <div class="hidden" itemprop="itemReviewed" itemscope itemtype="http://schema.org/Organization">
                                <p itemprop="name">Туристическое агентство MegaTour®</p>
                                <p><strong><span itemprop="telephone">+ (420) 776 284 307</span>, Николай Кравчук</strong></p>
                                <p><strong>Работаем каждый день с 8:30 до 19:00</strong></p>
                                <p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                                    <strong>
                                        <span itemprop="postalCode">11000</span>, <span itemprop="streetAddress">Вацлавская площадь 846/1</span> <span itemprop="areaServed">(внутри пассажа, вход "B", в лифте кнопка"1", офис № 100)</span>, <span itemprop="addressLocality">Прага</span>
                                    </strong>
                                </p>
                            </div>
                            <div class="col-xs-12 col-lg-8" itemprop="reviewBody">
                                <p><strong itemprop="author">Сергей Лебедь</strong></p>
                                <p itemprop="description">"Megatour - супер экскурсионное бюро. Никаких проблем, всегда отличный сервис. <br>Николай - супер гид. Рекомендую всем пользоваться услугами этой компании. От экскурсий остались незабываемые впечатления. Николай спасибо огромное от меня и супруги."</p>
                                <p class="section_reviews_list_date"><meta itemprop="datePublished" content="2012-11-19">19.11.2012 в 12.00</p>
                                <p><a href="#" itemprop="url">http://mysite.com</a></p>
                                <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="hidden">
                                    <meta itemprop="worstRating" content = "1">
                                    <span itemprop="ratingValue">1</span>/
                                    <span itemprop="bestRating">5</span>stars
                                </div>
                            </div>
                        </li>
                    <?php endfor; ?>
                </ul>
                <p><a href="#" class="yellow_btn">Ещё отзывов</a></p>
                <br><br>
            </div>
            <div class="col-xs-12 col-lg-8 textBox">
                <h3 class="textBox_title2 upper">Оставить отзыв</h3>
                <form class="row form">
                    <p class="col-xs-12 col-md-6">
                        <input class="form_input" type="text" placeholder="Имя*">
                    </p>
                    <p class="col-xs-12 col-md-6">
                        <input class="form_input" type="email" placeholder="Email*">
                    </p>
                    <p class="col-xs-12">
                        <textarea class="form_textarea" placeholder="Отзыв"></textarea>
                    </p>
                    <p class="col-xs-12"><button type="submit" class="yellow_btn">Оставить отзыв</button></p>
                </form>
            </div>
        </div>
    </div>
</section>