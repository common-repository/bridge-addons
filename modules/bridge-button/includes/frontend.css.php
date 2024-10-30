<?php

// Size
if( $settings->size == 'small' ) {
	$size = '5px 10px';
}
elseif ( $settings->size == 'medium' ) {
	$size = '8px 15px';
}
elseif ( $settings->size == 'large' ) {
	$size = '12px 22px';
}
elseif ( $settings->size == 'custom' ) {
	$left = $settings->padding_left . 'px ';
	$right = $settings->padding_right . 'px ';
	$top = $settings->padding_top . 'px ';
	$bottom = $settings->padding_bottom . 'px ';
	$size = $top . $right . $bottom . $left; 
}

if (empty($settings->hover_speed)){
	$settings->hover_speed = '0.2';
}

?>

.fl-node-<?php echo $id; ?> .bb-bridge-button-wrap {
	text-align: <?php echo $settings->alignment; ?>;
}

.fl-node-<?php echo $id; ?> .bb-bridge-button {
	color: #<?php echo $settings->color; ?>;
	padding: <?php echo $size; ?>;
	border-style: <?php echo $settings->border_style; ?>;
	transition: all <?php echo $settings->hover_speed; ?>s <?php echo $settings->hover_timing; ?>;

<?php if ($settings->bg_color != ''): ?>
	background: <?php echo bb_bridge_color($settings->bg_color); ?>;
<?php endif; ?>

<?php if ($settings->background == 'none'): ?>
	background: transparent;
<?php endif; ?>

<?php if ($settings->border_color != ''): ?>
	border-color: <?php echo bb_bridge_color($settings->border_color); ?>;
<?php endif; ?>

<?php if ($settings->border_width_top != ''): ?>
    border-top-width: <?php echo $settings->border_width_top; ?>px;
<?php endif; ?>

<?php if ($settings->border_width_right != ''): ?>
    border-right-width: <?php echo $settings->border_width_right; ?>px;
<?php endif; ?>

<?php if ($settings->border_width_bottom != ''): ?>
    border-bottom-width: <?php echo $settings->border_width_bottom; ?>px;
<?php endif; ?>

<?php if ($settings->border_width_left != ''): ?>
    border-left-width: <?php echo $settings->border_width_left; ?>px;
<?php endif; ?>

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

.fl-node-<?php echo $id; ?> .bb-bridge-button:hover {
	color: #<?php echo $settings->hover_color; ?>;
	background: #<?php echo $settings->hover_bg_color; ?>;
}

<?php if ($settings->font_family['family'] != 'Default'): ?>
.fl-node-<?php echo $id; ?> .bb-bridge-button {
	font-family: <?php echo $settings->font_family['family']; ?>;
	font-weight: <?php echo $settings->font_family['weight']; ?>;
}
<?php endif; ?>

<?php if ($settings->font_size != ''): ?>
.fl-node-<?php echo $id; ?> .bb-bridge-button {
	font-size: <?php echo $settings->font_size; ?><?php echo $settings->font_size_unit; ?>;
}
<?php endif; ?>
