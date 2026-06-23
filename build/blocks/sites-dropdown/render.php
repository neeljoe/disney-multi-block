<?php
$label    = $attributes['label'] ?? 'SITES';
$menu_slug = $attributes['menuSlug'] ?? '';

wp_interactivity_state(
	'disney-sites',
	array(
		'isMenuOpen' => false,
	)
);
?>

<li
	<?php echo get_block_wrapper_attributes(); ?>
	data-wp-interactive="disney-sites"
	data-wp-context='{ "isMenuOpen": false }'
>
	<button
		class="wp-block-disney-sites-dropdown__toggle"
		data-wp-on--click="actions.toggleMenu"
		data-wp-bind--aria-expanded="context.isMenuOpen"
		aria-controls="sites-dropdown-menu"
	>
		<?php echo esc_html( $label ); ?>
		<svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
		</svg>
	</button>

	<div
		id="sites-dropdown-menu"
		class="wp-block-disney-sites-dropdown__menu"
		data-wp-bind--hidden="!context.isMenuOpen"
		hidden
	>
		<button
			class="wp-block-disney-sites-dropdown__close"
			data-wp-on--click="actions.closeMenu"
			aria-label="<?php esc_attr_e( 'Close menu', 'advanced-multi-block' ); ?>"
		>
			<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M4 4L12 12M12 4L4 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
			</svg>
		</button>

		<?php if ( $menu_slug ) : ?>
			<?php block_template_part( $menu_slug ); ?>
		<?php else : ?>
			<div class="sites-dropdown-grid">
				<div class="sites-dropdown-column">
					<h3 class="sites-dropdown-heading"><?php esc_html_e( 'Explore More', 'advanced-multi-block' ); ?></h3>
					<ul class="sites-dropdown-links">
						<li><a href="https://www.thewaltdisneycompany.com/"><?php esc_html_e( 'The Walt Disney Company', 'advanced-multi-block' ); ?></a></li>
						<li><a href="https://disneyparks.disney.go.com/blog/"><?php esc_html_e( 'Disney Parks Blog', 'advanced-multi-block' ); ?></a></li>
						<li><a href="https://disneyimagining.com/"><?php esc_html_e( 'Walt Disney Imagineering', 'advanced-multi-block' ); ?></a></li>
						<li><a href="https://disneyland.disney.go.com/about/"><?php esc_html_e( 'About Disneyland', 'advanced-multi-block' ); ?></a></li>
						<li><a href="https://disneyworld.disney.go.com/about/"><?php esc_html_e( 'About Disney in Florida', 'advanced-multi-block' ); ?></a></li>
					</ul>
				</div>
				<div class="sites-dropdown-column">
					<h3 class="sites-dropdown-heading"><?php esc_html_e( 'Consumers', 'advanced-multi-block' ); ?></h3>
					<ul class="sites-dropdown-links">
						<li><a href="https://disneyland.disney.go.com/"><?php esc_html_e( 'Disneyland Resort', 'advanced-multi-block' ); ?></a></li>
						<li><a href="https://disneyworld.disney.go.com/"><?php esc_html_e( 'Walt Disney World Resort', 'advanced-multi-block' ); ?></a></li>
						<li><a href="https://disneycruise.disney.go.com/"><?php esc_html_e( 'Disney Cruise Line', 'advanced-multi-block' ); ?></a></li>
						<li><a href="https://www.disneystore.com/"><?php esc_html_e( 'Disney Store', 'advanced-multi-block' ); ?></a></li>
					</ul>
				</div>
			</div>
		<?php endif; ?>
	</div>
</li>
