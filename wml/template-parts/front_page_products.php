<?php $products = get_sub_field('products'); ?>

<div class="front-page-products" id="front-page-products">
    <div class="front-page-products__header">
        <h2 class="front-page-product__title">Каталог</h2>
    </div>
    <div class="container">
        <?php foreach($products as $product) : 
            $img = $product['img'];
            $title = $product['title'];
            $description = $product['description'];
            $link = $product['link'];
            $color = $product['color'];    
        ?>
            <div class="item" style="background-color: <?= $color ?>">
                <div class="item-content">
                    <h3 class="item__title"><?= $title ?></h3>
                    <p class="item__description"><?= $description ?></p>
                    <a href="<?= $link['url'] ?>" class="item__link"><?= $link['title'] ?></a>
                </div>
                <div class="item-img">
                    <img src="<?= $img['url'] ?>" class="item__img">
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>