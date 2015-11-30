<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cp
 */

?>

	</div><!-- #content -->

	<footer id="footer" class="site-footer" role="contentinfo">

			<?php


				$checking = array(
				'depth'        => 1,
				'date_format'  => get_option('date_format'),
				'title_li'	   => '',
				'child_of'     => $checkingPage,
				'echo'         => 1,
				'sort_column'  => 'menu_order');
				$savings = array(
				'depth'        => 1,
				'date_format'  => get_option('date_format'),
				'title_li'	   => '',
				'child_of'     => $savingsPage,
				'echo'         => 1,
				'sort_column'  => 'menu_order');
				$savings = array(
				'depth'        => 1,
				'date_format'  => get_option('date_format'),
				'title_li'	   => '',
				'child_of'     => $loansPage,
				'echo'         => 1,
				'sort_column'  => 'menu_order'); 
				$savings = array(
				'depth'        => 1,
				'date_format'  => get_option('date_format'),
				'title_li'	   => '',
				'child_of'     => $cdPage,
				'echo'         => 1,
				'sort_column'  => 'menu_order');
				$savings = array(
				'depth'        => 1,
				'date_format'  => get_option('date_format'),
				'title_li'	   => '',
				'child_of'     => $bsPage,
				'echo'         => 1,
				'sort_column'  => 'menu_order');   
			?>
		
		<section class="testimonials">
			<blockquote>
				<h3>It is a blessing to be a part of this family. I call Pinnacle my family because I’ve been a member since 1996, when it was SGC I love my Checking Account so many benefits come with it.</h3>
				<cite>Read More Testimonials <i class="fa fa-chevron-circle-right"></i> <span class="test-author">- M.M.</span></cite>  
			</blockquote>
		</section>

		<div class="site-info">
			<div class="ft-info">

				<?php if ( ! dynamic_sidebar('ft-info') ) : ?>
				<!-- This will output the footer left widget -->
				<?php endif; ?>
			</div>
			<div class="ft">
				<ul>
					<li class="ftTitle">Checking</li>
					<?php echo ($checkingPage);	?>
				</ul>
				<ul>
					<li class="ftTitle">Savings</li>
					<?php wp_list_pages($savings)	?>
				</ul>
			</div>
			<div class="ft">
				<nav id="footer-nav" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
				</nav>
			</div>
			<div class="ft">
				<nav id="footer-nav" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
				</nav>
			</div>
			<div class="ft">
				<nav id="footer-nav" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
				</nav>
			</div>	
		</div><!-- .site-info -->
		
	</footer><!-- #footer -->
	<footer id="sub-footer">
		<div class="sub-ft-wrapper">
			<div class="ft-date">&copy; <?php the_time('Y') ?> Company. All rights reserved.</div>
			<div class="sub-ft-nav">
				<ul>
					<li>stuff</li>
				</ul>
			</div>
		</div>
		
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>