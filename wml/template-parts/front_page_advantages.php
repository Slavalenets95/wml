<?php $items = get_field('advantages_items', 'options'); ?>
<?php if($items) : ?>
    <div class="front-page__advantages" id="advantages">
        <div class="front-page__advantages-header">
            <h2 class="front-page__advantages-title">Сотрудничество</h2>
        </div>
        <div class="items">
            <?php foreach($items as $item) :
                $icon = $item['icon']['url'];
                $content = $item['content'];
            ?>
                <div class="item">
                    <div class="item-wrapper">
                        <img src="<?= $icon ?>" class="item-icon">
                        <div class="item__txt-block">
                            <?= $content ?>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
<?php endif ?>