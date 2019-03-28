<?php
/**
 * Sidebar setup for footer sub.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_active_sidebar( 'footersub' ) ) : ?>
	<!-- ******************* The Footer Full-width Widget Area ******************* -->
	<div class="wrapper" id="wrapper-footer-full">

		<div class="<?php echo esc_attr( $container ); ?>" id="footer-full-content" tabindex="-1">
		
			<!-- <div class="row"> -->
				<?php dynamic_sidebar( 'footersub' ); ?>
			<!-- </div> -->
		</div>
	</div><!-- #wrapper-footer-full -->
<?php endif; ?>