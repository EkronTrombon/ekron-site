<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ekron
 */
?>
<header id="masthead" class="py-5 border-b">
	<div class="container flex items-center justify-start gap-10">
		<div class="logo">
			<img src="/wp-content/uploads/2025/02/ekron_site_logo_v1_black.png" width="100" height="100" alt="<?php bloginfo('name'); ?>">
		</div>
		<div class="nav-menu">
			<nav id="site-navigation" aria-label="<?php esc_attr_e('Main Navigation', 'ekron'); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
					)
				);
				?>
			</nav>
		</div>
		<?php
		$header_text = get_theme_mod('header_text', __('Welcome!', 'mytheme'));
		echo esc_html($header_text);

		$header_bg_color = get_theme_mod('header_background_color', '#ffffff');
		echo '<div style="background-color: ' . esc_attr($header_bg_color) . ';">...</div>';

		$show_search = get_theme_mod('show_header_search', true);
		if ($show_search) {
			get_search_form();
		}

		$header_image_id = get_theme_mod('header_image');
		if ($header_image_id) {
			echo wp_get_attachment_image($header_image_id, 'full');
		}
		?>
	</div>
</header><!-- #masthead -->