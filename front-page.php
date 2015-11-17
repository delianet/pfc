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
                <div class="slide-group">
                    <div class="slide">
                        <div class="slide-content">This is a test</div>
                        <img src="http://www.joblo.com/portal-images/9/negan-morgan.jpg/730/300/" alt="" />
                    </div>
                    <div class="slide">
                        <img src="http://www.joblo.com/portal-images/9/jessica-jonestr.jpg/730/300/" alt="" />
                    </div>
                    <div class="slide">
                        <img src="http://www.joblo.com/portal-images/9/finding-dory.jpg/730/300/" alt="" />
                    </div>
                    <div class="slide">
                        <img src="http://www.joblo.com/portal-images/9/jessica-jonestr.jpg/730/300/" alt="" />
                    </div>
                </div>
            </div>
        </div>
            
    </section>
        <div class="image-grp">
                <div id="image-button-1" class="image-button">
                    <img src="http://www.joblo.com/portal-images/9/negan-morgan.jpg/730/300/" alt="No two are the same" />
                </div>
                <div id="image-button-2" class="image-button">
                    <img src="http://www.joblo.com/portal-images/9/jessica-jonestr.jpg/730/300/" alt="Monsieur Mints" />
                </div>
                <div id="image-button-3" class="image-button">
                    <img src="http://www.joblo.com/portal-images/9/finding-dory.jpg/730/300/" alt="The Flower Series" />
                </div>
                <div id="image-button-4" class="image-button">
                    <img src="http://www.joblo.com/portal-images/9/jessica-jonestr.jpg/730/300/" alt="The Flower Series" />
                </div>
            </div>

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
    			<img src="" alt="">
    		</a>
    		<a href="#">
    			<h3>Lorem ipsum</h3>
    			<p>Lorem ipsum dolor sit amet</p>
    		</a>
    	</div>
    	<div class="product">
    		<a href="#">
    			<img src="" alt="">
    		</a>
    		<a href="#">
    			<h3>Lorem ipsum</h3>
    			<p>Lorem ipsum dolor sit amet</p>
    		</a>
    	</div>
    	<div class="product">
    		<a href="#">
    			<img src="" alt="">

    		<a href="#">
    			<h3>Lorem ipsum</h3>
    			<p>Lorem ipsum dolor sit amet</p>
    		</a>
    	</div>
    </section>


<?php get_footer(); ?>



