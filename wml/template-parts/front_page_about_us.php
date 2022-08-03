<?php
    $img = get_sub_field('img');
    $content = get_sub_field('content');
?>

<div class="about-block">
    <div class="about-block__img-item">
        <!-- <img src="<?= $img['url'] ?>" class="about-block__img"> -->
        <iframe width="560" height="315" src="https://www.youtube.com/embed/nb5yscK_sWo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="about-block__txt-item">
        <div class="about-block__content">
            <?= $content ?>
        </div>
        <button class="about-block__more" type="button"> 
            <span>Показать полностью</span>
            <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
        </button>
    </div>
</div>