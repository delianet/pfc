<?php
/**
 * The template for displaying front page.
 *
 * @package test theme
 */

get_header(); ?>

    <section id="home-slider">
        <div class="slider">
            <div class="slide-viewer">
                
                <div id="right-arrow" class="arrow">
                    <img src="<?php bloginfo('template_directory'); ?>/img/right-arrow.png" alt="logo" alt="right arrow">
                </div>
                <div id="left-arrow" class="arrow">
                    <img src="<?php bloginfo('template_directory'); ?>/img/left-arrow.png" alt="logo" alt="left arrow">
                </div>
                

                <?php if( have_rows('home_slider') ): ?>

                    <div class="slide-group">

                        <?php while( have_rows('home_slider') ): the_row(); 

                            // vars
                            $imageSlide = get_sub_field('image_slide');
                            $slideContent = get_sub_field('slide_content');

                            ?>
                            
                            <div class="slide" style="background-image: url(<?php echo $imageSlide; ?>);">
                                
                                <?php if( $slideContent ): ?>
                                    <div class="slide-content">
                                        <?php echo $slideContent; ?>
                                    </div>
                                <?php endif; ?>
                                <div class="mobile-slide-content">
                                    <div class="mobile-slide-content-wrapper">
                                        <h1>Getting you started towards home ownership</h1>
                                    </div>
                                </div>

                            </div>


                        <?php endwhile; ?>

                    </div>
    
                <?php endif; ?>
                
            </div>
        </div>
            
    </section>
        
    <?php if(get_field('home_slider')): $i = 0; ?>

        <div class="image-grp">
     
        <?php while( have_rows('home_slider') ): the_row(); $i++; 

            // vars
            $imageButton = get_sub_field('image_button');

        ?>
            
            <div id="image-button-<?php echo $i; ?>" class="image-button">
                <img src="<?php echo $imageButton['url']; ?>" alt="<?php echo $imageButton['alt'] ?>" />    
            </div>
     
        <?php endwhile; ?>
     
        </div>
     
    <?php endif; ?>

    <section id="home-info">
    	<div class="home-text">
    		<?php while ( have_posts() ) : the_post(); ?>

    			<?php the_content(); ?>

    		<?php endwhile; // End of the loop. ?>	
    	</div>
    </section>

    <section id="home-products">
    	<div class="product">
    		<a href="#">
    			<img class="learn-more" src="/wp-content/uploads/2015/12/credit.png" alt="Credit Card">
    		</a>
    		<a href="#">
    			<h3>Lorem ipsum dolore</h3>
    			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore</p>
                <a class="learn-more" href="">Learn More <i class="fa fa-chevron-circle-right"></i></a>
    		</a>
    	</div>
    	<div class="product">
    		<a href="#">
    			<img src="/wp-content/uploads/2015/12/computer.png" alt="Computer">
    		</a>
    		<a href="#">
    			<h3>Lorem ipsum dolore</h3>
    			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore</p>
                <a class="learn-more" href="">Learn More <i class="fa fa-chevron-circle-right"></i></a>

    		</a>
    	</div>
    	<div class="product">
    		<a href="#">
    			<img src="/wp-content/uploads/2015/12/mobi.png" alt="Mobi Money">

    		<a href="#">
    			<h3>Lorem ipsum dolore</h3>
    			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore</p>
                <a class="learn-more" href="">Learn More <i class="fa fa-chevron-circle-right"></i></a>
    		</a>
    	</div>
    </section>

    


<?php get_footer(); ?>



