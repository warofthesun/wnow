<?php
/**
 * Template Name: Page-Without-Sidebar
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package buddyx
 */

namespace BuddyX\Buddyx;

get_header();

buddyx()->print_styles( 'buddyx-content' );
buddyx()->print_styles( 'buddyx-sidebar', 'buddyx-widgets' );

?>	
	<?php do_action( 'buddyx_sub_header' ); ?>
	
	<?php do_action( 'buddyx_before_content' ); ?>

		<main id="primary" class="site-main">
			<?php
			if ( have_posts() ) {

				while ( have_posts() ) {
					the_post();

					get_template_part( 'template-parts/content/entry', 'full-width' );
				}
				
			} else {
				get_template_part( 'template-parts/content/error' );
			}
			?>
			<?php include 'template-parts/custom-fields/organizations.php'; ?>
		</main><!-- #primary -->
	</div><!-- .container -->

	<?php do_action( 'buddyx_after_content' ); ?>
<?php
get_footer();
