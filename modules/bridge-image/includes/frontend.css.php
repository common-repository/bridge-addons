.fl-node-<?php echo $id; ?> .bb-bridge-image img,
.fl-node-<?php echo $id; ?> .bb-bridge-image .bb-bridge-overlay {
<?php if ($settings->top_left != ''): ?>
    border-top-left-radius: <?php echo $settings->top_left; ?>px;
<?php endif; ?>
<?php if ($settings->top_right != ''): ?>
    border-top-right-radius: <?php echo $settings->top_right; ?>px;
<?php endif; ?>
<?php if ($settings->bottom_left != ''): ?>
    border-bottom-left-radius: <?php echo $settings->bottom_left; ?>px;
<?php endif; ?>
<?php if ($settings->bottom_right != ''): ?>
    border-bottom-right-radius: <?php echo $settings->bottom_right; ?>px;
<?php endif; ?>
}

.fl-node-<?php echo $id; ?> .bb-bridge-image .bb-bridge-overlay {
<?php if ($settings->hover_color != '' && $settings->hover_type == 'color'): ?>
	background: <?php echo bb_bridge_color($settings->hover_color); ?>;
<?php endif; ?>
<?php if ($settings->hover_image != '' && $settings->hover_type == 'image'): ?>
	background: url(<?php echo $settings->hover_image_src; ?>);
	background-size: cover;
<?php endif; ?>
}

<?php if ($settings->hover_type == 'filter' && $settings->hover_filter == 'grayscale'): ?>
.fl-node-<?php echo $id; ?> .bb-bridge-image:hover img {
    filter: grayscale(100%);
}
<?php endif; ?>
<?php if ($settings->hover_type == 'filter' && $settings->hover_filter == 'sepia'): ?>
.fl-node-<?php echo $id; ?> .bb-bridge-image:hover img {
	filter:sepia(100%);
}
<?php endif; ?>

.fl-node-<?php echo $id; ?> .bb-bridge-image .bb-bridge-overlay-text,
.fl-node-<?php echo $id; ?> .bb-bridge-image .bb-bridge-overlay,
.fl-node-<?php echo $id; ?> .bb-bridge-image img {
	transition: all <?php echo $settings->hover_speed; ?>s;
	transition-timing-function: <?php echo $settings->hover_timing; ?>;
}