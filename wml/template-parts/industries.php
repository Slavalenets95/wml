<?php $title = get_sub_field('title');
      $items = get_sub_field('items');
?>

<div class="industries">
    <div class="container">
        <div class="industries-header">
            <h2 class="industries__title"><?= $title ?></h2>
        </div>
        <?php if($items) : ?>
            <div class="industries-items">
                <?php foreach($items as $item) : ?>
                    <div class="industries-item">
                        <img src="<?= $item['img']['url'] ?>" class="industries-item__img" loading="lazy">
                        <a href="<?= $item['link'] ?>" class="industries-item__content">
                            <?= $item['content'] ?>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        <?php endif ?>
    </div>
</div>