<?php /* Template Name: Case Study */ ?>
<?php get_header(); ?>
	<div id="content">
		<div id="inner-content" class="wrap clearfix">
			<div id="main" class="twelvecol clearfix" role="main">
			
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix entry'); ?>>
					<h1><?php the_title(); ?></h1>

					<?php if (is_page('river-city-pool-care')) { ?>
						<div class="flexslider">
							<ul class="slides">
								<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/screenshots/devicesRivercity.png" /></li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/screenshots/sketchRivecity.jpg" /></li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/screenshots/wireframeRivercity.jpg" /></li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/screenshots/lrgRivercity.jpg" /></li>
							</ul>
						</div><!--.flexslider-->					
					<?php } ?>						
					
					<?php if (is_page('sundance-embroidery')) { ?>
						<div class="flexslider">
							<ul class="slides">
								<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/screenshots/devicesSundance.png" /></li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/screenshots/sketchSundance.jpg" /></li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/screenshots/lrgSundance.jpg" /></li>
							</ul>
						</div><!--.flexslider-->					
					<?php } ?>	
					
					<?php if (is_page('ca-grocers-educational-foundation')) { ?>
						<div class="flexslider">
							<ul class="slides">
								<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/screenshots/devicesCgaef.png" /></li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/screenshots/wireframeCgaef.jpg" /></li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/screenshots/lrgCgaef.jpg" /></li>
							</ul>
						</div><!--.flexslider-->					
					<?php } ?>	
										
					<?php if (is_page('dfa')) { ?>
						<div class="flexslider">
							<ul class="slides">
								<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/screenshots/devicesDFA.png" /></li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/screenshots/sketchDfa.jpg" /></li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/screenshots/lrgDfa.jpg" /></li>
							</ul>
						</div><!--.flexslider-->					
					<?php } ?>					
					
					<?php if (is_page('zappettini-bradley')) { ?>
						<div class="flexslider">
							<ul class="slides">
								<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/screenshots/devicesZblaw.png" /></li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/screenshots/sketchZblaw.jpg" /></li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/screenshots/wireframeZblaw.jpg" /></li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/screenshots/lrgZblaw.jpg" /></li>
							</ul>
						</div><!--.flexslider-->					
					<?php } ?>
					
					<?php if (is_page('morgans-restaurant')) { ?>
						<div class="flexslider">
							<ul class="slides">
								<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/screenshots/devicesMorgans.png" /></li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/screenshots/lrgMorgans.jpg" /></li>
							</ul>
						</div><!--.flexslider-->					
					<?php } ?>					

					<?php if (is_page('erin-dealey')) { ?>
						<div class="flexslider">
							<ul class="slides">
								<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/screenshots/devicesErindealey.png" /></li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/screenshots/sketchErindealey.jpg" /></li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/screenshots/wireframeErindealey.jpg" /></li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/screenshots/lrgErindealey.jpg" /></li>
							</ul>
						</div><!--.flexslider-->					
					<?php } ?>

					<?php if (is_page('heretohelplearning')) { ?>
						<div class="flexslider">
							<ul class="slides">
								<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/screenshots/devicesHeretohelplearning.png" /></li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/screenshots/lrgHeretohelplearning.jpg" /></li>
							</ul>
						</div><!--.flexslider-->					
					<?php } ?>
					
					<?php if (is_page('kobesushi')) { ?>
						<div class="flexslider">
							<ul class="slides">
								<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/screenshots/devicesKobesushi.png" /></li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/screenshots/sketchKobesushi.jpg" /></li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/screenshots/lrgKobesushi.jpg" /></li>
							</ul>
						</div><!--.flexslider-->					
					<?php } ?>					
			</article> <!-- end article -->
			
			<?php  if((get_post_meta($post->ID, "About", true))) { ?>
			<article class="aboutproject">			
				<?php 
					echo '<h3>About the Project</h3>';
					echo get_post_meta($post->ID, 'About', true); 
				?>
			</article>
			<?php } ?>

			<?php  if((get_post_meta($post->ID, "Testimonial", true))) { ?>
			<article class="testimonial">
				<?php 
				echo '<h3>What the Client Said</h3>';
				echo get_post_meta($post->ID, 'Testimonial', true); ?>
			</article>
			<?php } ?>
			
			<?php  if((get_post_meta($post->ID, "Details", true))) { ?>
			<article class="details">
				<?php 
				echo '<h3>Project Info</h3>';
				echo get_post_meta($post->ID, 'Details', true); ?>
			</article>
			<?php } ?>
			
			
		<?php endwhile; endif; ?>

				<p class="browse"><div class="alignleft"><?php echo previous_page_not_post('&laquo; %title'); ?></div> <div class="alignright"><?php echo next_page_not_post('%title &raquo;'); ?></div></p>
			</div> <!-- end #main -->
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->
<?php get_footer(); ?>