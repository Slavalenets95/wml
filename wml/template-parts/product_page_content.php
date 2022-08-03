<?php
    $content = get_sub_field('content');
    $img = get_sub_field('img');
    $bgColor = get_sub_field('background_color');
    $imgPosition = get_sub_field('img_position');
    $cssClasses = get_sub_field('css_classes');
    $imgMargin = get_sub_field('image_margin');
    $contentPadding = get_sub_field('content_padding');
    $headerContent = get_sub_field('header_content');
?>


    <?php if($imgPosition != 'top') : ?>
    <div class="product-content-block active <?= $cssClasses ? $cssClasses : '' ?>" style="background-color: <?= $bgColor ?>" data-tab="product-content-tab">
        <?php if($headerContent) : ?>
            <div class="product-content-block__header sd-styles">
                <div class="container">
                    <?= $headerContent ?>
                </div>
            </div>
        <?php endif ?>
        <div class="container <?= $imgPosition ?>">
            <?php if($content) : ?>
                <div class="product-content-block__content">
                    <div class="sd-styles">
                        <?= $content ?>
                    </div>
                </div>
            <?php endif ?>
            <?php if($img) : ?>
                <div class="product-content-block__img">
                    <img src="<?= $img['url'] ?>" >
                </div>
            <?php endif ?>
        </div>
    </div>
    <?php else : ?>
    <div class="product-content-block active <?= $imgPosition ? $imgPosition : '' ?> <?= $cssClasses ? $cssClasses : '' ?>" style="background-color: <?= $bgColor ?>" data-tab="product-content-tab"> 
        <?php if($content) : ?>
            <div class="product-content-block__content" <?php if($contentPadding) : ?> style="padding-top: <?= $contentPadding ?>px" <?php endif ?>>
                <div class="sd-styles container">
                    <?= $content ?>
                </div>
            </div>
        <?php endif ?>
        <?php if($img) : ?>
            <div class="product-content-block__img" <?php if($imgMargin) : ?> style="margin-bottom: <?= $imgMargin ?>px" <?php endif ?>>
                <div class="container">
                    <img src="<?= $img['url'] ?>" >
                </div>
            </div>
        <?php endif ?>
    </div>
    <?php endif ?>