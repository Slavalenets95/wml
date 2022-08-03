<?php $items = get_sub_field('repeater'); ?>

<div class="front-page__industries">
    <div class="front-page__industries-header">
        <h2 class="front-page__industries-title">Отраслевые решения</h2>
    </div>
    <div class="items">
        <?php foreach($items as $item) : 
                $content = $item['description'];
                $img = $item['img'];
                $link = $item['link'];    
        ?>
            <div class="item">
                <?php if($link) : ?>
                    <a href="<?= $link['url'] ?>" class="item__img-block">
                        <img src="<?= $img['url'] ?>" class="item__img" loading="lazy">
                    </a>
                <?php else : ?>
                    <div class="item__img-block">
                        <img src="<?= $img['url'] ?>" class="item__img" loading="lazy">
                    </div>  
                <?php endif; ?>
                <div class="item__txt-block">
                    <?= $content ?>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>