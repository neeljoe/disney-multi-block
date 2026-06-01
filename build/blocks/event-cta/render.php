<?php
$post_id = get_the_ID();
if ( ! $post_id ) {
	return;
}

$website      = get_post_meta( $post_id, '_rp_event_website', true );
$registration = get_post_meta( $post_id, '_rp_event_registration', true );

if ( ! $website && ! $registration ) {
	return;
}
?>

<div <?php echo get_block_wrapper_attributes(); ?>>
	<?php if ( $website ) : ?>
		<a class="wp-block-button__link wp-element-button"
		   style="background-color:var(--wp--preset--color--lime-green)"
		   href="<?php echo esc_url( $website ); ?>"
		   target="_blank"
		   rel="noopener noreferrer">
			<?php esc_html_e( 'Official Website', 'runpartner' ); ?>
		</a>
	<?php endif; ?>

	<?php if ( $registration ) : ?>
		<a class="wp-block-button__link wp-element-button"
		   href="<?php echo esc_url( $registration ); ?>"
		   target="_blank"
		   rel="noopener noreferrer">
			<?php esc_html_e( 'Register Now', 'runpartner' ); ?>
		</a>
	<?php endif; ?>
</div>
