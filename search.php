<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package cp
 */

get_header(); ?>

	<section id="primary" class="content-area">
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

					<?php if ( have_posts() ) : ?>

						<header class="page-header">
							<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'cp' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
						</header><!-- .page-header -->

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<?php
							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );
							?>

						<?php endwhile; ?>

						<?php the_posts_navigation(); ?>

					<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>



				</div>
				<!-- sidebar-1 widget -->
				<div class="sidebar">
					<?php if ( ! dynamic_sidebar('sidebar-1') ) : ?>
					<!-- This will output the sidebar-1 widget -->
					<?php endif; ?>
				</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
