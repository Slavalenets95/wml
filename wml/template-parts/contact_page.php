
<?php
    $headerContent = get_sub_field('header_content');
    $items = get_sub_field('repeater');
    $footerContent = get_sub_field('footer_contact');
?>

<div class="contact-page">
    <div class="container">
        <div class="contact-page-form">
            <div>
                <div class="contact-page-form__header">
                    <h2 class="contact-page-form__title">Отправьте нам сообщение</h2>
                    <span></span>
                </div>
                <div class="contact-page-form__body">
                    <?= do_shortcode('[contact-form-7 id="126" title="Contact Us Page Form"]') ?>
                </div>
            </div>
        </div>
        <div class="contact-page-content">
            <div>
                <div class="contact-content__header">
                    <div>
                        <h2 class="contact-page-form__title">Часто задаваемые вопросы</h2>
                        <span></span>
                    </div>
                    <?= $headerContent ?>
                </div>
                <div class="contact-page-content__body">
                    <div>
                        <h2 class="contact-page-form__title">Часто задаваемые вопросы</h2>
                        <span></span>
                    </div>
                    <div class="contact-page-content__items">
                        <?php foreach($items as $item) : ?>
                            <div class="contact-page-content__item">
                                <div class="contact-page-content__item-icon">
                                    <img src="<?= $item['icon']['url'] ?>" >
                                </div>
                                <div class="contact-page-content__item-content">
                                    <?= $item['content'] ?>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="contact-page-content__footer">
                    <?= $footerContent ?>
                </div>
            </div>
        </div>
    </div>
</div>