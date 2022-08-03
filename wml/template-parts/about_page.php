<?php
    $img = get_sub_field('img');
    $content = get_sub_field('content');
    $facebook = get_sub_field('facebook');
    $telegram = get_sub_field('telegram');
    $instagram = get_sub_field('instagram');
    $vk = get_sub_field('vk');
?>

<div class="about">
    <div class="container">
        <?php if($img) : ?>
            <div class="img-block">
                <img src="<?= $img['url'] ?>" class="img-block__img">
            </div>
        <?php endif ?>
        <?php if($content) : ?>
            <div class="content-block sd-styles">
                <div>
                    <?= $content ?>
                </div>
                <div class="social-block">
                    <ul>
                        <?php if($facebook) : ?>
                            <li class="facebook">
                                <a href="<?= $facebook ?>"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                        <?php endif ?>
                        <?php if($instagram) : ?>
                            <li class="instagram">
                                <a href="<?= $instagram ?>"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                        <?php endif ?>
                        <?php if($telegram) : ?>
                            <li class="telegram">
                                <a href="<?= $telegram ?>"><i class="fa-brands fa-telegram"></i></a>
                            </li>
                        <?php endif ?>
                        <?php if($vk) : ?>
                            <li class="vk">
                                <a href="<?= $vk ?>"><i class="fa-brands fa-vk"></i></a>
                            </li>
                        <?php endif ?>
                    </ul>
                </div>
            </div>
        <?php endif ?>
    </div>
</div>