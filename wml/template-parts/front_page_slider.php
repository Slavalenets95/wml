<?php $items = get_sub_field('front_page_slides'); ?>

<?php if($items) : ?>

<section class="front-page__slider-wrapper">
    <div class="img-slider">
        <?php foreach($items as $item) : 
            $imgUrl = $item['img']['url'];
        ?>
            <div class="slide">
                <img class="slide__img" src="<?= $imgUrl ?>">
            </div>
        <?php endforeach ?>
    </div>
    <div class="txt-slider">
        <?php foreach($items as $item) : 
            $content = $item['content'];
            $link = $item['link'];

        ?>
            <div class="slide">
                <?= $content ?>
                <div class="slide-link-wrapper">
                    <a href="<?= $link['url'] ?>" class="slide-link"><?= $link['title'] ?></a>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>

<?php endif; ?>