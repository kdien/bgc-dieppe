<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<style>

	.updated, .byline {
		display: none;
	}

	@media (min-width: 768px) {
		.post {
			margin-bottom: 2em;
		}
	}

</style>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		

		<?php if ( 'post' == get_post_type() ) : ?>

			

		<?php endif; ?>

	</header><!-- .entry-header -->

	

	<div class="entry-content">
		<div class="card">
			<div class="card-body">
				<div class="row">

					<div class="col-lg-3">
						<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
					</div>

					<div class="col-lg-9">
						<?php 
							the_title( sprintf( '<h2 class="card-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
							understrap_posted_on();
						?>		
		
						<div class="entry-meta">
							
						</div><!-- .entry-meta -->

						<div class="card-text">
							<?php
								the_excerpt();
							?>
						</div>
		
						<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
							'after'  => '</div>',
							) );
						?>
					</div>

				</div>
			</div>
		</div>
		<div></div>
	</div><!-- .entry-content -->
	

	<footer class="entry-footer">

		<?php /*understrap_entry_footer();*/ ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
