<?php
/**
 * The template for displaying all single posts.
 *
 * @package Riba Lite
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main text-center detalle_menus" role="main">
			<div class="line-horizontal"></div>
	    	<?php if ( function_exists( 'easingslider' ) ) { easingslider( 60 ); } ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>


			<!--<div class="container" style="display:none">
				<div class="row">
					<?php /*
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;*/
					?>

				</div>
			</div>-->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>

