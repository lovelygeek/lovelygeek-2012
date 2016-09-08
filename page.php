<?php get_header(); ?>
			
			<div id="content">
				
				<div id="inner-content" class="wrap clearfix">
			
					<div id="main" class="eightcol clearfix" role="main">
					
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
		
							
							<h1><?php the_title(); ?></h1>
							
													
			
					
						<section class="post-content clearfix" itemprop="articleBody">
							<?php the_content(); ?>				
						</section> <!-- end article section -->
						
						<?php if (is_page('about')) { ?>
						
							<p class="postmetadata">
								<!--<img src="<?php bloginfo('template_url'); ?>/library/images/behance.png" alt="Behance" />-->
								<a href="http://delicious.com/darthcena/" title="Delicious"><img src="<?php bloginfo('template_url'); ?>/library/images/delicious.png" alt="Delicious" /></a>
								<a href="http://dribbble.com/LovelyGeek" title="Dribbble"><img src="<?php bloginfo('template_url'); ?>/library/images/dribbble.png" alt="Dribbble" /></a>
								<a href="http://facebook.com/lovelygeek" title="Facebook"><img src="<?php bloginfo('template_url'); ?>/library/images/facebook.png" alt="Facebook" /></a>
								<a href="http://plus.google.com/104490952671809548007/posts" title="Google+"><img src="<?php bloginfo('template_url'); ?>/library/images/google.png" alt="Google+" /></a>
								<a href="http://www.last.fm/user/cenamaria" title="Last.fm"><img src="<?php bloginfo('template_url'); ?>/library/images/lastfm.png" alt="Last.fm" /></a>
								<a href="http://www.linkedin.com/in/lovelygeek" title="LinkedIn"><img src="<?php bloginfo('template_url'); ?>/library/images/linkedin.png" alt="Linked In" /></a>
								<a href="http://pinterest.com/lovelygeek/" title="Pinterest"><img src="<?php bloginfo('template_url'); ?>/library/images/pinterest.png" alt="Pinterest" /></a>
								<a href="http://twitter.com/LovelyGeek" title="Twitter"><img src="<?php bloginfo('template_url'); ?>/library/images/twitter.png" alt="Twitter" /></a>
								<a href="http://www.vimeo.com/lovelygeek" title="Vimeo"><img src="<?php bloginfo('template_url'); ?>/library/images/vimeo.png" alt="Vimeo" /></a>
								<a href="http://zerply.com/darthcena/public" title="Zerply"><img src="<?php bloginfo('template_url'); ?>/library/images/zerply.png" alt="Zerply" /></a>
							</p>
						
						<?php } ?>

						
					
					</article> <!-- end article -->
						
						
						<?php endwhile; ?>		
						
						<?php else : ?>
						
						<article id="post-not-found">
						    <header>
						    	<h1>Not Found</h1>
						    </header>
						    <section class="post-content">
						    	<p>Sorry, but the requested resource was not found on this site.</p>
						    </section>
						    <footer>
						    </footer>
						</article>
						
						<?php endif; ?>
					
					</div> <!-- end #main -->
    				
					<?php get_sidebar(); // sidebar 1 ?>
					
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>