<?php $items = get_field('team_repeater', 'options'); 
      $headerContent = get_field('team_header_content', 'options');
?>
<?php if($items) : ?>
    <div class="front-page__team">
        <div class="container">
            <div class="header">
                <h2 class="header__title"><span><?= $headerContent ?><span></h2>
            </div>
            <div class="items">
                <?php foreach($items as $item) : ?>
                    <div class="item">
                        <div class="item-wrapper">
                            <h3 class="item__title"><?= $item['title'] ?></h3>
                            <p class="item__subtitle"><?= $item['sub_title'] ?></p>
                            <div class="item__content">
                                <?= $item['content'] ?>
                            </div>
                            <div class="item-social">
                                <?php if($item['telegram_login']) : ?>
                                    <a href="https://telegram.me/<?= $item['telegram_login'] ?>" class="item-social__item">
                                        <i class="fa-brands fa-telegram"></i>
                                    </a>
                                <?php endif; ?>
                                
                                <?php if($item['viber_number']) : ?>
                                    <a href="viber://chat?number=<?= $item['viber_number'] ?>" class="item-social__item">
                                        <i class="fa-brands fa-viber"></i>
                                    </a>
                                <?php endif; ?>
                                
                                <?php if($item['whatsapp_number']) : ?>
                                    <a href="https://api.whatsapp.com/send?phone=<?= $item['whatsapp_number'] ?>" class="item-social__item">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
<?php endif ?>