<ul class="bb-bridge-icon-list">
	<?php foreach ($settings->list_items as $item): ?>
		<li><i class="<?php echo $settings->list_icon; ?>"></i><?php echo esc_html($item); ?></li>
	<?php endforeach; ?>
</ul>