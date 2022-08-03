<?php
    $headerContent = get_sub_field('header_content');
    $items = get_sub_field('items');
?>

<div class="product-page-peculiarities active" data-tab="product-content-tab">
    <div class="container">
        <?php if($headerContent) : ?>
            <div class="product-page-peculiarities__header">
                <?= $headerContent ?>
            </div>
        <?php endif ?>
        <?php if($items) : ?>
            <div class="items sd-styles">
                <?php foreach($items as $item) : 
                        $img = $item['img'];
                        $content = $item['content'];    
                ?>
                    <div class="item">
                        <?php if($img) : ?>
                            <div class="item-img-block">
                                <img src="<?= $img['url'] ?>">
                            </div>
                        <?php endif ?>
                        <?php if($content) : ?>
                            <div class="item-content-block">
                                <?= $content ?>
                            </div>
                        <?php endif ?>
                    </div>
                <?php endforeach ?>
            </div>
        <?php endif ?>
    </div>
</div>