<?php

/**
* Template Name: Home
*
*
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Onepage_Studio
 */

	get_header();
?>

	<section class="ns-bg-banner">
		<div class="container text-center">
			<span class="ns-span">repeat predefined</span>
			<h1 class="ns-heading">Developing Your Oppertunities Within Your Business</h1>
			<p class="ns-paragraph">Many variations of passages of Lorem Ipsum available, but the
				majority have suffered alteration in some form, by injected humour, or randomised....</p>
			<button class="ns-btn">View More</button>
		</div>
	</section>	


	<section class="ns-services">
		<div class="ns-bg-service-pat">
			
			<div class="ns-service-blur">
			</div>	
			
			<div class="row">
				<div class="col-lg-4 col-md-12">
					<img class="ns-service-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/g-img copy.png" alt="">
				</div>
				
				<div class="col-lg-8 col-md-12">
					<div class="ns-service-org">
						<div class="container ns-service-white-box">
							<span class="ns-service-span">Our Services</span>
							<h3 class="ns-service-heading">What We Do</h3>
							<div class="row">
								
								<div class="col-md-6">
									<div class="ns-flx">
										<img class="ns-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/1.png">
										<div class="ns-fl-box">
											<h3 class="ns-service-fn">Financial Consulting</h3>
											<p class="ns-service-pr">All the Lorem Ipsu generon the Internet tend to repeat predefined.</p>
										</div>
									</div>
								</div>
								
								<div class="col-md-6">
									<div class="ns-flx">
										<img class="ns-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/2.png">
										<div class="ns-fl-box">
											<h3 class="ns-service-fn">Financial Consulting</h3>
											<p class="ns-service-pr">All the Lorem Ipsu generon the Internet tend to repeat predefined.</p>
										</div>
									</div>
								</div>

								<div class="col-md-6">
									<div class="ns-flx">
										<img class="ns-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/3.png">
										<div class="ns-fl-box">
											<h3 class="ns-service-fn">Financial Consulting</h3>
											<p class="ns-service-pr">All the Lorem Ipsu generon the Internet tend to repeat predefined.</p>
										</div>
									</div>
								</div>

								<div class="col-md-6">
									<div class="ns-flx">
										<img class="ns-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/4.png">
										<div class="ns-fl-box">
											<h3 class="ns-service-fn">Financial Consulting</h3>
											<p class="ns-service-pr">All the Lorem Ipsu generon the Internet tend to repeat predefined.</p>
										</div>
									</div>
								</div>

								<div class="col-md-6">
									<div class="ns-flx">
										<img class="ns-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/5.png">
										<div class="ns-fl-box">
											<h3 class="ns-service-fn">Financial Consulting</h3>
											<p class="ns-service-pr">All the Lorem Ipsu generon the Internet tend to repeat predefined.</p>
										</div>
									</div>
								</div>

								<div class="col-md-6">
									<div class="ns-flx">
										<img class="ns-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/6.png">
										<div class="ns-fl-box">
											<h3 class="ns-service-fn">Financial Consulting</h3>
											<p class="ns-service-pr">All the Lorem Ipsu generon the Internet tend to repeat predefined.</p>
										</div>
									</div>
								</div>
							
						</div>	
					</div>	
				</div> 	
			</div>	
		</div>	
	</section>	

	<!--------Work Shortcode----------->

	<?php
		$hide_work_section = get_field('hide_work_section');
		if($hide_work_section == ''){ 
			echo do_shortcode( '[work_shortcode_view]' );
		} 
	?>

	<section class="ns-two-boxes">
		<div class="container">
		<span class="ns-box-sub">Our Work</span>
		<h3 class="ns-box-head">Some form by humour </h3>
		<p class="ns-box-para">Passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable If you are going to use a passage of Lorem Ipsum. you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of o  ver randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need ure there isn't anything embarrassing hidden in the middle of Latin words, combined with a hidden in the middle of Latin words, combined.</p>

		<div class="row">
			<div class="col-md-6 pd-0">
				<div class="ns-box-1 text-center">
					<figure>
						<img class="ns-box-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/vision.png">
					</figure>
					<h3 class="ns-box-vision">Vision</h3>
					<p class="ns-work-para">Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
				</div>	
			</div>
			<div class="col-md-6 pd-0">
				<div class="ns-box-2 text-center">
					<figure>
						<img class="ns-box-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/mission.png">
					</figure>
					<h3 class="ns-box-vision">Mission</h3>
					<p class="ns-work-para">Passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
				</div>
			</div>	
		</div>	

		</div>
	</section>	


	<!---------Team Shortcode-------->
	<?php
		$hide_team_section = get_field('hide_team_section');
		if($hide_team_section == ''){ 
			echo do_shortcode( '[team_shortcode_view]' );
		} 
	?>

	<section class="ns-qoute">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-8">
					<h2 class="ns-box-head">Achieve your Business Plan...</h2>
					<p class="ns-box-para">Passages of Lorem Ipsum available, form, by injected humour...</p>
				</div>
				<div class="col-lg-3 col-md-4">
					<button class="ns-btn mtb-50">Get a Qoute</button>
				</div>	
			</div>
		</div>
	</section>


	<section class="testimonial" id="testimonial">

		
        <div class="container">
        	<div class="wrap">

	        	<span class="ns-service-span">Testimonial</span>
				<h3 class="ns-service-heading">Happy Clients</h3>

	            <div class="cont" id="testimonial-content">

	                <div class="active">
	                	<div class="row">
	                		<div class="col-md-4">
		                    	<div class="img">
		                    		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/sam1.png">
		                    	</div>
		                    </div>
		                    <div class="col-md-8">
		                    	<p>Available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of lorem ipsum.</p>

								<p>Generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary.</p>
			                    <h2>Dan O’Brien</h2>
			                    <p>CEO Founder</p>
			                    
		                    </div>    
	                    </div>    
	                </div>
	                
	                <div>
	                    <div class="row">
	                		<div class="col-md-4">
		                    	<div class="img">
		                    		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/sam1.png">
		                    	</div>
		                    </div>
		                    <div class="col-md-8">
		                    	<p>Available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of lorem ipsum.</p>

								<p>Generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary.</p>
			                    <h2>Dan O’Brien</h2>
			                    <p>CEO Founder</p>
			                    
		                    </div>    
	                    </div> 
	                </div>
	                
	                <div>
	                    <div class="row">
	                		<div class="col-md-4">
		                    	<div class="img">
		                    		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/sam1.png">
		                    	</div>
		                    </div>
		                    <div class="col-md-8">
		                    	<p>Available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of lorem ipsum.</p>

								<p>Generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary.</p>
			                    <h2>Dan O’Brien</h2>
			                    <p>CEO Founder</p>
			                    
		                    </div>    
	                    </div> 
	                </div>
	                
	                <div>
	                    <div class="row">
	                		<div class="col-md-4">
		                    	<div class="img">
		                    		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/sam1.png">
		                    	</div>
		                    </div>
		                    <div class="col-md-8">
		                    	<p>Available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of lorem ipsum.</p>

								<p>Generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary.</p>
			                    <h2>Dan O’Brien</h2>
			                    <p>CEO Founder</p>
			                    
		                    </div>    
	                    </div> 
	                </div>
	                
	                <div>
	                    <div class="row">
	                		<div class="col-md-4">
		                    	<div class="img">
		                    		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/sam1.png">
		                    	</div>
		                    </div>
		                    <div class="col-md-8">
		                    	<p>Available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of lorem ipsum.</p>

								<p>Generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary.</p>
			                    <h2>Dan O’Brien</h2>
			                    <p>CEO Founder</p>
			                    
		                    </div>    
	                    </div> 
	                </div>
	                <ul class="dots" id="testimonial-dots">
		                <li class="dot active"></li>
		                <li class="dot"></li>
		                <li class="dot"></li>
		                <li class="dot"></li>
		                <li class="dot"></li>
		            </ul>
	            </div>

            </div>

        </div>
    </section>


	<section class="ns-counter">
		<div class="container">
			<div class="row" id="spin-data">
				<div class="four col-md-3">
					<div class="counter-box">
						<img class="ns-img-counter" src="<?php echo get_template_directory_uri(); ?>/assets/img/counter1.png" alt="">
						<span class="ns-with-sign"><span class="counter">100</span><span class="sign">%</span></span>
						<p class="ns-box-para">Satisfied Customers</p>
					</div>
				</div>
				<div class="four col-md-3">
					<div class="counter-box">
						<img class="ns-img-counter" src="<?php echo get_template_directory_uri(); ?>/assets/img/counter2.png" alt="">
						<span class="counter">1900</span>
						<p class="ns-box-para">Projects Completed</p>
					</div>
				</div>
				<div class="four col-md-3">
					<div class="counter-box">
						<img class="ns-img-counter" src="<?php echo get_template_directory_uri(); ?>/assets/img/counter3.png" alt="">
						<span class="counter">509100</span>
						<p class="ns-box-para">Hours Worked</p>
					</div>
				</div>
				<div class="four col-md-3">
					<div class="counter-box">
						<img class="ns-img-counter" src="<?php echo get_template_directory_uri(); ?>/assets/img/counter4.png" alt="">
						<span class="ns-with-sign"><span class="counter">100</span><span class="sign">%</span></span>
						<p class="ns-box-para">Awwards Winning</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ns-contact">
		<div class="container">
			<span class="ns-service-span">Contact Us</span>
			<h3 class="ns-service-heading text-dark">Lets get in touch</h3>
			<div class="row">
				<div class="col-lg-9 col-md-12">
					<form action="" method="post">
						<div class="row">
							<div class="col-md-6">
							    <div class="form-group">
							      <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>     
							    </div>
							</div>
							<div class="col-md-6">
							    <div class="form-group">
							      <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
							    </div>
							</div>
							<div class="col-md-6">
							     <div class="form-group">
							      <input type="tel" class="form-control" id="phone_number" placeholder="Phone Number" name="phone" required>
							    </div>
							</div>
							<div class="col-md-6">
							    <div class="form-group">
							      <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject" required>
							 	</div>
							</div>
							<div class="col-md-12">
							    <div class="form-group">
							     <textarea class="form-control" id="message" rows="5" placeholder="How can i help?" name="message" required></textarea>
							    </div>
							</div>
						</div>
					    <button type="submit" class="ns-btn">Submit</button>
					</form>
				</div>
				<div class="col-lg-3 col-md-12">
					<div class="ns-contact-details">
						<h4>Address</h4>
						<p>5370 S Arrowhead Trl, Baldwin, MI, 49304</p>
					</div>
					<div class="ns-contact-details">
						<h4>Email</h4>
						<p><a href="mailto:support@artistpoint.com">support@artistpoint.com</a></p>
					</div>
					<div class="ns-contact-details">
						<h4>Phone Number</h4>
						<p><a href="telto:+91 1234 567 098">+91 1234 567 098</a></p>
					</div>
					<div class="ns-contact-details">
						<span>
							<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
						</span>
					</div>
				</div>	
			</div>	
		</div>
	</section>	

	
	
<?php 
	get_footer();
?>

