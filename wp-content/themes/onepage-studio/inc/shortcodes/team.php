<?php
/**
 * Team data view
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package Onepage_Studio
 */


	function team_shortcode(){

		?>
		<section class="ns-our-team">
			<div class="container">
				<span class="ns-service-span"><?php echo get_field('team_section_title'); ?></span>
				<h3 class="ns-service-heading"><?php echo get_field('team_section_blue_title'); ?></h3>
				<p class="ns-service-pr"><?php echo get_field('team_section_paragraph'); ?></p>
				<div class="row">
				
					  <!-- Swiper -->
					    <div class="swiper mySwiperteam">
					      <div class="swiper-wrapper">
						        <?php
									$team = array( 'post_type' => 'team', 
									'post_status' => 'publish', 
									'posts_per_page' => -1, 
									'order' => 'ASC'
									); 
									$loop = new WP_Query( $team ); 
									if($loop->have_posts()){
									while ( $loop->have_posts() ) : $loop->the_post();
								?>
							        <div class="swiper-slide text-center">
							        	<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
							        	<?php
							        		$facebook = get_field('facebook');
							        		$twitter = get_field('twitter');
							        		$google_plus = get_field('google_plus');
							        		$linkedin = get_field('linkedin');

							        		if(!empty($facebook) || !empty($twitter) || !empty($google_plus) || !empty($linkedin)){
										?>
							        	<div class="social-icon">
							        		<?php if(!empty($facebook)){ ?>
							        		<a href="<?php echo $facebook; ?>" target="_blank">
								        		<span>
								        			<i class="fa fa-facebook" aria-hidden="true"></i>
								        		</span>
							        		</a>
							        		<?php } ?>
							        		<?php if(!empty($twitter)){ ?>
								        	<a href="<?php echo $twitter; ?>" target="_blank">	
								        		<span>
								        			<i class="fa fa-twitter"></i>
								        		</span>	
								        	</a>
								        	<?php } ?>
								        	<?php if(!empty($google_plus)){ ?>
								        	<a href="<?php echo $google_plus; ?>" target="_blank">
								        		<span>
								        			<i class="fa fa-google-plus"></i>
								        		</span>	
								        	</a>
								        	<?php } ?>
								        	<?php if(!empty($linkedin)){ ?>
								        	<a href="<?php echo $linkedin; ?>" target="_blank">	
								        		<span>
								        			<i class="fa fa-linkedin"></i>
								        		</span>	
								        	</a>
								        	<?php } ?>	
							        	</div>
							        	<?php 
							        	} 
							        	?>	
							        	<h5 class="ns-work-heading"><?php the_title(); ?></h5>
							        	<span class="ns-work-sub-heading"><?php echo get_field('sub_text'); ?></span>
							        	<p class="ns-work-para"><?php the_content(); ?></p>
							    	</div>
						        <?php
						         	endwhile;
						         	}else{	
						         	?>
						         		<span class="ns-service-span">Team data not found.</span>
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
	add_shortcode('team_shortcode_view', 'team_shortcode');
	?>