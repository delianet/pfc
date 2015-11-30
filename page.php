<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cp
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div id="jumbo-page" class="jumbo">
				<div class="jumbo-wrapper">
					<div class="jumbo-title">
						<h1><?php echo get_the_title(); ?></h1>	
					</div>
				</div>
			</div>
			<div class="page-section">
				<div class="page-content">
			
					<?php while ( have_posts() ) : the_post(); ?>

						<?php the_content(); ?>

						<?php
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						?>

					<?php endwhile; // End of the loop. ?>

					<footer class="entry-footer">
						<?php
							edit_post_link(
								sprintf(
									/* translators: %s: Name of current post */
									esc_html__( 'Edit %s', 'lhs' ),
									the_title( '<span class="screen-reader-text">"', '"</span>', false )
								),
								'<span class="edit-link">',
								'</span>'
							);
						?>
					</footer><!-- .entry-footer -->
				</div>
				<div class="sidebar">
					<div class="sidebar-nav">
						<!-- get parent page-->
						<?php
							$parent_title = get_the_title($post->post_parent);
							$parent_permalink = get_the_permalink($post->post_parent);
						?>
						<!-- display parent --> 
						<h2><a href="<?php echo $parent_permalink; ?>"><?php echo $parent_title; ?></a></h2>
								
						<!-- get and display children of parent -->
						<?php
						  if($post->post_parent)
						  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
						  else
						  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
						  if ($children) { ?>
						  <ul>
						  <?php echo $children; ?>
						  </ul>
						<?php } ?>	
					</div>
					
					<!-- financial articles and tips widget -->

					<?php if ( ! dynamic_sidebar('Financial Articles and Tips') ) : ?>
					<!-- This will output the financial articles widget -->
					<?php endif; ?>

					<!-- contact us -->

					<div class="contact-us-side">
						<a href="">Contact Us <i class="fa fa-chevron-circle-right"></i></a>
					</div>

				</div>
			</div>	
			
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>



