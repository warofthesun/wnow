<?php
/**
 * Template part for displaying a post's content
 *
 * @package buddyx
 */

namespace BuddyX\Buddyx;

?>

<div class="entry-content">
	<?php
	the_content(
		sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'buddyx' ),
				[
					'span' => [
						'class' => [],
					],
				]
			),
			get_the_title()
		)
	); ?>
	
	<div class="events">
		<?php
	if( have_rows('events') ):
	// Loop through rows.
	while( have_rows('events') ) : the_row();
			// Load sub field value.
			
			the_sub_field('event_code'); 
			// Do something...
		
	// End loop.
	endwhile;
endif;	
?>
	</div>
	<?php

	wp_link_pages(
		[
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'buddyx' ),
			'after'  => '</div>',
		]
	);
	?>
</div><!-- .entry-content -->
