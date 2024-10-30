.fl-node-<?php echo $id; ?> .bb-bridge-pricing-table {
	color: #<?php echo $settings->pt_color; ?>;
	background: #<?php echo $settings->pt_bg_color; ?>;
	border-width: <?php echo $settings->pt_border_width; ?>;
	border-color: #<?php echo $settings->pt_border_color; ?>;
	border-style: <?php echo $settings->pt_border_style; ?>;
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

.fl-node-<?php echo $id; ?> .bb-bridge-pricing-table a {
	color: #<?php echo $settings->pt_color; ?>;
}