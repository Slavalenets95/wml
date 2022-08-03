<?php
    $items = get_sub_field('items');
    $content = get_sub_field('content');
?>

<div class="product-intro">
    <div class="breadcrumb-wrapper">
        <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }
        ?>
    </div>
    <div>
        <div class="container">
            <?php if($items) : ?>
                <div class="sliders-block">
                    <div class="slider">
                        <?php foreach($items as $item) : ?>
                            <div class="slider-item">
                                <img class="slider-item__img" src="<?= $item['img']['url'] ?>">
                            </div>
                        <?php endforeach ?>
                    </div>
                    <div class="nav-slider">
                        <?php $counter = 0; foreach($items as $item) : ?>
                            <div data-for="<?= $counter ?>" class="nav-slider-item <?= !$counter ? 'active' : '' ?>">
                                <img class="nav-slider-item__img" src="<?= $item['img']['url'] ?>">
                            </div>
                        <?php $counter++; endforeach ?>
                    </div>
                </div>
            <?php endif ?>
            <?php if($content) : ?>
                <div class="content-block-wrapper">
                    <div class="content-block sd-styles">
                        <?= $content ?>
                    </div>
                    <button class="content-block__cb-btn cb-btn">свяжитесь с нами</button>
                </div>
            <?php endif ?>
        </div>
    </div>
</div>
<div class="product-nav-wrapper">
    <div class="container">
        <div class="product-nav">
            <button class="product-nav__btn active" data-tab-btn="product-tab-btn" data-for="product-content-tab">информация о продукте</button>
            <button class="product-nav__btn" data-tab-btn="product-tab-btn" data-for="product-specification">техническая спецификация</button>
        </div>
    </div>
</div>