<div class="bb-bridge-heading">

	<<?php echo $settings->heading; ?>>
		<?php if(!empty($settings->link)): ?>
			<a href="<?php echo $settings->link; ?>" target="<?php echo $settings->link_target; ?>">
		<?php endif; ?>	

			<?php echo $settings->text; ?>

		<?php if(!empty($settings->link)): ?>
			</a>
		<?php endif; ?>			
	</<?php echo $settings->heading; ?>>

	<?php if(!empty($settings->sub_heading_text)): ?>
		<span><?php echo $settings->sub_heading_text; ?></span>
	<?php endif; ?>

</div>