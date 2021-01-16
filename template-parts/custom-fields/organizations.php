<div class="full-width full-width__organizations">
	<?php if( have_rows('company_repeater') ) : ?>
		<ul class="organizations">
			<?php while( have_rows('company_repeater') ) : the_row(); ?>
			<li>
				<div class="logo">
					<?php if (get_sub_field('business_website') ) : ?>
						<a href="<?php the_sub_field('business_website'); ?>" target="_blank">
					<?php endif; ?>
					<img src="<?php the_sub_field('business_logo'); ?>" alt="<?php the_sub_field('name'); ?>">
						<?php if (get_sub_field('business_website') ) : ?>
					</a>
					<?php endif; ?>
				</div>
				<div class="content">
					<h3><?php the_sub_field('name'); ?></h3>
					<?php the_sub_field('business_description'); ?>
				</div>
			</li>
			<?php endwhile; ?> 
		</ul>
	<?php endif; ?>
</div>