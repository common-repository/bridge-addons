<div class="bb-bridge-button-wrap">
<a href="<?php echo esc_html($settings->button_link); ?>" class="bb-bridge-button" target="<?php echo esc_html($settings->button_link_target); ?>">
	<?php if ( ! empty( $settings->icon ) && ( $settings->icon_position == 'before') ): ?>
		<i class="<?php echo $settings->icon; ?>"></i>
	<?php endif; ?>
		<?php echo esc_html($settings->button_text); ?>
	<?php if ( ! empty( $settings->icon ) && ( $settings->icon_position == 'after') ): ?>
		<i class="<?php echo $settings->icon; ?>"></i>
	<?php endif; ?>
</a>
</div>
