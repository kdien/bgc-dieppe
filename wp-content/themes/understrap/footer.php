<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footersub' ); ?>
<?php //get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper py-0" id="wrapper-footer-full">
	<div class="<?php echo esc_attr( $container ); ?>">
		<div class="row">
			<div class="col-md-12">
				<footer class="site-footer" id="colophon">
					<div class="row">
						<div class="col-sm-12 col-md-4">
							<div class="site-info py-3">
								<h5>Contact Us | Nous joindre</h5>
								<address>
									76 rue Emmanuel Street<br>
									Dieppe NB E1A 2J5 <br>
									<i class="fa fa-phone-square" aria-hidden="true"></i> 506-857-3807<br>
									<i class="fa fa-envelope" aria-hidden="true"></i> info@dbgc.org

								</address>
							</div>
						</div>
						<div class="col-sm-12 col-md-4">
							<div class="site-info py-3">
								<!-- <h5>Contact Us | Nous joindre</h5> -->
								<ul>
									<li><a href="faqs">FAQ's</a> - <a href="qfd">QFD</a></li>
									<li><a href="privacy">Privacy</a> - <a href="vie-privee">Vie privée</a></li>
								</ul>							
							</div>
						</div>
						<div class="col-sm-12 col-md-4">
							<div class="site-info">
								<?php get_template_part( 'sidebar-templates/sidebar', 'footerimg' ); ?>
							</div>
						</div>
					</div>			
				</footer><!-- #colophon -->
			</div><!--col end -->
		</div><!-- row end -->
	 </div><!--container end -->
</div><!-- wrapper end -->
<div class="wrapper py-0" id="wrapper-footer-dark">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-8">
				<div class="copyright">
					<p class="small py-3 mb-0">&copy; <?php echo date("Y");?> Boys & Girls Club of Dieppe/Repaire Jeunesse de Dieppe</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-4">
				<ul class="py-3 mb-0 social-network">
					<li><a href="https://www.facebook.com/groups/166277973564746" target="_blank" title="Facebook"><i class="fa fa-facebook-square"></i></a></li>
					<li><a href="https://twitter.com/dieppebgc?lang=<?php echo pll_current_language();?>" target="_blank" title="Twitter"><i class="fa fa-twitter-square"></i></a></li>				
					<li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>
</body>
</html>