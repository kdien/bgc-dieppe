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



	</header><!-- .entry-header -->
	<figure class="wp-block-image page-banner">
		<img src="http://oulton-001-site9.gtempurl.com/wp-content/uploads/2019/03/banner-events2.jpg" alt="" class="wp-image-535"/>
	</figure>
	<?php /*echo get_the_post_thumbnail( $post->ID, 'large' );*/ ?>
		<div class="entry-meta">

			<?php understrap_posted_on(); ?>

		</div><!-- .entry-meta -->
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
