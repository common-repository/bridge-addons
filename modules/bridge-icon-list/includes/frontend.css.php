<?php if (isset($settings->icon_color) AND ($settings->icon_color != '')): ?>
	.fl-node-<?php echo $id; ?> .bb-bridge-icon-list li i {
		color: #<?php echo $settings->icon_color; ?>;
	}
<?php endif; ?>

<?php if (isset($settings->text_color) AND ($settings->text_color != '')): ?>
	.fl-node-<?php echo $id; ?> .bb-bridge-icon-list li {
		color: #<?php echo $settings->text_color; ?>;
	}
<?php endif; ?>

<?php if (isset($settings->font_size) AND ($settings->font_size != '')): ?>
	.fl-node-<?php echo $id; ?> .bb-bridge-icon-list {
		font-size: <?php echo $settings->font_size; ?><?php echo $settings->font_size_unit; ?>;
	}
<?php endif; ?>

<?php if (isset($settings->font_family) AND ($settings->font_family['family'] != 'Default')): ?>
	.fl-node-<?php echo $id; ?> .bb-bridge-icon-list {
		font-family: <?php echo $settings->font_family['family']; ?>;
		font-weight: <?php echo $settings->font_family['weight']; ?>;
	}
<?php endif; ?>

.fl-node-<?php echo $id; ?> .bb-bridge-icon-list {
	text-align: <?php echo $settings->text_align; ?>;
}