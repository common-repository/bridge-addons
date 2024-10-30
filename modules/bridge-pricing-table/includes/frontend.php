<div class="bb-bridge-pricing-table">
	<h4><?php echo esc_html($settings->pt_title); ?></h4>
	<div class="price"><?php echo esc_html($settings->pt_price); ?></div>
	<ul>
	<?php foreach ($settings->pt_features as $feature): ?>
		<li><?php echo esc_html($feature); ?></li>
	<?php endforeach; ?>
	</ul>
	<a href="<?php echo esc_html($settings->pt_button_link); ?>" target="<?php echo esc_html($settings->pt_button_link_target); ?>">
		<?php echo esc_html($settings->pt_button_text); ?>
	</a>
</div>