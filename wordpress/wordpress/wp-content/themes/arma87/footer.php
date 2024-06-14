<?php

$rights = get_field('rights', 'option');
?>
</div><!-- .base# -->

<footer class="footer">
	<div class="footer__in">
		<a class="footer__logo_w" href="<?php echo home_url('/') ?>">
			<?php
			if (function_exists('the_custom_logo')) {
				the_custom_logo();
			}
			?>
		</a>
		<div class="footer__list_w">
			<?php
			wp_nav_menu([
				'theme_location' => 'footer_menu',
				'container'      => false,
				'menu_class'     => 'footer__list',
				'fallback_cb'     => 'wp_page_menu',
				'items_wrap'      => '<ul id="%1$s" class="%2$s ">%3$s</ul>',
				'depth'           => 1,
			]);
			?>
		</div>
		<?php if (!empty($rights)) { ?>
			<div class="footer__copyright"><?php echo $rights ?></div>
		<?php } ?>
	</div>
</footer>

<div class="alert success">
	<div class="alert_main">
		<p>Your message has been sent successfully!</p>
		<div class="alert_icon"><svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
				<circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
				<path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
			</svg></div>
	</div>
</div>
<div class="alert failed">
	<div class="alert_main">
		<p>Check that the fields are correct!</p>
		<div class="alert_icon"><svg class="checkmark" class="test-icon" width="48" height="48" viewBox="0 0 48 48" fill="none" stroke="white" stroke-width="3" stroke-dasharray="100">
				<circle class="alert__circle" cx="26" cy="26" r="25" fill="none" />
				<path class="icon-path" id="check" d="M 15,15 L 32,33 M 32,15 L 15,33"></path>
			</svg></div>
	</div>
</div>
</div><!-- .wrapper# -->

<?php wp_footer(); ?>

</body>

</html>