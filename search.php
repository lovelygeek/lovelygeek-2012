<?php get_header(); ?>
			
	<div id="content">
			
		<div id="inner-content" class="wrap clearfix">
			
			<div id="main" class="ninecol clearfix" role="main">
					
				<h1 class="archive_title"><span>Search Results for:</span> <?php echo esc_attr(get_search_query()); ?></h1>
					
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
								
							<h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
								
							<p class="meta"><?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "bonestheme"); ?> <?php the_category(', '); ?>.</p>
							
							<section class="post-content">
								<div class="front-thumb-circle alignleft"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'front-thumb' ); ?></a></div>
								<?php echo substr(strip_tags(get_the_content()),0,300); ?>...
							</section> <!-- end article section -->
						
						</article> <!-- end article -->
						
					<?php endwhile; ?>	
				
					<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
						
						<?php page_navi(); // use the page navi function ?>
						
					<?php } else { // if it is disabled, display regular wp prev & next links ?>
						<nav class="wp-prev-next">
							<ul class="clearfix">
								<li class="next-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
								<li class="prev-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
							</ul>
						</nav>
					<?php } ?>	
					
					<h4>Try Again?</h4>
					<?php get_search_form(); ?>		
							
					<?php else : ?>
						
					<!-- this area shows up if there are no results -->
					
					<article id="post-not-found">
					    <header>
					    	<h1>No Results Found</h1>
					    </header>
					    <section class="post-content">
					    	<p>Sorry, but the requested resource was not found on this site.</p>
					    </section>
					    <footer>
					    </footer>
					</article>
						
				<?php endif; ?>
					
			</div> <!-- end #main -->
    				
		</div> <!-- end #inner-content -->
    
	</div> <!-- end #content -->

<?php get_footer(); ?>