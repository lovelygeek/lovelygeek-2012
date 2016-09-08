<?php get_header(); ?>
			
	<div id="content">
			
		<div id="inner-content" class="wrap clearfix">
			
			<div id="main" class="eightcol clearfix" role="main">
					
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
								
						<p class="postmetadata"><?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <span class="amp">&</span> <?php _e("filed under", "bonestheme"); ?> <?php the_category(', '); ?> <?php edit_post_link('Edit &raquo;', '&#9998; ', ''); ?></p>
						
						<section class="post-content clearfix">
						<?php the_content(__('<span class="read-more">Read more on "'.the_title('', '', false).'" &raquo;</span>', "bonestheme")); ?>
						</section> <!-- end article section -->
							
						<p class="postmetadata">
							<img src="<?php bloginfo( 'template_url' ); ?>/library/images/comment.png" alt="" class="middle" /> 
							<?php wp_link_pages(); ?><a href="<?php comments_link(); ?>"><?php comments_number('Leave a Comment','1 Comment','% Comments'); ?></a>
						</p>
							
						<?php comments_template(); ?>
						
					</article> <!-- end article -->
						
						
						<?php endwhile; ?>	
						
						<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
							
							<?php page_navi(); // use the page navi function ?>
							
						<?php } else { // if it is disabled, display regular wp prev & next links ?>
							<div class="wp-prev-next">
								<ul class="clearfix">
									<li class="next-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
									<li class="prev-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
								</ul>
							</div>
						<?php } ?>		
						
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