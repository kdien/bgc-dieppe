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

		.entry-title a, .entry-date {
			color: #fff;
		}

		.entry-content {
			display: grid;
			grid-template-columns: 3fr 1fr;
			grid-template-rows: min-content;
			grid-gap: 1.5em; 
		}

			.entry-content div:nth-child(1) {
				background-color: #74BC1F;
				border-bottom-right-radius: 50vh;
				border-top-right-radius: 50vh;
				padding: 1em 2em;
			}

			.entry-content div:nth-child(1) p {
				margin-right: 10%;
			}
			
		.wp-post-image {
			border-radius: 50%;
		}
	}

</style>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		

		<?php if ( 'post' == get_post_type() ) : ?>

			

		<?php endif; ?>

	</header><!-- .entry-header -->

	

	<div class="entry-content">
		<div>
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
					'</a></h2>' ); ?>

			<div class="entry-meta">
				<?php understrap_posted_on(); ?>
			</div><!-- .entry-meta -->

			<?php
			the_excerpt();
			?>
	
			<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
				) );
				?>
		</div>
		<div><?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?></div>
	</div><!-- .entry-content -->
	

	<footer class="entry-footer">

		<?php /*understrap_entry_footer();*/ ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
