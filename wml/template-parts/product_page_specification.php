<?php
    $pdf = get_sub_field('pdf');
    $title = get_sub_field('title');
    $specification = get_sub_field('specification_table');
?>

<div class="product-page-specifications sd-styles" data-tab="product-specification">
    <div class="container">
        <?php if($title) : ?>
            <div class="product-page-specifications__header">
                <h2 class="product-page-specifications__header-title"><?= $title ?></h2>
            </div>
        <?php endif ?>
        <?php if($specification) : ?>
            <div class="specification-table">
                <?= $specification ?>
            </div>
        <?php endif ?>
    </div>
</div>