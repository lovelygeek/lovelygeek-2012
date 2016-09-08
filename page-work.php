<?php /* Template Name: Work - page with no sidebar */ ?>

<?php get_header(); ?>
			
	<div id="content">
		
		<div id="inner-content" class="wrap clearfix">
	
			<div id="main" class="twelvecol clearfix" role="main">
				<?php the_title( '<h1>', '</h1>' ); ?>					
				<ul class="work">	
					<?php query_posts('post_type=page&post_parent=12&posts_per_page=9'); while (have_posts()) : the_post(); ?>
								<li class="article" id="post-<?php the_ID(); ?>">
									<div class="preview"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('work-thumb'); ?></a></div>
									
									<div class="article-over">
										<h5><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
										<?php echo get_post_meta($post->ID, 'Tags', true); ?>
										<p><a href="<?php echo get_post_meta($post->ID, 'URL', true); ?>" title="View Live Site" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/btnWebsite.png"></a> 
										<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/library/images/btnDetails.png"></a>
									</div><!--article-over-->
								</li>
							<?php endwhile; ?>
					<?php wp_reset_query();?>
				</ul>
			</div> <!-- end #main -->
			
			<?php get_sidebar(); // sidebar 1 ?>
			
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>