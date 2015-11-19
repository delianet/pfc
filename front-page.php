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
                    <img src="http://www.joblo.com/img/redesign-portal-2013/slide-arrows.png" alt="left arrow">
                </div>
                <div id="left-arrow" class="arrow">
                    <img src="http://www.joblo.com/img/redesign-portal-2013/slide-arrows.png" alt="left arrow">
                </div>
                

                <?php if( have_rows('home_slider') ): ?>

                    <div class="slide-group">

                        <?php while( have_rows('home_slider') ): the_row(); 

                            // vars
                            $imageSlide = get_sub_field('image_slide');
                            $slideContent = get_sub_field('slide_content');

                            ?>

                            <div class="slide">
                                
                                <?php if( $slideContent ): ?>
                                    <div class="slide-content">
                                        <?php echo $slideContent; ?>
                                    </div>
                                <?php endif; ?>

                                    <img src="<?php echo $imageSlide['url']; ?>" alt="<?php echo $imageSlide['alt'] ?>" />

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
    			<img src="http://placehold.it/350x150" alt="">
    		</a>
    		<a href="#">
    			<h3>Lorem ipsum</h3>
    			<p>Lorem ipsum dolor sit amet</p>
    		</a>
    	</div>
    	<div class="product">
    		<a href="#">
    			<img src="http://placehold.it/350x150" alt="">
    		</a>
    		<a href="#">
    			<h3>Lorem ipsum</h3>
    			<p>Lorem ipsum dolor sit amet</p>
    		</a>
    	</div>
    	<div class="product">
    		<a href="#">
    			<img src="http://placehold.it/350x150" alt="">

    		<a href="#">
    			<h3>Lorem ipsum</h3>
    			<p>Lorem ipsum dolor sit amet</p>
    		</a>
    	</div>
    </section>


<?php get_footer(); ?>



