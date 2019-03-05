<?php
/**
 * Single post partial template.
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

	.post > img {
		margin-bottom: 2em !important;
		margin-top: 2em !important;
	}

	span[class*="nav-"] a {
		color: #000;
	}

	span[class*="nav-"] a:hover {
		text-decoration: none;
	}

</style>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">

			<?php understrap_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<?php /*echo get_the_post_thumbnail( $post->ID, 'large' );*/ ?>

	<div class="entry-content mb-5">

		<?php the_content(); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
