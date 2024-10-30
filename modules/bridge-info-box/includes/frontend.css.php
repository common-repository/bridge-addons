.fl-node-<?php echo $id; ?> .bb-bridge-info-box {
<?php if ($settings->bg_color != '' && $settings->bg_type != 'none'): ?>
	background: <?php echo bb_bridge_color($settings->bg_color); ?>;
<?php endif; ?>
<?php if ($settings->border_color != ''): ?>
    border-color: #<?php echo $settings->border_color; ?>;
<?php endif; ?>
    border-style: <?php echo $settings->border_style; ?>;
    transition: all <?php echo $settings->hover_speed; ?>s;
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
<?php if ($settings->shadow == 'yes'): ?>
    box-shadow: <?php echo $settings->shadow_h_offset; ?>px <?php echo $settings->shadow_v_offset; ?>px <?php echo $settings->shadow_blur; ?>px #<?php echo $settings->shadow_color; ?>;
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

<?php if ($settings->icon_color != ''): ?>
.fl-node-<?php echo $id; ?> .bb-bridge-info-box i {
    color: #<?php echo $settings->icon_color; ?>;
}
<?php endif; ?>

<?php if ($settings->heading_color != ''): ?>
.fl-node-<?php echo $id; ?> .bb-bridge-info-box h1,
.fl-node-<?php echo $id; ?> .bb-bridge-info-box h2,
.fl-node-<?php echo $id; ?> .bb-bridge-info-box h3,
.fl-node-<?php echo $id; ?> .bb-bridge-info-box h4,
.fl-node-<?php echo $id; ?> .bb-bridge-info-box h5,
.fl-node-<?php echo $id; ?> .bb-bridge-info-box h6 {
	color: #<?php echo $settings->heading_color; ?>;
}
<?php endif; ?>

<?php if ($settings->text_color != ''): ?>
.fl-node-<?php echo $id; ?> .bb-bridge-info-box p {
    color: #<?php echo $settings->text_color; ?>;
}
<?php endif; ?>

.fl-node-<?php echo $id; ?> .bb-bridge-info-box:hover {
<?php if ($settings->hover_bg_color != '' && $settings->hover_bg_type != 'none'): ?>
	background: <?php echo bb_bridge_color($settings->hover_bg_color); ?>;
<?php endif; ?>
<?php if ($settings->hover_text_color != ''): ?>
    color: #<?php echo $settings->hover_text_color; ?>;
<?php endif; ?>
<?php if ($settings->hover_shadow == 'yes'): ?>
    box-shadow: <?php echo $settings->hover_shadow_h_offset; ?>px <?php echo $settings->hover_shadow_v_offset; ?>px <?php echo $settings->hover_shadow_blur; ?>px #<?php echo $settings->hover_shadow_color; ?>;
<?php endif; ?>
}

.fl-node-<?php echo $id; ?> .bb-bridge-info-box i {
    border-radius: 50%;
<?php if ($settings->icon_color != ''): ?>
    color: <?php echo bb_bridge_color($settings->icon_color); ?>;
<?php endif; ?>
<?php if ($settings->icon_bg_color != ''): ?>
    background: <?php echo bb_bridge_color($settings->icon_bg_color); ?>;
<?php endif; ?>
}

.fl-node-<?php echo $id; ?> .bb-bridge-info-box a {
<?php if ($settings->link_color != ''): ?>
    color: #<?php echo ($settings->link_color); ?>;
<?php endif; ?>
    transition: all <?php echo $settings->hover_speed; ?>s;
}

<?php if ($settings->icon_hover_color != ''): ?>
.fl-node-<?php echo $id; ?> .bb-bridge-info-box:hover i {
    color: #<?php echo ($settings->icon_hover_color); ?>;
}
<?php endif; ?>

<?php if ($settings->icon_bg_hover_color != ''): ?>
.fl-node-<?php echo $id; ?> .bb-bridge-info-box:hover i {
    background: #<?php echo ($settings->icon_bg_hover_color); ?>;
}
<?php endif; ?>

<?php if ($settings->heading_hover_color != ''): ?>
.fl-node-<?php echo $id; ?> .bb-bridge-info-box:hover h3 {
    color: #<?php echo ($settings->heading_hover_color); ?>;
}
<?php endif; ?>

<?php if ($settings->text_hover_color != ''): ?>
.fl-node-<?php echo $id; ?> .bb-bridge-info-box:hover p {
    color: #<?php echo ($settings->text_hover_color); ?>;
}
<?php endif; ?>

<?php if ($settings->link_box_hover_color != ''): ?>
.fl-node-<?php echo $id; ?> .bb-bridge-info-box:hover a {
    color: #<?php echo ($settings->link_box_hover_color); ?>;
}
<?php endif; ?>

<?php if ($settings->link_hover_color != ''): ?>
.fl-node-<?php echo $id; ?> .bb-bridge-info-box a:hover {
    color: #<?php echo ($settings->link_hover_color); ?>;
}
<?php endif; ?>