<div class="bb-bridge-image">
	<?php if (isset($settings->image_link) AND ($settings->image_link != '')): ?>
		<a href="<?php echo $settings->image_link; ?>">
	<?php endif; ?>
	<img src="<?php echo $settings->image_src; ?>">
	<div class="bb-bridge-overlay-text">
	<?php if ($settings->hover_text != '' && $settings->hover_type == 'color'): ?>
		<?php echo $settings->hover_text; ?>
	<?php endif; ?>
	</div>
	<div class="bb-bridge-overlay"></div>
	<?php if (isset($settings->image_link) AND ($settings->image_link != '')): ?>
		</a>
	<?php endif; ?>
</div>