<?php 
/*
Template Name: Home
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div id="home">

<?php do_action( 'foundationpress_before_content' ); ?>

	<!-- Page Content -->
	
	<div class="row">

		<div class="parallax concession">
			<div class="wrap">
				<p>Stop by our new concession. We are offering a wide variety of Pop, Water, Coffee (free refills), Chips, and Chocolate Bars, Popcorn and Twizzlers. We are now offering Hot Dogs and Hamburgers. Through the summer months we will also offer a variety of Ice Cream treats.</p>
			</div>
		</div>

		<?php //get_sidebar(); ?>
	</div>
	

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();
