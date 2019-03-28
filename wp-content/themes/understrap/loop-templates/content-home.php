<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<style>

	#page-wrapper {
		padding-top: 0;
	}

	#metaslider_container_298 {
		position: relative;
		margin-top: -60px;
		left: 50%;
		right: 50%;
		margin-left: -50vw;
		margin-right: -50vw;
		max-width: 100vw;
		width: 100vw;
		bottom:-30px;/*mwilliams*/
	}

	.wp-block-column:first-child {
		flex-basis: 60%;
	}

	.wp-block-column:last-child {
		flex-basis: 40%;
	}
	img[class*="ffwd_"] {
		max-width: 100% !important;
	}
	@media (min-width: 600px){
		.wp-block-column {
    		margin-left: 32px;
		}
	}

</style>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
