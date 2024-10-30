<div class="bb-bridge-info-box">
	<i class="<?php echo $settings->icon; ?>"></i>
	<h3><?php echo esc_html($settings->title); ?></h3>
	<p><?php echo esc_html($settings->desc); ?></p>
	<a href="<?php if (isset($settings->link_url)) { echo $settings->link_url; } ?>" class="bb-bridge-info-box-button" target="<?php echo $settings->link_target; ?>">
		<?php echo esc_html($settings->link_title); ?>
	</a>
</div>