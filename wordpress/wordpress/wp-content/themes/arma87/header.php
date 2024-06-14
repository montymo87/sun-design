<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="description" content="<?php bloginfo('description') ?>" />
	<meta name="viewport" content="width=device-width" />

	<?php wp_head(); ?>
</head>
<?php
$header = get_field('header', 'option');

$logo = $header['logo'];

?>
<div class="preloader"></div>

<body>

	<header class="header js-header">
		<div class="header__in">
			<a class="header__logo_w" href="<?php echo home_url('/') ?>">
				<?php
				if (function_exists('the_custom_logo')) {
					the_custom_logo();
				}
				?>
			</a>
			<nav class="header__nav">
				<?php
				wp_nav_menu([
					'theme_location' => 'header_menu',
					'container'      => false,
					'menu_class'     => 'header__nav_list',
					'fallback_cb'     => 'wp_page_menu',
					'items_wrap'      => '<ul id="%1$s" class="%2$s ">%3$s</ul>',
					'depth'           => 2,
				]);
				?>
			</nav>
			<button class="header__menu_trigger js-header-menu-trigger" type="button" aria-label="Toggle menu"><span></span></button>
		</div>
	</header>

	<div class="wrapper">
		<div class="base">