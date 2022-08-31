<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Onepage_Studio
 */

?>
	<footer class="text-center ">
		<div class="container">
			<?php
				$footer_logo = get_field('footer_logo', 'option'); 
				$footer_logo_bold_text = get_field('footer_logo_bold_text', 'option'); 
				$footer_logo_normal_text = get_field('footer_logo_normal_text', 'option'); 

				/*Footer Typography
				-----------------------------*/
				$footer_bold_text_font_family = get_field('footer_bold_text_font_family', 'option'); 
				$footer_normal_text_font_family = get_field('footer_normal_text_font_family', 'option'); 
			?>
			<span class="logo-footer" style="font-family: 
					<?php 
					if($footer_normal_text_font_family == 0 )
						{ 
							echo "Poppins-Regular"; 
						}
						else if($footer_normal_text_font_family == 1 )
						{ 
							echo "Poppins-Medium";
						}
						else if($footer_normal_text_font_family == 2) {
							echo "Poppins-SemiBold";
						}
						else if ($footer_normal_text_font_family == 3) {
							echo "Poppins-Bold";
						}
						?>;">
				<?php 
					if($footer_logo){
						echo '<img class="footer-logo" src="'.$footer_logo.'">';
					}
				?>	
				<span class="bold-text" style="font-family: 
					<?php 
					if($footer_bold_text_font_family == 0 )
						{ 
							echo "Poppins-Regular"; 
						}
						else if($footer_bold_text_font_family == 1 )
						{ 
							echo "Poppins-Medium";
						}
						else if($footer_bold_text_font_family == 2) {
							echo "Poppins-SemiBold";
						}
						else if ($footer_bold_text_font_family == 3) {
							echo "Poppins-Bold";
						}
						?>;"><?php echo $footer_logo_bold_text; ?></span><?php echo $footer_logo_normal_text; ?>
				</span>
			<div class="row justi-cen">
				<ul class="footer-links-main col-md-12">
					<li class="footer-links"><a href="#">About</a></li>
					<li class="footer-links"><a href="#">Services</a></li>
					<li class="footer-links"><a href="#">Project</a></li>
					<li class="footer-links"><a href="#">Team</a></li>
					<li class="footer-links"><a href="#">Term & Conditions</a></li>
					<li class="footer-links"><a href="#">Privacy Policy</a></li>
					<li class="footer-links"><a href="#">Testimonial</a></li>
					<li class="footer-links"><a href="#">Blog</a></li>
					<li class="footer-links"><a href="#">Contact</a></li>
				</ul>
			</div>		                                                 
			<p class="copy-right">© 2017 Artistpoint is powered by <span>DotStore.</span></p>	
		</div>	
	</footer>

<?php wp_footer(); ?>

</body>
</html>
