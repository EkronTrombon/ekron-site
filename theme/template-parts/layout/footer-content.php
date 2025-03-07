<?php

/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ekron
 */

?>

<footer id="colophon">
	<div class="py-10 container flex items-center justify-start gap-10">
		<div class="logo">
			<img src="/wp-content/uploads/2025/02/ekron_site_logo_v1_black.png" width="100" height="100" alt="<?php bloginfo('name'); ?>">
		</div>
		<?php if (has_nav_menu('menu-2')) : ?>
			<nav aria-label="<?php esc_attr_e('Footer Menu', 'ekron'); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-2',
						'menu_class'     => 'footer-menu',
						'depth'          => 1,
					)
				);
				?>
			</nav>
		<?php endif; ?>
	</div>
	<div class="border-t border-primary py-5 container flex items-center justify-start gap-10">
		<?php
		$ekron_blog_info = get_bloginfo('name');
		if (! empty($ekron_blog_info)) :
		?>
			<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
		<?php endif; ?>
	</div>
</footer><!-- #colophon -->