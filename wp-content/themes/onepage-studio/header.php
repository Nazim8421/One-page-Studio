<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Onepage_Studio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'onepage-studio' ); ?></a>
	<?php
		$header_height = get_field('header_height', 'option'); 
	?>
	<header id="masthead" class="site-header d-flex justify-content-center py-3" style="height: <?php echo $header_height; ?>px;">
		<div class="container">
			<nav class="navbar navbar-expand-sm navbar-dark">

				<?php
					$header_logo = get_field('main_logo', 'option'); 
						
					if(empty($header_logo)){
						the_custom_logo();
					}else if(!empty($header_logo)){
						echo "<a href=". site_url() ."><img width='263' height='40' src=".$header_logo." alt='Onepage Studio'>";	

					}else{

						echo "<h1 class='site-title'><a href=".esc_url( home_url( '/' ) )." rel='home'>".bloginfo( 'name' )."</a></h1>";
					}
					
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$onepage_studio_description = get_bloginfo( 'description', 'display' );
				if ( $onepage_studio_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $onepage_studio_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			
		
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				  	<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
				    <ul class="navbar-nav">
				      	<?php
							/*wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);*/
						?>		
				      <li class="nav-item">
				        <a class="nav-link" href="#">About</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">Services</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">Project</a>
				      </li>  
				       <li class="nav-item">
				        <a class="nav-link" href="#">Team</a>
				      </li> 
				       <li class="nav-item">
				        <a class="nav-link" href="#">Testimonial</a>
				      </li> 
				      <li class="nav-item">
				        <a class="nav-link" href="#">Blog</a>
				      </li> 
				      <li class="nav-item">
				        <a class="nav-link" href="#">Contact</a>
				      </li>    
				    </ul>
				  </div>  
			</nav>
		</div>		
	</header><!-- #masthead -->
