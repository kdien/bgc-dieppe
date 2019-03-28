<?php
/**
 * Sidebar setup for footer img.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php //if ( is_active_sidebar( 'footerfull' ) ) : ?>
	<!-- ******************* The Footer Full-width Widget Area ******************* -->
	<div class="py-3">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2766.5578899191264!2d-64.68314118459739!3d46.099789298828675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ca0bc67fe56a4b5%3A0x14d21d3749c45d61!2s76+Emmanuel+St%2C+Dieppe%2C+NB+E1A+2J5!5e0!3m2!1sen!2sca!4v1552651079592" style="width:100%;border:0" allowfullscreen=""></iframe>
		<?php //dynamic_sidebar( 'footerimg' ); ?>
	</div>
<?php //endif; ?>