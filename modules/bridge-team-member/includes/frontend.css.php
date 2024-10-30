<?php 

$top_left = $settings->img_top_left . 'px ';
$top_right = $settings->img_top_right . 'px ';
$bottom_right = $settings->img_bottom_right . 'px ';
$bottom_left = $settings->img_bottom_left . 'px ';

$border_radius = $top_left . $top_right . $bottom_right . $bottom_left . ';';

if ($settings->style == 'rounded') {
	$border_radius =  '50%';
}

if ($settings->style == 'default') {
	$border_radius =  '0';
}


?>
.fl-node-<?php echo $id; ?> .bb-bridge-team-member img,
.fl-node-<?php echo $id; ?> .bb-bridge-team-member-overlay {
	border-radius: <?php echo $border_radius; ?>;
}

.fl-node-<?php echo $id; ?> .bb-bridge-team-member {
	text-align: <?php echo $settings->text_align; ?>;
}

<?php if(!empty($settings->bg_color)): ?>
	.fl-node-<?php echo $id; ?> .bb-bridge-team-member-description {
		background: #<?php echo $settings->bg_color; ?>;
	}
<?php endif; ?>

<?php if(!empty($settings->text_color)): ?>
	.fl-node-<?php echo $id; ?> .bb-bridge-team-member-description {
		color: #<?php echo $settings->text_color; ?>;
	}
<?php endif; ?>

.fl-node-<?php echo $id; ?> .bb-bridge-team-member-description {
<?php if ($settings->padding_top != ''): ?>
    padding-top: <?php echo $settings->padding_top . 'px'; ?>;
<?php endif; ?>

<?php if ($settings->padding_right != ''): ?>
    padding-right: <?php echo $settings->padding_right . 'px'; ?>;
<?php endif; ?>

<?php if ($settings->padding_bottom != ''): ?>
    padding-bottom: <?php echo $settings->padding_bottom . 'px'; ?>;
<?php endif; ?>

<?php if ($settings->padding_left != ''): ?>
    padding-left: <?php echo $settings->padding_left . 'px'; ?>;
<?php endif; ?>
}