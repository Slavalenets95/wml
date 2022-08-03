<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package onlinegroup
 */

?>

	<footer class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="footer-contact">
					<a href="<?= get_home_url() ?>" class="footer-logo">
						<img src="<?= get_template_directory_uri() ?>/assets/imgs/logo.jpg" class="footer-logo__img">
					</a>
					<div class="footer-contact__wrapper">
						<div class="footer-contact__item">
							<span class="footer-contact__item-title">Телефон</span>
							<a href="tel:<?= get_field('footer_tel_link', 'options') ?>" class="footer-contact__tel-link"><?= get_field('footer_tel_txt', 'options') ?></a>
						</div>
						<div class="footer-contact__item">
							<span class="footer-contact__item-title">Эл.почта</span>
							<a href="tel:<?= get_field('footer_mail', 'options') ?>" class="footer-contact__mail-link"><?= get_field('footer_mail', 'options') ?></a>
						</div>
						<div class="footer-contact__item">
							<span class="footer-contact__item-title">Адрес офиса</span>
							<div class="footer-contact__address">
								<?= get_field('footer_address', 'options') ?>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-menus">
					<div class="footer-menus__item">
						<?php 
							wp_nav_menu( [
								'theme_location'  => 'footer_menu_1',
								'menu'            => 'Footer Menu 1',
								'container'       => 'ul',
								'menu_class'      => 'footer-nav__menu',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							] );
						?>
					</div>
					<div class="footer-menus__item">
						<?php 
							wp_nav_menu( [
								'theme_location'  => 'footer_menu_2',
								'menu'            => 'Footer Menu 2',
								'container'       => 'ul',
								'menu_class'      => 'footer-nav__menu',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							] );
						?>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<ul class="footer-bottom__menu">
					<li class="footer-bottom__menu-item">
						<a href="#" class="footer-bottom__menu-link">Ссылка</a>
					</li>
					<li class="footer-bottom__menu-item">
						<a href="#" class="footer-bottom__menu-link">Ссылка</a>
					</li>
					<li class="footer-bottom__menu-item">
						<a href="#" class="footer-bottom__menu-link">Ссылка</a>
					</li>
				</ul>
				<div class="footer-bottom__txt-content">
					<p>OOO «ВМ-Лаб» УНП 193151128</p>
					<p>Информация, размещенная на данном сайте, носит информационный характер и не является публичной офертой.</p>
				</div>
			</div>
		</div>
	</footer>
	<div class="dark-bg"></div>
	<div class="cb-form">
		<button class="cb-form__close">
			<i class="fa fa-times"></i>
		</button>
		<?= do_shortcode('[contact-form-7 id="26" title="Контактная форма Всплывающая"]') ?>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
