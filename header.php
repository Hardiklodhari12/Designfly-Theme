<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Designfly
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="header_panel">

	<header>
		<!-- <div class="wrapper"> -->
		<div id="header_logo">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<?php
			else :
				?>
				<?php
			endif;
			$designfly_description = get_bloginfo( 'description', 'display' );
			if ( $designfly_description || is_customize_preview() ) :
				?>
				<p><?php echo $designfly_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
		<div class="menu_items">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>



			</div><!-- #site-navigation -->
	

		<div id="search_icon">		
			<input id="search_box" type="text"/>
			
  <button type="submit" id="icon"><i class="fa fa-search"></i></button>
		</div>
		</div>
		</div>
		
		<?php
			
			if(is_front_page()){
				
				echo '<div class="container">';
					echo '<center style="background-color:#e73d2d;"><img id="myImage"  src="http://one.wordpress.test/wp-content/uploads/2019/12/slider-image-e1578147139817.png" alt="SS" width="544px" height="544px"/></center>';
					echo '<div class="arrowl"> <img onclick = "changep()" src="http://one.wordpress.test/wp-content/uploads/2020/01/slider-arrows-2.png" alt="left arrow" /> </div>';
					echo '<div class="arrowr"> <img onclick = "changep()" src="http://one.wordpress.test/wp-content/uploads/2020/01/slider-arrows-3.png" alt="right arrow" /> </div>';
					echo '<div class="stitle">Gearing up the ideas</div>';
					echo '<div class="subtt">It is highly recommended that you make all the theme customization options available in the WordPress Customizer itself so that normal users who don’t have much technical knowledge can find those settings easily.</div>';
					
				echo '</div>';
			}
			
		?>
		
	<div class="featurebg">
			<div class="feature_a">
				<div class="feature_spacing">
					<div class="feature_logo">
						<img src="http://one.wordpress.test/wp-content/uploads/2020/01/feature-icons.png" alt="image" />
					</div>
					<div class="feature_details">
						<a href="#">Advertising</a><p>Advertising is a means of communication with the users of a product or service.</p>
					</div>
				</div>
			</div>
			<div class="feature_b">
				<div class="feature_spacing">
					<div class="feature_logo">
						<img src="http://one.wordpress.test/wp-content/uploads/2020/01/feature-icons-1.png" alt="image" />
					</div>
					<div class="feature_details">
						<a href="#">Multimedia</a><p>Multimedia is combination of different content forms such as text, audio, images, video, etc..</p>
					</div>
				</div>
			</div>
			<div class="feature_c">
				<div class="feature_spacing">
					<div class="feature_logo">
						<img src="http://one.wordpress.test/wp-content/uploads/2020/01/feature-icons-2.png" alt="image" />
					</div>
					<div class="feature_details">	
						<a href="#">Photography</a><p>Photography is the art of capturing light with a camera to create an image.</p>
					</div>
				</div>
			</div>
	</div>
		
	</header><!-- #masthead -->
	<div id="content" class="main_content">
			<?php 
			$ab = 24;
		if (   is_front_page() or get_the_ID() == 24 or get_the_ID() == 170) {
			?>
	<script>
						document.getElementById('content').style.width = "66%";
						document.getElementById('content').style.padding = "2%";

	</script>
		<?php } ?>
	<script>
            var image =  document.getElementById("myImage");

            function changep()
            {
                if (image.getAttribute('src') == "http://one.wordpress.test/wp-content/uploads/2019/12/slider-image-e1578147139817.png")
                {
                    image.src = "http://one.wordpress.test/wp-content/uploads/2019/12/image-3.png";
                }
                else
                {
                    image.src = "http://one.wordpress.test/wp-content/uploads/2019/12/slider-image-e1578147139817.png";
                }
            }
	</script>
	