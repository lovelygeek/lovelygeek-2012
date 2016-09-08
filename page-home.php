<?php /* Template Name: Home */ ?>

<?php get_header(); ?>
			
	<section id="hero">
		<img src="<?php echo get_template_directory_uri(); ?>/library/images/desk.jpg">
		<p>Hello, my name is Cristina. I am a Sacramento-based web professional who specializes in front-end development, design, and WordPress. <a href="/about">Learn more &raquo;</a></p>
		<hr />
	</section>
	
	<section id="recentPosts">
		<h2>Recent Posts From the Blog</h2>
		<?php query_posts('posts_per_page=2'); while (have_posts()) : the_post(); ?>
			<article class="frontPost">
				<div class="front-thumb-circle alignleft"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'front-thumb' ); ?></a></div>
				<div class="previewpost">
					<h4><a href="<?php the_permalink(); ?>"><?php echo substr(strip_tags(get_the_title()),0,20); ?>...</a></h4>
					<?php echo substr(strip_tags(get_the_content()),0,80); ?>...</p>
					<p class="text-right"><a href="<?php the_permalink(); ?>">Read more &raquo;</a></p>
				</div>
			</article>	
		<?php endwhile;?>
		<?php wp_reset_query();?>
	</section>

<?php get_footer(); ?>