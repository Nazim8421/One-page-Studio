<?php
/**
 * Team data view
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package Onepage_Studio
 */


	function work_shortcode(){
		?>
		<section class="ns-our-work">
			<div class="container">
				<span class="ns-service-span"><?php echo get_field('work_section_title'); ?></span>
				<h3 class="ns-service-heading"><?php echo get_field('work_section_blue_title'); ?></h3>
				<p class="ns-service-pr"><?php echo get_field('work_section_paragraph'); ?></p>
				<div class="row">
				
					  <!-- Swiper -->
					    <div class="swiper mySwiper">
					      <div class="swiper-wrapper">
					      	<?php
								$portfolio = array( 'post_type' => 'portfolio', 
								'post_status' => 'publish', 
								'posts_per_page' => -1, 
								'order' => 'ASC'
								); 
								$portfolioloop = new WP_Query( $portfolio ); 
								if($portfolioloop->have_posts()){
								while ( $portfolioloop->have_posts() ) : $portfolioloop->the_post();
							?>
					        <div class="swiper-slide text-center">
					        	<img src="<?php echo get_the_post_thumbnail_url(); ?>">
					        	<h5 class="ns-work-heading"><?php the_title(); ?></h5>
					        	<span class="ns-work-sub-heading"><?php echo get_field('sub_text'); ?></span>
					        	<p class="ns-work-para"><?php the_content(); ?></p>
					    	</div>
					        <?php
					         	endwhile; 
					         }else{
					         	?>
					         		<span class="ns-service-span">Work data not found.</span>
					         	<?php
					         }
								wp_reset_postdata();
							?>
					        
					      </div>
					      <div class="swiper-pagination"></div>
					    </div>
						
				</div>	
			</div>
		</section>					       
	<?php
	}
	add_shortcode('work_shortcode_view', 'work_shortcode');
	?>