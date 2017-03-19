<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div id="footer-container">
			<footer id="footer">
				<?php //do_action( 'foundationpress_before_footer' ); ?>
				<?php //dynamic_sidebar( 'footer-widgets' ); ?>
				<?php //do_action( 'foundationpress_after_footer' ); ?>
				<div class= "wrap">
					
					<div id= "social-icons">
						<p>Follow Us</p>
						<hr>
						<ul class="row medium-up-4">
						 	<div class="column"><a class="facebook-icon" href="https://www.facebook.com/RedDeerAuctionWorld/?ref=aymt_homepage_panel">FB</a></div>
							<div class="column"><a href="https://www.linkedin.com/in/red-deer-auction-world-915328125/" class= "linkedin-icon"><img src="<?php bloginfo('template_url')?>/assets/images/icons/linkedin_icon.png" alt="LinkedIn Icon"/></a></div>
							<div class="column"><a href="https://twitter.com/RDAuctionWorld" class= "twitter-icon"><img src="<?php bloginfo('template_url')?>/assets/images/icons/twitter_icon.png" alt="Twitter Icon"/></a></div>
							<div class="column"><a href="https://www.instagram.com/rdauctionworld/" class= "instagram-icon"><img src="<?php bloginfo('template_url')?>/assets/images/icons/instagram_icon.png" alt="Instagram Icon"/></a></div>
						</ul>
					</div>
				</div>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
