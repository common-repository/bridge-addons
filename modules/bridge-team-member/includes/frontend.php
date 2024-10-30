<div class="bb-bridge-team-member">

	<div class="bb-bridge-team-member-image">

		<img src="<?php echo $settings->member_image_src; ?>">

		<ul class="bb-bridge-team-member-social-profile">
			<?php foreach ($settings->social as $profile): ?>
			<?php if (!empty($profile->social_icon)): ?>
				
				<li>
					<a href="<?php echo $profile->social_link; ?>">
						<i class="<?php echo $profile->social_icon; ?>"></i>
					</a>
				</li>
			<?php endif; ?>
			<?php endforeach; ?>
		</ul>

		<div class="bb-bridge-team-member-overlay"></div>
		
	</div><!-- END .bb-bridge-team-member-image -->

	<div class="bb-bridge-team-member-description">
		<h3><?php echo esc_html($settings->member_name); ?></h3>	
		<span><?php echo esc_html($settings->member_position); ?></span>
		<p><?php echo esc_html($settings->member_description); ?></p>
	</div><!-- END .bb-bridge-team-member-description -->
	
</div><!-- END .bb-bridge-team-member -->