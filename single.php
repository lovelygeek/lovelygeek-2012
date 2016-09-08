<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
					<div id="main" class="eightcol clearfix" role="main">
					
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	
							
							<h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1>  
							
							<p class="postmetadata"><?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('l, F jS, Y'); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "bonestheme"); ?> <?php the_category(', '); ?>. <?php edit_post_link('Edit &raquo;', '&#9998; ', ''); ?></p>
						
					
						<section class="post-content clearfix" itemprop="articleBody">
							<?php the_content(); ?>
						</section> <!-- end article section -->
						
			
							<?php the_tags('<p class="tags"><span class="tags-title">Tags:</span> ', ', ', '</p>'); ?>
						
						<?php comments_template(); ?>
					
					</article> <!-- end article -->
						
		<div class="browse">
			<p class="next"><?php next_post_link('%link &raquo;'); ?></p>
			<p class="previous"><?php previous_post_link('&laquo; %link'); ?></p>
		</div>

		<?php endwhile; endif; ?>
					
					</div> <!-- end #main -->
    				
					<?php get_sidebar(); // sidebar 1 ?>
    			
    			</div> <!-- #inner-content -->
    			
			</div> <!-- end #content -->

<?php get_footer(); ?>