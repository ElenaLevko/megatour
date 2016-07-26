<section class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul>
                    <li itemprop="itemListElement" itemscope
                        itemtype="http://schema.org/ListItem">
                        <a itemprop="item" href="http://your-webmasters.com/demo/megatour/">
                            <span itemprop="name">Главная</span></a>
                        <meta itemprop="position" content="1" />
                    </li>
                    <?php
                    for($i=0;$i<count($breadcrumbs);$i++): ?>
                        <li>
                            <span class="sep">&#62;</span>
                        </li>
                        <li itemprop="itemListElement" itemscope
                            itemtype="http://schema.org/ListItem">
                            <?php if($i == (count($breadcrumbs)-1)): ?>
                                <span itemprop="item">
                                    <span itemprop="name"><?php echo $breadcrumbs[$i]; ?></span>
                                </span>
                            <?php else: ?>
                                <a itemprop="item" href="http://your-webmasters.com/demo/megatour/">
                                    <span itemprop="name"><?php echo $breadcrumbs[$i]; ?></span>
                                </a>
                            <?php endif; ?>
                            <meta itemprop="position" content="<?php echo $i+2; ?>" />
                        </li>
                    <?php endfor; ?>
                </ul>
            </div>
        </div>
    </div>
</section>