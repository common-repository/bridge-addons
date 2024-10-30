.fl-node-<?php echo $id; ?> .bb-bridge-heading h1,
.fl-node-<?php echo $id; ?> .bb-bridge-heading h2,
.fl-node-<?php echo $id; ?> .bb-bridge-heading h3,
.fl-node-<?php echo $id; ?> .bb-bridge-heading h4,
.fl-node-<?php echo $id; ?> .bb-bridge-heading h5,
.fl-node-<?php echo $id; ?> .bb-bridge-heading h6 {
	text-align: <?php echo $settings->heading_text_align; ?>;
<?php if ($settings->font_family['family'] != 'Default'): ?>
	font-family: <?php echo $settings->font_family['family']; ?>;
	font-weight: <?php echo $settings->font_family['weight']; ?>;
<?php endif; ?>
<?php if ($settings->font_size != ''): ?>
	font-size: <?php echo $settings->font_size; ?><?php echo $settings->font_size_unit; ?>;
<?php endif; ?>
<?php if ($settings->color != ''): ?>
	color: <?php echo bb_bridge_color($settings->color); ?>;
<?php endif; ?>
}

.fl-node-<?php echo $id; ?> .bb-bridge-heading span {
	text-align: <?php echo $settings->sub_heading_text_align; ?>;
<?php if ($settings->sub_font_family['family'] != 'Default'): ?>
	font-family: <?php echo $settings->sub_font_family['family']; ?>;
	font-weight: <?php echo $settings->sub_font_family['weight']; ?>; 
<?php endif; ?>
<?php if ($settings->sub_font_size != ''): ?>
	font-size: <?php echo $settings->sub_font_size; ?><?php echo $settings->sub_font_size_unit; ?>;
<?php endif; ?>
<?php if ($settings->sub_color != ''): ?>
	color: <?php echo bb_bridge_color($settings->sub_color); ?>;
<?php endif; ?>
}